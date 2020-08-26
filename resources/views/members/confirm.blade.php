@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">新規登録画面</div>
                <div class="panel-body">
                    <p>誤りがないことを確認のうえ登録ボタンをクリックしてください。</p>
 
                    <table class="table">
                        <tr>
                            <th>お名前</th>
                            <td>{{ $member->name }}</td>
                        </tr>
                        <tr>
                            <th>電話番号</th>
                            <td>{{ $member->tel }}</td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td>{{ $member->email }}</td>
                        </tr>
                        <tr>
                            <th>対象者</th>
                            <td>{{ $member->person }}</td>
                        </tr>
                        <tr>
                            <th>性別</th>
                            <td>{{ $member->gender }}</td>
                        </tr>
                        <tr>
                            <th>年齢</th>
                            <td>{{ $member->age }}</td>
                        </tr>
                        <tr>
                            <th>相談内容</th>
                            <td>{{ $types }}</td>
                        </tr>
                        <tr>
                            <th>具体的詳細</th>
                            <td>{{ $member->body }}</td>
                        </tr>

                    </table>
 
                    {!! Form::open(['url' => 'member/complete',
                                    'class' => 'form-horizontal',
                                    'id' => 'post-input']) !!}
 
                    @foreach($member->getAttributes() as $key => $value)
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