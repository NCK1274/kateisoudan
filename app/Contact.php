<?php

namespace App;

use Illuminate\Database\Eloquent\Model;                             //データベース、エロクアントを使用　→ モデルとの紐付け（オブジェクトとして操作）

class Contact extends Model
{
    //
    protected $fillable = [                                         //ホワイトリスト方式　fill + able = 代入可能
    	'name','title','tel','email','body'                                 //フィールドの値を指定して、fill()でその値が代入される
    ];
}
