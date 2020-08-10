<?php

namespace App\Http\Controllers;// 名前空間

use App\Http\Requests\MemberRequest;
use App\Http\Controllers\Controller;
use App\Member;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function member()
    {

        $persons = Member::$persons;
        $genders = Member::$genders;
        $ages = Member::$ages;
        $types = Member::$types;        
        
        return view('members.member',compact('persons','genders','ages','types'));

    //
    }
    public function confirm(MemberRequest $request)
    {
        $member = new Member($request->all());                        //Member(モデル)のインスタンス化するApp\Http\Requestsの中身を全て取得する

        $type = '';
        if (isset($request->type)) {                                   //isset関数は値が入ってるかチェックする
            $type = implode(',',$request->type);                       //implodeは指定した文字　,　を間に入れる事ができる
        }

        return view('members.confirm',compact('member','type'));
    }

    // 保存
    public function complete(MemberRequest $request)
    {
        $input = $request->except('action');
             
            if ($request->action === '戻る') {
                return redirect()->action('MembersController@member')->withInput($input);
            }

        // チェックボックス(配列)をカンマ区切りの文字列にする
            if (isset($request->type)) {
                $request->merge(['type' => implpde(',', $request->type)]);
            }
        // ::query('insert table values')

     
        // データを保存
        Member::create($request->all());
    
        // 二重送信防止
        $request->session()->regenerateToken();

        // 送信メール
        \Mail::send(new \App\Mail\Member([
            'to' => $request->email,
            'to_name' => $request->name,
            'from' => 'from@kateisoudan.com',
            'from_name' => 'MySite',
            'subject' => '登録ありがとうございました。',
            'type' => $request->type,
            'gender' => $request->gender,
            'body' => $request->body
        ]));
     
        // 受信メール
        \Mail::send(new \App\Mail\Member([
            'to' => 'from@kateisoudan.com',
            'to_name' => 'MySite',
            'from' => $request->email,
            'from_name' => $request->name,
            'subject' => 'サイトからのお問い合わせ',
            'type' => $request->type,
            'gender' => $request->gender,
            'body' => $request->body
        ], 'from'));

        return view('members.complete',compact('contact'));
    }
}

    // $name = $request->name;
    // $body = $request->body;
    // $to = $request->email;
    // // $bcc = 'bcc@mail.com';
        
    // Mail::to($request->email)
    //     ->bcc('test@bcc.com')
    //     ->send(new \App\Mail\Contact($name, $body));