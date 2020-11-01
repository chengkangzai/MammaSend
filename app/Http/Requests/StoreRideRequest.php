<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreRideRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ride_create');
    }

    public function rules()
    {
        return [
            'rider_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
