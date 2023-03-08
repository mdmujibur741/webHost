<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeatureResource extends JsonResource
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
              'title' => $this->title,
              'priority' => $this->priority,
              'image' => $this->image,
              'slug' => $this->slug,
              'description' => $this->description,
              'user' => $this->user->name,
              'category' => $this->HostCategory->name ?? 'All',
              'home_show' => $this->home_show
        ];
    }
}
