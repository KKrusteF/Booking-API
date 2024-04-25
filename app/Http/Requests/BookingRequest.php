<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'check_in_date' => ['required', 'date'],
            'check_out_date' => ['required', 'date'],
            'total_price' => ['required', 'numeric'],
            'room_id' => ['required', 'exists:rooms'],
            'customer_id' => ['required', 'exists:customers'],
        ];
    }

    public function authorize(): true
    {
        return true;
    }
}
