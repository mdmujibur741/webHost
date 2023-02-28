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
            'logo' => $this->asset('/storage/'. $this->logo) ,
            'favicon' =>$this->asset('/storage/'. $this->favicon),
             'mobile' =>$this->mobile ,
              'address' =>$this->address , 
              'email' =>$this->email ,
              'facebook' =>$this->facebook ,
               'twitter' =>$this->twitter, 
               'instagram' =>$this->instagram ,
            'footer_img_one' =>$this->asset('/storage/'. $this->footer_img_one) ,
             'footer_img_two' =>$this->asset('/storage/'. $this->footer_img_two),
              'powered' =>$this->powered, 
              'about' =>$this->about,
              'use_link' =>$this->use_link 
        ];
    }
}
