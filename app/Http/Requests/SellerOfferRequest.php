<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerOfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'offer'=>'required' ,
            'discount'=>'required' ,
            'start_date'=>'required',
            'end_date'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'offer.required'=>'Offer Name is Required!' ,
            'discount.required'=>'Discount is required!' ,
            'start_date.required'=>'Starting Date is required!',
            'end_date.required'=>'End Date is Required!',


        ];
    }
}
