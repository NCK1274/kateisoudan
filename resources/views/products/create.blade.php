@extends('layouts.app')

@section('content')
<div class="container pb-5">
    <h1>新しく追加</h1>

    <form method="POST" action="/products">
        {{ csrf_field() }}

        <!-- 企業名記入欄 -->
        <div class="form-group">
            <label for="product-name">企業名</label>
            <input type="text" name="name" id="product-name" class="form-control">
        </div>

        <!-- 電話番号記入欄 -->
        <div class="form-group">
            <label for="product-tel">電話番号</label>
            <input type="text" name="tel" id="product-tel" class="form-control">
        </div>

        <!-- メールアドレス記入欄 -->
        <div class="form-group">
            <label for="product-email">メールアドレス</label>
            <input type="email" name="email" id="product-email" class="form-control">
        </div>

        <!-- 地域項目欄 -->
        <div class="form-group">
            <label for="product-area">エリア</label>
            @foreach($areas as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('area', $value) !!}
                    {{ $value }}
                </label>
            @endforeach
        </div>

        <!-- 対処年齢の項目欄 -->
        <div class="form-group">
            <label for="product-age">対象年齢</label>
            @foreach($ages as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('age', $value) !!}                            
                    {{$value }}
                </label>
            @endforeach
                        
        </div>

        <!-- 相談内容の項目欄 -->
        <div class="form-group">
            <label for="product-body">相談内容</label>
            @foreach($types as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('type', $value) !!}
                    {{ $value }}
                </label>
            @endforeach
        </div>

        <!-- 一言コメント項目 -->
        <div class="form-group">
            <label for="product-text">コメント</label>
            <textarea name="text" id="product-text" class="form-control"></textarea>
        </div>

        <!-- HPの添付 -->
        <div class="form-group">
            <label for="product-hp">HP</label>
            <input type="url" name="url" id="product-url" class="form-control">   
        </div>

        <!-- 画像添付 -->
        <div class="form-group">
            <label for="product-image">画像</label>
            <form action="cgi-bin/abc.cgi" method="post" enctype="multipart/form-data">
                <p>
                <input type="file" name="datafile">
                </p>
            </form>
        </div>
        <div class="form-group">
            <label for="product-image">画像</label>
            <form action="cgi-bin/abc.cgi" method="post" enctype="multipart/form-data">
                <p>
                <input type="file" name="datafile">
                </p>
            </form>
        </div>
        <div class="form-group">
            <label for="product-image">画像</label>
            <form action="cgi-bin/abc.cgi" method="post" enctype="multipart/form-data">
                <p>
                <input type="file" name="datafile">
                </p>
            </form>
        </div>
        <div class="form-group">
            <label for="product-image">画像</label>
            <form action="cgi-bin/abc.cgi" method="post" enctype="multipart/form-data">
                <p>
                <input type="file" name="datafile">
                </p>
            </form>
        </div>
        <button type="submit" class="btn btn-success">事業所を登録</button>
    </form>

    <a href="/products">事業所一覧に戻る</a>
</div>
@endsection