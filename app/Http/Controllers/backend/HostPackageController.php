<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HostPackageStoreRequest;
use App\Http\Requests\HostPackageUpdateRequest;
use App\Http\Resources\HostPackageResource;
use App\Models\Duration;
use App\Models\HostCategory;
use App\Models\HostPackage;
use App\Models\Plan;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class HostPackageController extends Controller
{
    public function index()
    {
        $filters = Request::only('search','perPage');
        $inputSearch = Request::input('search');
        $perPage = Request::input('perPage') ?: 5;
        $plans = Plan::all();
        $hostCategory = HostCategory::all();
        $durations = Duration::all();
        $hostPackages = HostPackageResource::collection(HostPackage::query()
        ->when($inputSearch, function($query, $search){
          $query->where('title','like', "%{$search}%");})->paginate($perPage)->withQueryString());
        return Inertia::render('admin/HostPackage/index',compact('plans','hostCategory', 'durations','hostPackages','filters'));
    }


    public function store(HostPackageStoreRequest $request)
    {
          HostPackage::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title,'-'),
             'price' => $request->price,
              'priority' => $request->priority,
               'description' => $request->description, 
               'icon_class' => $request->icon_class, 
               	'opportunityOne' => $request->opportunityOne,
                'opportunityTwo' => $request->opportunityTwo, 
                'opportunityThree' =>$request->opportunityThree, 
                'opportunityFour' =>$request->opportunityFour,
                 'opportunityFive' =>$request->opportunityFive,
                  'opportunitySix' =>$request->opportunitySix, 
                  'opportunitySeven' =>$request->opportunitySeven, 
                  'opportunityEight' =>$request->opportunityEight, 
                  'opportunityNine' =>$request->opportunityNine, 
                  'opportunityTen' =>$request->opportunityTen, 
                  'opportunityEleven' =>$request->opportunityEleven, 
                  'opportunityTwelve' =>$request->opportunityTwelve, 
                  'hostCategory_id' =>$request->hostCategory_id, 
                  'plan_id' =>$request->plan_id, 
                  'duration_id' =>$request->duration_id,
                  'user_id' => auth()->user()->id,

          ]);
    }


    public function edit($slug)
    {
            $hostPackage = HostPackage::where('slug', $slug)->firstOrFail();
            $plans = Plan::all();
            $hostCategory = HostCategory::all();
            $durations = Duration::all();

            return Inertia::render('admin/HostPackage/edit',compact('durations','hostCategory','plans','hostPackage'));
    }

    public function update(HostPackageUpdateRequest $request, $slug)
    {
           $hostPackage = HostPackage::where('slug', $slug)->firstOrFail();
           $hostPackage->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title,'-'),
             'price' => $request->price,
              'priority' => $request->priority,
               'description' => $request->description, 
               'icon_class' => $request->icon_class, 
               	'opportunityOne' => $request->opportunityOne,
                'opportunityTwo' => $request->opportunityTwo, 
                'opportunityThree' =>$request->opportunityThree, 
                'opportunityFour' =>$request->opportunityFour,
                 'opportunityFive' =>$request->opportunityFive,
                  'opportunitySix' =>$request->opportunitySix, 
                  'opportunitySeven' =>$request->opportunitySeven, 
                  'opportunityEight' =>$request->opportunityEight, 
                  'opportunityNine' =>$request->opportunityNine, 
                  'opportunityTen' =>$request->opportunityTen, 
                  'opportunityEleven' =>$request->opportunityEleven, 
                  'opportunityTwelve' =>$request->opportunityTwelve, 
                  'hostCategory_id' =>$request->hostCategory_id, 
                  'plan_id' =>$request->plan_id, 
                  'duration_id' =>$request->duration_id,
           ]);
           return to_route('admin.HostPackage.index');
    }

    public function show($slug)
    {
      $hostPackage = HostPackageResource::collection(HostPackage::where('slug', $slug)->get());
      return Inertia::render('admin/HostPackage/show',compact('hostPackage'));
    }


    public function destroy($slug)
    {
      
      $hostPackage = HostPackage::where('slug', $slug)->firstOrFail()->delete();
         return to_route('admin.HostPackage.index');
    }
}
