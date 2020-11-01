<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateRideRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('ride_edit');
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
