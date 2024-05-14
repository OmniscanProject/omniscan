<?php

namespace App\Http\Requests;

use App\Rules\Url;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class AnalyzeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'url' => ['required', 'string', 'url', new Url]
        ];
    }

    public function failedValidation(Validator $validator)
    {
        if ($this->expectsJson()) {
            $error = $validator->errors()->first('url');
            throw new HttpResponseException(
                response()->json([
                    "success" => false,
                    "errors" => true,
                    "message" => $error
                ], 422)
            );
        }

        parent::failedValidation($validator);
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'url.required' => 'A url is required',
            'url.url' => 'A valid url is required',
        ];
    }
}
