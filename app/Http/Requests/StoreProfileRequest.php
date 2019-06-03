<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
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
            'first_name' => 'required|min:3',
            'last_name'  => 'required|min:3',
            'secondary_email'  => 'nullable',
            'participent_id'  => 'nullable',
            'group_id'  => 'nullable',
            'site_id'  => 'nullable',
            'role'  => 'nullable',
            'organization_name'  => 'nullable',
            'organization_id'  => 'nullable',
            'rater_type'  => 'nullable',
            'team_role'  => 'nullable',
        ];
    }
}
