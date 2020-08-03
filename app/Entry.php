<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	protected $fillable = [                                         //ホワイトリスト方式　fill + able = 代入可能
    	'name','tel','email','image','hp','body'                                //フィールドの値を指定して、fill()でその値が代入される
    ];
    static $ereas = [                                             //staticはクラスのメンバ（プロパティ・メソッド）静的変数 → インスタンス化の必要なしにアクセスできる、ただしstaticのプロパティは(static $persons)インスタンス化されたクラスからアクセスできない
    	'北海道','東北','関東','中部','近畿','中国','四国','九州'

    ];
    static $ages = [
    	'出産前','0歳〜6歳','7歳〜11歳','8歳〜15歳','16歳〜20歳','21歳〜'

    ];
    static $types = [
    	'カウンセリング','三者面談','引き渡し希望','一時預かり','体験入学','短期入学','長期入学','未定'

    ];
}