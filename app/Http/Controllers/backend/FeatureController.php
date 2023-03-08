<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeatureStoreRequest;
use App\Http\Requests\FeatureUpdateRequest;
use App\Http\Resources\FeatureResource;
use App\Models\Feature;
use App\Models\HostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class FeatureController extends Controller
{
    public function index(){
        $hostCategory = HostCategory::select('id','slug')->get();
       
        $features = FeatureResource::collection(Feature::orderBy('priority', 'Asc')->paginate(10));
        return Inertia::render('admin/Feature/index', compact('features','hostCategory'));
   }



   
   public function store(FeatureStoreRequest $request){  

     
        if($request->hasFile('image')){
              $image = $request->file('image')->store('image');
        }else{
              $image = null;
        }
        
        Feature::create([
                  'title' => $request->title,
                  'priority' => $request->priority,
                  'slug' => Str::slug($request->title, '-'),
                  'user_id' => auth()->user()->id,
                  'description' => $request->description,
                  'image' => $image,
                  'hostCategory_id' => $request->hostCategory_id
        ]);
        

         return to_route('admin.feature.index');

   }


   public function edit($slug)
   {
         $feature = Feature::where('slug', $slug)->firstOrFail();
         $hostCategory = HostCategory::select('id','slug')->get();
         return Inertia::render('admin/Feature/edit',compact('feature','hostCategory'));
   }


   public function update(FeatureUpdateRequest $request, $slug)
   {
       
        $feature = Feature::where('slug', $slug)->firstOrFail();

        if($request->hasFile('image')){
             if($feature->image){
                  Storage::delete($feature->image);
                  
             }
             $image = $request->file('image')->store('image');
       }else{
             $image = $feature->image;
       }
  
        $feature->update([
             'title' => $request->title,
                  'priority' => $request->priority,
                  'slug' => Str::slug($request->title, '-'),
                  'user_id' => auth()->user()->id,
                  'description' => $request->description,
                  'image' => $image,
                  'hostCategory_id' => $request->hostCategory_id
        ]);

        return to_route('admin.feature.index');
   }


   public function destroy(Feature $feature)
   {
        $feature->delete();
   }


   public function homeShow($id)
   {
         $feature = Feature::findOrFail($id)->first();
         if($feature->home_show == 1){
               $feature->home_show = 0;
         }else{
          $feature->home_show = 1;
         }
         $feature->save();
         return Redirect::back();
   }
}
