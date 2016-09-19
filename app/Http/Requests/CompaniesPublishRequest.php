<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompaniesPublishRequest extends Request
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
        $rules = [
            'name' => 'required|max:255',
            'opf_id' => 'required|max:255',
            'features' => 'required',
            'regions' => 'required',
            'cities' => 'required',
            'phone' => [
                'required',
                'regex:/^( +)?((\+?7|8) ?)?((\(\d{3}\))|(\d{3}))?( )?(\d{3}[\- ]?\d{2}[\- ]?\d{2})( +)?$/'
            ],
            'email' => 'required|email',
            'web-site' => 'max:255',
            'address' => 'required|max:255',
            'description' => 'required|max:255',
            'licence' => 'present'
        ];

        return $rules;
    }
}
