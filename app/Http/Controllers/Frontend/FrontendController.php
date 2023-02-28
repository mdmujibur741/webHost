<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\HostCategoryResource;
use App\Http\Resources\HostPackageResource;
use App\Models\HostCategory;
use App\Models\HostPackage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    
    public function home (){  

         $categories = HostCategory::where('home_show', 1)->orderBy('priority', 'asc')->take(6)->get();
          $tabPackageOne = HostPackageResource::collection( HostPackage::where('hostCategory_id', $categories->slice(0,1)->firstOrFail()->id)->take(3)->get());
          $tabPackageTwo = HostPackageResource::collection(HostPackage::where('hostCategory_id', $categories->slice(1,1)->firstOrFail()->id)->take(3)->get());
          $tabPackageThree = HostPackageResource::collection(HostPackage::where('hostCategory_id', $categories->slice(2,1)->firstOrFail()->id)->take(3)->get());
          $tabPackageFour = HostPackageResource::collection(HostPackage::where('hostCategory_id', $categories->slice(3,1)->firstOrFail()->id)->take(3)->get());
          $tabPackageFive = HostPackageResource::collection(HostPackage::where('hostCategory_id', $categories->slice(4,1)->firstOrFail()->id)->take(3)->get());
          $tabPackageSix = HostPackageResource::collection(HostPackage::where('hostCategory_id', $categories->slice(5,1)->firstOrFail()->id)->take(3)->get());
           
          $fourPackage = HostPackageResource::collection(HostPackage::orderBy('priority','asc')->take(4)->get());

          return Inertia::render('frontend/index',compact('categories','fourPackage','tabPackageOne','tabPackageTwo', 'tabPackageThree', 'tabPackageFour', 'tabPackageFive','tabPackageSix'));
    }

    public function registerDomain(){
           return Inertia::render('frontend/registerDomain');
    }

    public function sslCertificate(){
           return Inertia::render('frontend/sslCertificate');
    }

    public function cPanelHosting(){
                return Inertia::render('frontend/cPanelHost');
    }
}
