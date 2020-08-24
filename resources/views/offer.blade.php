@extends('layouts.app')
 
@section('content')
 
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">お問い合わせ</div>
                <div class="panel-body">
                    {{-- エラーの表示 --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
 
                    {!! Form::open(['url' => 'contact/confirm',
                                'class' => 'form-horizontal']) !!}
 
                    <!-- お名前の記入欄 --> 
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'お名前:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
 
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- お名前の記入欄 --> 
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        {!! Form::label('title', '件名:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
 
                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- 電話番号の記入欄 --> 
                    <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                        {!! Form::label('tel', '電話番号:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('tel', null, ['class' => 'form-control']) !!}
 
                            @if ($errors->has('tel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tel') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>                  
                    <!-- メールアドレスの項目欄 --> 
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'メールアドレス:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- 内容の項目欄 --> 
                    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                        {!! Form::label('body', '内容:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- 日付 カレンダーを表示-->
                    <div class="container">
                        <div class="row mt-4 offset-2">
                            <div class="col-1">
                                <label>日付：</label>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" id="date_sample">
                            </div>
                        </div>
                    </div>
                     
                    <!-- bootstrap-datepickerのjavascriptコード -->
                    <script>
                        $('#date_sample').datepicker({
                            language:'ja'
                        });
                    </script>

                    <!-- 確認ボタン --> 
                    <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            {!! Form::submit('確認', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>

                    <!-- フォーム画面終了 --> 
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection