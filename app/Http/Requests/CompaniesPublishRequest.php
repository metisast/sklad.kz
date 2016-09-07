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
        return [
            'short_name' => 'required|max:60',
            'opf_id' => 'required',
            'name' => 'required|max:255'
        ];
    }
}
