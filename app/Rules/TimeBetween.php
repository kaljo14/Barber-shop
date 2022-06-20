<?php

namespace App\Rules;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $barberDate = Carbon::parse($value);
        $barberTime = Carbon::createFromTime($barberDate->hour, $barberDate->minute, $barberDate->second);
        $firstTime = Carbon::createFromTimeString('10:00:00');
        $secondTime = Carbon::createFromTimeString('19:00:00');
        return $barberTime->between($firstTime, $secondTime) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The Barber shop is working from 10:00 to 19:00.';
    }
}
