@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">事業者エントリーフォーム</div>
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ登録ボタンをクリックしてください。</p>

                    <!-- table -->
                    <table class="table table-striped">
                        <tr><td>代表者氏名</td><td>{{$entry["name"]}}</tr>
                        <tr><td>電話番号</td><td>
                        {{$entry["tel"]}}</tr>
                        <tr><td>E-Mail</td><td>{{$entry["email"]}}</tr>
                        <tr><td>エリア</td><td>
                        {{$entry["area"]}}</tr>
                        <tr><td>対象年齢</td><td>
                        {{$entry["age"]}}</tr>
                        <tr><td>相談受付内容</td><td>{{$entry["type"]}}</tr>
                        <tr><td>一言</td><td>
                        {{$entry["body"]}}</tr>
                        <tr><td>画像ファイル</td><td>{{$entry["image"]}}</tr>
                        <tr><td>HPリンク</td><td>
                        {{$entry["hp"]}}</tr>
                    </table>

                    {!! Form::open(['url' => 'entry/complete',
                                                    'class' => 'form-horizontal',
                                                    'id' => 'post-input']) !!}
                 
                @foreach($entry->getAttributes() as $key => $value)               <!-- getAttributes属性値の取得 -->
                        @if(isset($value))
                            @if(is_array($value))
                                @foreach($value as $subValue)
                                    <input name="{{ $key }}[]" type="hidden" value="{{ $subValue }}">
                                @endforeach
                            @else
                        {!! Form::hidden($key, $value) !!}
                            @endif
                 
                        @endif
                    @endforeach
                 
                {!! Form::submit('戻る', ['name' => 'action', 'class' => 'btn']) !!}
                {!! Form::submit('登録', ['name' => 'action', 'class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection