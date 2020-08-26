<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EntryRequest;
use App\Http\Controllers\Controller;

use App\Entry;

class EntriesController extends Controller
{
    public function form()
    {
        $areas = Entry::$areas;
        $ages = Entry::$ages;
        $types = Entry::$types;        
        
        return view('entries.form',compact('areas','ages','types'));
    }

    public function store(EntryRequest $request)
    {
        $entry = new Entry($request->all());                        //entry(モデル)のインスタンス化するApp\Http\Requestsの中身を全て取得する
        

        // $type = '';
        // if (isset($request->type)) {                                   //isset関数は値が入ってるかチェックする
        //     $type = implode(',',$request->type);                       //implodeは指定した文字、配列の場合　,　を間に入れ文章を繋げる事ができる
        // }

        //
        return view('entries.store',compact('entry'));
    }
    public function complete(EntryRequest $request)
    {
        // var_dump($_POST);
        // exit;

        $input = $request->except('action');
     
        if ($request->action === '戻る') {
            return redirect()->action('EntriesController@form')->withInput($input);
        }
         
         
            // データを保存
        Entry::create($request->all());
         
        //     // 二重送信防止
        // $request->session()->regenerateToken();
                 
        return view('entries.complete');
    }
}
