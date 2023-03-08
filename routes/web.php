<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\DurationController;
use App\Http\Controllers\backend\FeatureController;
use App\Http\Controllers\backend\HostCategoryController;
use App\Http\Controllers\backend\HostPackageController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PlanController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;





// Frontend Route 
 Route::get('/', [FrontendController::class,'home'])->name('web.home');
 Route::get('/register-domain', [FrontendController::class,'registerDomain'])->name('web.register.domain');
 Route::get('/ssl-certificate',[FrontendController::class,'sslCertificate'])->name('web.ssl.certificate');
 Route::get('/category/{slug}',[FrontendController::class,'categoryWise'])->name('web.host.category');
 Route::get('/page/{slug}', [FrontendController::class, 'page'])->name('web.page');
 Route::get('/contact', [FrontendController::class, 'contact'])->name('web.contact');
 Route::post('/contact/store', [FrontendController::class,'store'])->name('web.contact.store');



//  backend route

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function (){
       Route::resource('plan', PlanController::class);
       Route::resource('HostCategory', HostCategoryController::class);
       Route::resource('duration', DurationController::class);
       Route::resource('HostPackage', HostPackageController::class);
       Route::resource('setting', SettingController::class);
       Route::resource('feature', FeatureController::class);
       Route::resource('page',PageController::class);

    //    Status And Other Backend Staff
       Route::get('HostCategory/status/{id}',[HostCategoryController::class, 'homeShow'])->name('home.show');
       Route::get('hostPackage/trash', [HostPackageController::class, 'trash'])->name('trash.list');
       Route::get('hostPackage/trash/restore/{slug}', [HostPackageController::class, 'trashRestore'])->name('trash.restore');
       Route::delete('hostPackage/trash/delete/{slug}', [HostPackageController::class, 'trashDelete'])->name('trash.delete');
       Route::get('feature/status/{$id}',[FeatureController::class, 'homeShow'])->name('feature.home.show');
       Route::get('page/status/{id}', [PageController::class, 'status'])->name('page.status');
    });






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
