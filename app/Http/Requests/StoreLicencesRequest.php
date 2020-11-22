<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreLicencesRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('address_create');
    }

    public function rules()
    {
        return [
            'class'   => [
                'string',
                'required',
            ],
            'start_date'     => [
                'date',
                'required',
            ],
            'end_date'     => [
                'date',
                'required',
            ],
            'IC_number' => [
                'string',
                'required',
                'regex:/(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})/'
            ],
        ];
    }
}
