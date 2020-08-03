<?php

namespace App\Http\Controllers;// 名前空間

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Contact::$persons;
        $genders = Contact::$genders;
        $ages = Contact::$ages;
        $types = Contact::$types;        
        
        return view('contacts.index',compact('persons','genders','ages','types'));
    //
    }
    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());                        //contact(モデル)のインスタンス化するApp\Http\Requestsの中身を全て取得する

        $type = '';
        if (isset($request->type)) {                                   //isset関数は値が入ってるかチェックする
            $type = implode(',',$request->type);                       //implodeは指定した文字　,　を間に入れる事ができる
        }

        return view('contacts.confirm',compact('contact','type'));
    }

    // 保存
    public function complete(Request $request)
    {
    $input = $request->except('action');
     
    if ($request->action === '戻る') {
        return redirect()->action('ContactsController@index')->withInput($input);
    }

    // チェックボックス(配列)をカンマ区切りの文字列にする
    if (isset($request->type)) {
        $request->merge(['type' => implpde(',', $request->type)]);
    }
 
    // データを保存
    Contact::create($request->all());
 
    // 二重送信防止
    $request->session()->regenerateToken();
         
    return view('contacts.complete');

    // 送信メール
    \Mail::send(new \App\Mail\Contact([
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
    \Mail::send(new \App\Mail\Contact([
        'to' => 'from@kateisoudan.com',
        'to_name' => 'MySite',
        'from' => $request->email,
        'from_name' => $request->name,
        'subject' => 'サイトからのお問い合わせ',
        'type' => $request->type,
        'gender' => $request->gender,
        'body' => $request->body
    ], 'from'));


    // $name = $request->name;
    // $body = $request->body;
    // $to = $request->email;
    // // $bcc = 'bcc@mail.com';
        
    // Mail::to($request->email)
    //     ->bcc('test@bcc.com')
    //     ->send(new \App\Mail\Contact($name, $body));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
