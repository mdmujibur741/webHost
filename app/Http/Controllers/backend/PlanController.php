<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlanResource;
use App\Models\Plan;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class PlanController extends Controller
{
      public function index(){
            $plans = PlanResource::collection(Plan::orderBy('priority', 'Asc')->paginate(10));
      
           return Inertia::render('admin/plan/index',compact('plans'));
      }

      public function create(){
       $plans = PlanResource::collection(Plan::orderBy('priority', 'Asc')->paginate(10));
              return Inertia::render('admin/plan/create');
      }

      public function store(Request $request){
             $request->validate([
                    'name' => 'required|min:3|unique:plans',
                    'priority' => 'required|integer',
             ]);

             Plan::create([
                  'name' => $request->name,
                  'priority' => $request->priority,
                  'slug' => Str::slug($request->name, '-')
             ]);
           
             return to_route('admin.plan.index');
      }

      public function edit($slug){
          $plan = Plan::where('slug', $slug)->firstOrFail();
          return Inertia::render('admin/plan/edit', compact('plan'));
      }

      public function update(Request $request, $slug){
            $request->validate([
              'name' => 'required|min:3',
              'priority' => 'required|integer',
       ]);

       $plan = Plan::where('slug', $slug)->firstOrFail();
       $plan->update([
            'name' => $request->name,
            'priority' => $request->priority,
            'slug' => Str::slug($request->name, '-')
       ]);
       return to_route('admin.plan.index');
      }


      public function destroy($slug){
             $plan = Plan::where('slug', $slug)->firstOrFail()->delete();
             return to_route('admin.plan.index');
      }
}
