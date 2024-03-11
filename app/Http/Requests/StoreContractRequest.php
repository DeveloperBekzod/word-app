<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContractRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'person'                 => "required|string|max:255",
            'passport'               => 'required|max:10|min:9',
            'passport_date'          => 'required|date',
            'givenBy'                => 'required|string|max:255',
            'address'                => 'required|string',
            'phone'                  => 'required',
            'product'                => 'required|string|max:255',
            'amount'                 => 'required|numeric',
            'total'                  => 'required|numeric',
            'description'            => 'required|string',
            'buyer'                  => 'required|string|max:255',
            'buyer_passport'         => 'required|max:10|min:9',
            'buyer_passport_givenBy' => 'required|string|max:255',
            'buyer_passport_date'    => 'required|date',
            'buyer_address'          => 'required|string',
            'buyer_description'      => 'required|string',
        ];
    }
}
