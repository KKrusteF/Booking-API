<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
{
    public function rules()
    {
        return [
            'amount' => ['required', 'numeric'],
            'payment_date' => ['required'],
            'status' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
