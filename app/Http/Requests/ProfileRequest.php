<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'firstname'=>'required',
            'secondname'=>'required',
            'specialization'=>'required',
            'job_title'=>'required',
            'brief'=>'required',
            'type'=>'required |array',
            'type.*'=>'required|min:1|string',
            'skills'=>'required',
        ];
    }
    public function messages()
    {
        return [

            'firstname'=>'this field required',
            'secondname'=>'this field required',
            'specialization'=>'this field required',
            'job_title'=>'this field required',
            'brief'=>'this field required',
            'type'=>'this field required',
            'type.*'=>'this field required',
            'skills'=>'this field required',
        ];
    }
}
