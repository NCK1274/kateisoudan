@extends('layout')

@section('content')

    <h1>エントリー内容表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/form" class="btn btn-primary" style="margin:20px;">フォームに戻る</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">
        <tr><td>代表者氏名</td><td>{{$inputs["name"]}}</tr>
        <tr><td>電話番号</td><td>{{$inputs["tel"]}}</tr>
        <tr><td>E-Mail</td><td>{{$inputs["email"]}}</tr>
        <tr><td>エリア</td><td>{{$inputs["area"]}}</tr>
        <tr><td>対象年齢</td><td>{{$inputs["age"]}}</tr>
        <tr><td>相談受付内容</td><td>{{$inputs["type"]}}</tr>
        <tr><td>一言</td><td>{{$inputs["body"]}}</tr>
        <tr><td>画像ファイル</td><td>{{$inputs["image"]}}</tr>
        <tr><td>HPリンク</td><td>{{$inputs["hp"]}}</tr>
    </table>

@stop