<?php

use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\DurationController;
use App\Http\Controllers\backend\HostCategoryController;
use App\Http\Controllers\backend\HostPackageController;
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
 Route::get('/cpanel-hosting',[FrontendController::class,'cPanelHosting'])->name('web.cpanel.hosting');





//  backend route
Route::middleware('auth')->prefix('admin/')->name('admin.')->group(function (){
       Route::resource('plan', PlanController::class);
       Route::resource('HostCategory', HostCategoryController::class);
       Route::resource('duration', DurationController::class);
       Route::resource('HostPackage', HostPackageController::class);
       Route::resource('setting', SettingController::class);
});




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
