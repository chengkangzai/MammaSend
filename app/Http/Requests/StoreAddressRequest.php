<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreAddressRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('address_create');
    }

    public function rules()
    {
        return [
            'street'   => [
                'string',
                'required',
            ],
            'city'     => [
                'string',
                'required',
            ],
            'state'    => [
                'required',
            ],
            'zip_code' => [
                'string',
                'required',
            ],
        ];
    }
}
