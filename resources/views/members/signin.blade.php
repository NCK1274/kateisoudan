@extends('layouts.app')
 
@section('content')

 <form action=""method="POST">
    ユーザー名<input type="text" name="username" value="">
    パスワード<input type="password" name="password" value="">
                    
    <!-- パスワードの項目欄 --> 
    <input type="submit" name="login" value="ログイン">

    <!-- フォーム画面終了 --> 
</form>
    <!-- 新規登録画面に遷移するリンク -->
    <a href="member.blade.php">新規登録</a>


                   
                    