<?php

namespace App\Rules;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;

class RecaptchaValidationRule implements Rule
{
    public function passes($attribute, $value)
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $value,
        ]);

        return $response['success'];
    }

    public function message()
    {
        return 'The :attribute must be verified with reCAPTCHA.';
    }
}
