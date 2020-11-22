<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreVehiclesRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('address_create');
    }

    public function rules()
    {
        return [
            'car_plate'   => [
                'string',
                'required',
            ],
            'manufacturer'     => [
                'string',
                'required',
            ],
            'model'     => [
                'string',
                'required',
            ],
            'variant'     => [
                'string',
                'required',
            ],
            'color'     => [
                'string',
                'required',
            ],
            'body_type'     => [
                'required',
            ],
        ];
    }
}
