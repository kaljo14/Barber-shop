<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;

class ReservationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'reser_date' => ['required', 'date', new DateBetween, new TimeBetween],
            'phone_number' => ['required'],
            'barber_id' => ['required'],
            'category_id' => ['required']
        ];
    }
}
