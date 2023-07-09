<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\DurationResource;
use App\Http\Resources\FeatureResource;
use App\Http\Resources\HostCategoryResource;
use App\Http\Resources\HostPackageResource;
use App\Models\Contact;
use App\Models\Duration;
use App\Models\Feature;
use App\Models\HostCategory;
use App\Models\HostPackage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class FrontendController extends Controller
{
    
    public function home (){  

        $categories = HostCategory::where('home_show', 1)->orderBy('priority', 'asc')->take(12)->get();
         $home_categories = HostCategory::where('home_show', 1)->orderBy('priority', 'asc')->take(12)->get();
         $home_categories->map(function ($data) {
            $id = $data['id'];
            $data['package'] = HostPackageResource::collection(HostPackage::where('hostCategory_id', $id)->inRandomOrder()->take(3)->get());
        });
          $fourPackage = HostPackageResource::collection(HostPackage::orderBy('priority','asc')->take(4)->get());
          $features =  FeatureResource::collection(Feature::latest()->orderBy('priority', 'asc')->take(7)->get());
          return Inertia::render('frontend/index',compact('categories','fourPackage','home_categories','features'));
    }

    public function registerDomain(){
           return Inertia::render('frontend/registerDomain');
    }

    public function sslCertificate(){
           return Inertia::render('frontend/sslCertificate');
    }

    public function categoryWise($slug){
       $category = HostCategory::where('slug', $slug)->first();
       $features =  FeatureResource::collection(Feature::where('hostCategory_id', $category->id)->take(6)->get());
       $allCatFeatures =  FeatureResource::collection(Feature::orderBy('priority', 'asc')->take(6)->get());
          $duration_package = Duration::latest()->select('id','slug')->get();
        $duration_package->map(function ($data) use($category) {
            $id = $data['id'];
            $data['package'] = HostPackageResource::collection(HostPackage:: where('duration_id', $id)->where('hostCategory_id', $category->id)->get());
        });

                return Inertia::render('frontend/categoryHost',compact('features','category','duration_package', 'allCatFeatures'));
    }

    public function page($slug)
    {
          $page = Page::where('slug', $slug)->first();
          return Inertia::render('frontend/pages',compact('page'));
    }

    public function contact()
    {
         return Inertia::render('frontend/contact');
    }

    public function store(Request $request)
    {
           $request->validate([
               'name' => 'required',
               'email' => 'nullable',
               'phone' => 'required',
               'message' => 'required',
           ]);

           Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
           ]);
           return Redirect::back();
    }
}
