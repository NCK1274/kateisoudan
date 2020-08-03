<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'tel' => 'required|max:13',
            'email' => 'required|email',
            'person' => 'required|in:本人、本人以外',
            'gender' => 'required|in:男、女',
            'age' => 'required|in:出産前,0歳〜6歳,7歳〜11歳,8歳〜15歳,16歳〜20歳,21歳〜',
            'type' => 'required',                   //=>ダブルアロー演算子は値を代入する
            'type.*' => 'required|in:カウンセリング,三者面談,引き渡し希望,一時預かり,体験入学,短期入学,長期入学,未定,',
            'body' => 'required|max:1000'
        ];
    }
    public function attributes() {
        return [
            'name' => 'お名前',
            'tel' => '電話番号',
            'email' => 'メールアドレス',
            'person' => '対象者',
            'gender' => '性別',
            'age' => '年齢',
            'type' => '相談内容',
            'body' => '具体的詳細'
        ];
    }

}
