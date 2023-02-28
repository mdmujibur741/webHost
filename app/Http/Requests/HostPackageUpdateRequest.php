<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HostPackageUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
      
            return [
                'title' => 'required',
                'price' => 'required|integer',
                'priority' => 'required|integer',
                'icon_class' => 'required',
                 'hostCategory_id' => 'required',
                 'plan_id' => 'required',
                'duration_id'  => 'required',
                'opportunityOne' => 'required',
                'opportunityTwo' => 'nullable',
                'opportunityThree' => 'nullable',
                'opportunityFour' => 'nullable',
                'opportunityFive' => 'nullable',
                'opportunitySix' => 'nullable',
                'opportunitySeven' => 'nullable',
                'opportunityEight' => 'nullable',
                'opportunityNine' => 'nullable', 
                'opportunityTen' => 'nullable', 
                'opportunityEleven' => 'nullable',
                'opportunityTwelve' => 'nullable', 
            ];
       
    }
}
