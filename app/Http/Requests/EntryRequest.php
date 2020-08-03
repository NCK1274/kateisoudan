<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
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
            'name' => 'required|max:10',
            'tel' => 'required|max:13',
            'email' => 'required|email',
            'erea' => 'required|in:北海道,東北,関東,中部,近畿,中国,四国,九州',
            'age' => 'required|in:出産前,0歳〜6歳,7歳〜11歳,8歳〜15歳,16歳〜20歳,21歳〜',           
            'type' => 'required|in:カウンセリング,三者面談,引き渡し希望,一時預かり,体験入学,短期入学,長期入学,未定,',
            'image' => 'required', 
            'hp' => 'required',                  //=>ダブルアロー演算子は値を代入する
            'body' => 'required|max:1000'
            //
        ];
    }
     public function attributes() {
        return [
            'name' => '代表者氏名',
            'tel' => 'r電話番号',
            'email' => 'メールアドレス',
            'erea' => 'エリア'
            'age' => '対象年齢'
            'type' => '相談受付内容'
            'image' => '画像', 
            'hp' => 'HPリンク',                  //=>ダブルアロー演算子は値を代入する
            'body' => '一言'
        ];
    }
}
