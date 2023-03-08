<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingStoreRequest extends FormRequest
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
            'logo' => 'nullable',
            'favicon' => 'required',
             'mobile' => 'required',
            'address' => 'required|min:5',
             'email' => 'nullable|email',
             'twitter' => 'nullable|url',
             	'facebook' => 'nullable|url',
                'instagram' => 'nullable|url',
                	'footer_img_one' => 'nullable',
                    	'footer_img_two' => 'nullable',
                    	'footer_img_three' => 'nullable',
                    	'footer_img_four' => 'nullable',
                        	'footer_img_three' => 'nullable',	
                            'powered' => 'nullable',
                            'about' => 'nullable',
                            'usefulLink' => 'nullable',
        ];
    }
}
