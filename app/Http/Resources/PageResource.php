<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
              'id' => $this->id,
              'title' => $this->title,
              'slug' => $this->slug,
              'priority' => $this->priority,
              'meta_tag' => $this->meta_tag,
              'meta_description' => $this->meta_description,
              'content' => $this->content,
              'status' => $this->status,
        ];
    }
}
