<?php

namespace App\Http\Resources;

use App\Models\HostCategory;
use Illuminate\Http\Resources\Json\JsonResource;

class HostCategoryResource extends JsonResource
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
            'id' => $this->id, 	
            'name' => $this->name,
            'slug' => $this->slug,
            'image' => $this->image,
            'description' => $this->description,
            'home_show' => $this->home_show,
            'priority' => $this->priority,
            'user' => $this->user->name,
            'description' => asset('')
           
          
      ];
    }
}
