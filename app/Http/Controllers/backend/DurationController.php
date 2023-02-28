<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\DurationResource;
use App\Models\Duration;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class DurationController extends Controller
{
    public function index(){
        $durations = DurationResource::collection(Duration::latest()->paginate(10));
  
       return Inertia::render('admin/Duration/index',compact('durations'));
  }

 

  public function store(Request $request){
         $request->validate([
                'name' => 'required|min:3|unique:durations',
         ]);

         Duration::create([
              'name' => $request->name,
              'slug' => Str::slug($request->name, '-')
         ]);
       
         return to_route('admin.duration.index');
  }

  public function edit($slug){
      $duration = Duration::where('slug', $slug)->firstOrFail();
      return Inertia::render('admin/Duration/edit', compact('duration'));
  }

  public function update(Request $request, $slug){
        $request->validate([
          'name' => 'required|min:3',
   ]);

   $duration = Duration::where('slug', $slug)->firstOrFail();
   $duration->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name, '-')
   ]);
   return to_route('admin.duration.index');
  }


  public function destroy($slug){
         $duration = Duration::where('slug', $slug)->firstOrFail()->delete();
         return to_route('admin.duration.index');
  }
}
