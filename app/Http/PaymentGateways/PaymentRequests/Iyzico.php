<?php

namespace App\Http\PaymentGateways\PaymentRequests;

use Illuminate\Foundation\Http\FormRequest;

class Iyzico extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        // return [
        //     'card_number' => ['required','numeric'],
        //     'expiration_month' => ['required'],
        //     'expiration_year' => ['required'],
        //     'card_cvc' => ['required','min:3','max:3'],
        //     'card_holder_name' => ['required','string'],
        // ];
        return [];
    }
}
