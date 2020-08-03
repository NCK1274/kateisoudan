<?php

namespace App;

use Illuminate\Database\Eloquent\Model;                             //データベース、エロクアントを使用　→ モデルとの紐付け（オブジェクトとして操作）

class Contact extends Model
{
    //
    protected $fillable = [                                         //ホワイトリスト方式　fill + able = 代入可能
    	'name','tel','email','body'                                 //フィールドの値を指定して、fill()でその値が代入される
    ];
    static $persons = [                                             //staticはクラスのメンバ（プロパティ・メソッド）静的変数 → インスタンス化の必要なしにアクセスできる、ただしstaticのプロパティは(static $persons)インスタンス化されたクラスからアクセスできない
    	'本人','本人以外'

    ];
    static $genders = [
    	'男','女'

    ];
    static $ages = [
    	'出産前','0歳〜6歳','7歳〜11歳','8歳〜15歳','16歳〜20歳','21歳〜'

    ];
    static $types = [
    	'カウンセリング','三者面談','引き渡し希望','一時預かり','体験入学','短期入学','長期入学','未定'
    ];
}
