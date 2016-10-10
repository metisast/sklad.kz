<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdPublishRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'company_id' => 'sometimes|required',
            /*'title' => 'required|max:255',
            'industry_id' => 'required',
            'ad_relation' => 'required',
            'description' => 'required|max:2000',
            'user_name' => 'required|max:255',
            'price' => 'required|max:255',
            'region_id' => 'required',
            'city_id' => 'required',
            'email' => 'required|email',
            'phone' => [
                'required',
                'regex:/^( +)?((\+?7|8) ?)?((\(\d{3}\))|(\d{3}))?( )?(\d{3}[\- ]?\d{2}[\- ]?\d{2})( +)?$/'
            ],
            'licence' => 'present'*/
        ];

        return $rules;
    }
}
