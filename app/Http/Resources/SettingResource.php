<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'logo' => $this->logo ,
            'favicon' =>$this->favicon,
             'mobile' =>$this->mobile ,
              'address' =>$this->address , 
              'email' =>$this->email ,
              'facebook' =>$this->facebook ,
               'twitter' =>$this->twitter, 
               'instagram' =>$this->instagram ,
            'footer_img_one' =>$this->footer_img_one ,
             'footer_img_two' =>$this->footer_img_two,
             'footer_img_three' =>$this->footer_img_three,
             'footer_img_four' =>$this->footer_img_four,
              'powered' =>$this->powered, 
              'about' =>$this->about,
              'use_link' =>$this->use_link 
        ];
    }
}
