<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HostCategoryStoreRequest;
use App\Http\Requests\HostCategoryUpdateRequest;
use App\Http\Resources\HostCategoryResource;
use App\Models\HostCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class HostCategoryController extends Controller
{
     public function index(){
          $hostCategory = HostCategoryResource::collection(HostCategory::orderBy('priority', 'Asc')->paginate(10));
          return Inertia::render('admin/HostCategory/index', compact('hostCategory'));
     }

     public function create(){
          $hostCategory = HostCategoryResource::collection(HostCategory::orderBy('priority', 'Asc')->paginate(10));
          return Inertia::render('admin/HostCategory/create',compact('hostCategory'));
     }


     
     public function store(HostCategoryStoreRequest $request){  
 
       
          if($request->hasFile('image')){
                $image = $request->file('image')->store('image');
          }else{
                $image = null;
          }
          
          HostCategory::create([
                    'name' => $request->name,
                    'priority' => $request->priority,
                    'parent_id' => $request->parent_id,
                    'slug' => Str::slug($request->name, '-'),
                    'user_id' => auth()->user()->id,
                    'description' => $request->description,
                    'image' => $image,
          ]);
          

           return to_route('admin.HostCategory.index');

     }


     public function edit($slug)
     {
           $hostCategory = HostCategory::where('slug', $slug)->firstOrFail();
           $allHostCategory = HostCategory::all();
           return Inertia::render('admin/HostCategory/edit',compact('hostCategory','allHostCategory'));
     }


     public function update(HostCategoryUpdateRequest $request, $slug)
     {
         
          $hostCategory = HostCategory::where('slug', $slug)->firstOrFail();

          if($request->hasFile('image')){
               if($hostCategory->image){
                    Storage::delete($hostCategory->image);
                    
               }
               $image = $request->file('image')->store('image');
         }else{
               $image = $hostCategory->image;
         }

          $hostCategory->update([
               'name' => $request->name,
                    'priority' => $request->priority,
                    'parent_id' => $request->parent_id,
                    'slug' => Str::slug($request->name, '-'),
                    'user_id' => auth()->user()->id,
                    'description' => $request->description,
                    'image' => $image,
          ]);

          return to_route('admin.HostCategory.index');
     }


     public function destroy(HostCategory $HostCategory)
     {
          $HostCategory->delete();
     }


}
