<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ReservationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [

            'start_date'=>'required|date',
            'end_date'=>'required|date|after:start_date',
            'real_estate_id'=>'required|exists:real_estate,id',



        ];
    }








    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'status' => 405,
                    'message' => $validator->errors()->first(),
                    'data' => null
                ],
                405
            )
        );
    }

    protected function failedAuthorization()
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'status' => 401,
                    'message' => "Error: you are not authorized or do not have the permission",
                    'data' => null
                ],
                401
            )
        );
    }


    public function messages()
    {
        return [
            "phone.required" => "رقم الجوال مطلوب",
            "phone.max" => "يجب أن يكون رقم الجوال 12 رقم",
            "phone.min" => "يجب أن يكون رقم الجوال 12 رقم",

        ];
    }















}
