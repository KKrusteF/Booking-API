<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
{
    public function rules()
    {
        return [
            'number' => ['required', 'integer'],
            'type' => ['required'],
            'price_per_night' => ['required', 'integer'],
            'status' => ['boolean'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
