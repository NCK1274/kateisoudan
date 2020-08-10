<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryRequest;
use App\Http\Controllers\Controller;

use App\Entry;

class EntriesController extends Controller
{
    public function form()
    {
        $ereas = Entry::$ereas;
        $ages = Entry::$ages;
        $types = Entry::$types;        
        
        return view('entries.form',compact('ereas','ages','types'));
    }

    public function store(EntryRequest $request)
    {
        $entry = new Entry($request->all());                        //entry(モデル)のインスタンス化するApp\Http\Requestsの中身を全て取得する

        $type = '';
        if (isset($request->type)) {                                   //isset関数は値が入ってるかチェックする
            $type = implode(',',$request->type);                       //implodeは指定した文字　,　を間に入れる事ができる
        }

        //fileは個別に処理
        $file = \Input::file('image');
        if(!empty($file))
        {
            $filename = $file->getClientOriginalName();
            $move = $file->move('./',$filename); //public
        }
        else
        {
            //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
            $inputs["image"] = "none";
            // $inputs["hp"] = "none";
        }


        //
        return view('entries.store',compact('entry','type'));
    }
    public function complete(EntryRequest $request)
    {

        $input = $request->except('action');
     
        if ($request->action === '戻る') {
            return redirect()->action('EntriesController@index')->withInput($input);
        }
         
            // チェックボックス（配列）を「,」区切りの文字列に
        if (isset($request->type)) {
            $request->merge(['type' => implode(', ', $request->type)]);
        }
         
            // データを保存
        Entry::create($request->all());
         
            // 二重送信防止
        $request->session()->regenerateToken();
                 
        return view('contacts.complete');
    }
}
