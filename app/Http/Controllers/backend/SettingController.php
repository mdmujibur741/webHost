<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingStoreRequest;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SettingController extends Controller
{
    public function index()
    {
          $setting = Setting::first();
          if($setting ==!null ){
           return Inertia::render('admin/Setting/edit',compact('setting'));
          }else{
          return Inertia::render('admin/Setting/index');
          }
         
    }

    public function store(Request $request)
    {

      
          if($request->hasFile('logo')){
            $logo = $request->file('logo')->store('image');
          }else{
              $logo = null;
          }

          if($request->hasFile('favicon')){
            $favicon = $request->file('favicon')->store('image');
          }else{
              $favicon = null;
          }

          if($request->hasFile('footer_img_one')){
            $footer_img_one = $request->file('footer_img_one')->store('image');
          }else{
              $footer_img_one = null;
          }

          if($request->hasFile('footer_img_two')){
            $footer_img_two = $request->file('footer_img_two')->store('image');
          }else{
              $footer_img_two = null;
          }


          // Inserts
          Setting::create([
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'powered' => $request->powered,
            'logo' => $logo,
            'favicon' => $favicon,
            'about' => $request->about,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'use_link' => $request->use_link,
            'footer_img_one' => $footer_img_one,
            'footer_img_two' => $footer_img_two,
          
          ]);

          return Redirect::back();
      
    }

    public function update(Request $request, Setting $setting)
    {
         

       // return $request;

      if($request->hasFile('logo')){
        if($setting->logo ==!null){
          Storage::delete($setting->logo);
         }
        $logo = $request->file('logo')->store('image');
      }else{
          $logo = $setting->logo;
      }

      if($request->hasFile('favicon')){
        if($setting->favicon ==!null){
          Storage::delete($setting->favicon);
         }
        $favicon = $request->file('favicon')->store('image');
       
      }else{
          $favicon = $setting->favicon;
      }

      if($request->hasFile('footer_img_one')){
        if($setting->footer_img_one ==!null){
          Storage::delete($setting->footer_img_one);
         }
        $footer_img_one = $request->file('footer_img_one')->store('image');
      }else{
          $footer_img_one = $setting->footer_img_one;
      }

      if($request->hasFile('footer_img_two')){
        if($setting->footer_img_two ==!null){
          Storage::delete($setting->footer_img_two);
         }
        $footer_img_two = $request->file('footer_img_two')->store('image');
      }else{
          $footer_img_two = $setting->footer_img_two;
      }

      //return $request;

       $setting->update([
        'mobile' => $request->mobile,
        'email' => $request->email,
        'address' => $request->address,
        'powered' => $request->powered,
        'logo' => $logo,
        'favicon' => $favicon,
        'about' => $request->about,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'instagram' => $request->instagram,
        'use_link' => $request->use_link,
        'footer_img_one' => $footer_img_one,
        'footer_img_two' => $footer_img_two,
       ]);

       return Redirect::back();
    }
}
