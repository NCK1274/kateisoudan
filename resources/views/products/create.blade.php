@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新しく追加</h1>

    <form method="POST" action="/products">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="product-name">企業名</label>
            <input type="text" name="name" id="product-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-tel">電話番号</label>
            <input type="text" name="tel" id="product-tel" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-email">メールアドレス</label>
            <input type="text" name="email" id="product-email" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-area">エリア</label>
            <input type="text" name="area" id="product-area" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-age">対象年齢</label>
            <input type="text" name="age" id="product-age" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-body">相談内容</label>
            <input type="number" name="body" id="product-body" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-text">コメント</label>
            <textarea name="text" id="product-text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="product-hp">HP</label>
            <input type="text" name="hp" id="product-hp" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-image">画像</label>
            <input type="text" name="image" id="product-image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">事業所を登録</button>
    </form>

    <a href="/products">事業所一覧に戻る</a>
</div>
@endsection