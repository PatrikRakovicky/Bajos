<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberUtil;

final class RealPhoneNumber implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_string($value) || $value === '') {
            return;
        }

        $util = PhoneNumberUtil::getInstance();

        try {
            $number = $util->parse($value, null);
        } catch (NumberParseException) {
            $fail('Zadajte platné telefónne číslo.');

            return;
        }

        if (! $util->isValidNumber($number)) {
            $fail('Zadajte platné telefónne číslo.');
        }
    }
}