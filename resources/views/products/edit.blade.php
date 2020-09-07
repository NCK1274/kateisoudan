@extends('layouts.app')

@section('content')
<div class="container">
    <h1>企業情報更新</h1>

    <form method="POST" action="/products/{{ $product->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="product-tel">連作先</label>
            <input type="text" name="tel" id="product-tel" class="form-control" value="{{ $product->tel }}">
        </div>
        <div class="form-group">
            <label for="product-age">対象年齢設定</label>
            <textarea name="age" id="product-age" class="form-control">{{ $product->age }}</textarea>
        </div>
        <div class="form-group">
            <label for="product-type">相談内容</label>
            <input type="number" name="type" id="product-type" class="form-control" value="{{ $product->type }}">
        </div>
        <div class="form-group">
            <label for="product-body">コメント</label>
            <select name="body_id" class="form-control" id="product-body">
                @foreach ($categories as $entry)
                @if ($entry->id == $product->entry_id)
                <option value="{{ $entry->id }}" selected>{{ $entry->name }}</option>
                @else
                <option value="{{ $entry->id }}">{{ $entry->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-danger">更新</button>
    </form>

    <a href="/products">商品一覧に戻る</a>
</div>
@endsection