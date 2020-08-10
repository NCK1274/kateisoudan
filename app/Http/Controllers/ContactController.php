<?php

namespace App\Http\Controllers;

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
        // $titles = Contact::$titles;
        // $tels = Contact::$tels;
        // $emails = Contact::$emails;        
        
        return view('contacts.index');      
       
    //
    }
    public function confirm(ContactRequest $request)
    {
        $contact = new Contact($request->all());
 
    return view('contacts.confirm',compact('contact'));
    }


    // 保存
    public function complete(ContactRequest $request)
    {
    $input = $request->except('action');
     
    if ($request->action === '戻る') {
        return redirect()->action('ContactController@index')->withInput($input);
    }
 
    // データを保存
    Contact::create($request->all());
 
    // 二重送信防止
    $request->session()->regenerateToken();
         
    return view('contacts.complete');
    }
}


    // $name = $request->name;
    // $title = $request->title;
    // $tel = $request->tel;
    // $body = $request->body;
    // $to = $request->email;
    // // $bcc = 'bcc@mail.com';
        
    // Mail::to($request->email)
    //     // ->bcc('test@bcc.com')
    //     ->send(new \App\Mail\Contact($name, $body, $tel, $title));

    // return view('contacts.complete');
    
        // // 送信メール
        // \Mail::send(new \App\Mail\Contact([
        //     'to' => $request->email,
        //     'to_name' => $request->name,
        //     'from' => 'from@kateisoudan.com',
        //     'from_name' => 'MySite',
        //     'subject' => '登録ありがとうございました。',
        //     'type' => $request->type,
        //     'gender' => $request->gender,
        //     'body' => $request->body
        // ]));
     
        // // 受信メール
        // \Mail::send(new \App\Mail\Contact([
        //     'to' => 'from@kateisoudan.com',
        //     'to_name' => 'MySite',
        //     'from' => $request->email,
        //     'from_name' => $request->name,
        //     'subject' => 'サイトからのお問い合わせ',
        //     'type' => $request->type,
        //     'gender' => $request->gender,
        //     'body' => $request->body
        // ], 'from'));

        
