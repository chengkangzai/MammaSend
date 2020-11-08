<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreChildrenRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name'     => [
                'string',
                'required',
            ],
            'IC_number'     => [
                'string',
                'required',
                'regex:/(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))-([0-9]{2})-([0-9]{4})/'
            ],
            'school_name'     => [
                'string',
                'required',
            ],

        ];
    }
}
