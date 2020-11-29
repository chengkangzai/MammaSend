<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdatePaymentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('payment_edit');
    }

    public function rules()
    {
        return [
            'rider_received'  => [
                'required',
            ],
            'office_received' => [
                'required',
            ],
            'user_id'         => [
                'required',
                'integer',
            ],
        ];
    }
}
