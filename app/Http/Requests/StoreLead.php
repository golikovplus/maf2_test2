<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLead extends FormRequest
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
            'lead_type' => 'required|max:255',
            'preferences' => 'required|max:255',
            'price_range' => 'required|max:255',
            'home_type' => 'required|max:255',
            'time_frame' => 'required|max:255',
            'agent_hero' => 'required|boolean',
            'fullname' => 'required|max:20',
            'email' => 'required|email|unique:lead|max:255',
            'phone' => 'required|max:15'
        ];
    }
}
