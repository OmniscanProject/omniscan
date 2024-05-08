<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Helpers\Helper;

class Url implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $status = Helper::ping($value);
        if ($status == "unavailable") {
            $fail('validation.website.unavailable')->translate(['attribute' => $value]);
        } else if($status == "unknown") {
            $fail('validation.website.unknown')->translate(['attribute' => $value]);
        }
    }
}
