<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HostPackageResource extends JsonResource
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
            'price' => $this->price,
            'priority' => $this->priority,
            'description' => $this->description,
            'icon_class' => $this->icon_class,
            'opportunityOne' => $this->opportunityOne,
            'opportunityTwo' => $this->opportunityTwo,
            'opportunityThree' => $this->opportunityThree,
            'opportunityFour' => $this->opportunityFour,
            'opportunityFive' => $this->opportunityFive,
            'opportunitySix' => $this->opportunitySix,
            'opportunitySeven' => $this->opportunitySeven,
            'opportunityEight' => $this->opportunityEight,
            'opportunityNine' => $this->opportunityNine,
            'opportunityTen' => $this->opportunityTen,
            'opportunityEleven' => $this->opportunityEleven,
            'opportunityTwelve' => $this->opportunityTwelve,
             'category' => $this->hostCategory->name ?? 'None',
            'plan' => $this->plan->name ?? 'None',
            'duration' => $this->duration->name ?? 'None',
            'user' => $this->user->name ?? 'None'
        ];
    }
}
