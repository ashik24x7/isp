<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerRequest extends Request
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
        'ip' => 'max:20',
        'username' => 'required',
        'contact_no' => 'required|min:11|numeric',
        'additional_contact_no' => 'min:11|numeric',
        'email' => 'email|required|unique:customer_details',
        'house' => 'required',
        'road' => 'required',
        'block' => 'required',
        //'address' => '',
        'floor' => 'required',
        'bill' => 'required',
        'connection_up' => 'required',
        'connection_establishment_info' => 'required',
        'connected_from' => 'required',
        //'note' => '',
        //'customer_photo' => '',
        //'id_or_passport' => ''
        ];
    }

}
