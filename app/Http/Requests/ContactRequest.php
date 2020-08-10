<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' =>'required|max:10',
            'title' =>'required|max:10',
            'tel' =>'required|max:13',
            'email' =>'required|email',
            'body' =>'required|max:1000'

            //
        ];
    }
    public function attributes() {
        return [
            'name' => 'お名前',
            'title' => '件名',
            'tel' => '電話番号',
            'email' => 'メールアドレス',
            'body' => '内容'
        ];
    }
}
