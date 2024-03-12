<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentScheduleRequest extends FormRequest
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
            'paymentDate1' => 'required|date',
            'paymentAmount1' => 'required|numeric',
            'paymentDate2' => 'required|date',
            'paymentAmount2' => 'required|numeric',
            'paymentDate3' => 'required|date',
            'paymentAmount3' => 'required|numeric',
            'paymentDate4' => 'required|date',
            'paymentAmount4' => 'required|numeric',
            'paymentDate5' => 'required|date',
            'paymentAmount5' => 'required|numeric',
            'paymentDate6' => 'required|date',
            'paymentAmount6' => 'required|numeric',
            'paymentDate7' => 'required|date',
            'paymentAmount7' => 'required|numeric',
            'paymentDate8' => 'required|date',
            'paymentAmount8' => 'required|numeric',
            'paymentDate9' => 'required|date',
            'paymentAmount9' => 'required|numeric',
            'paymentDate10' => 'required|date',
            'paymentAmount10' => 'required|numeric',
            'paymentDate11' => 'required|date',
            'paymentAmount11' => 'required|numeric',
            'paymentDate12' => 'required|date',
            'paymentAmount12' => 'required|numeric',
        ];
    }
}
