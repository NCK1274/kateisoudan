@extends('layouts.app')
 
@section('content')
 
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">新規登録画面</div>
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
 <!-- 対象者の項目欄 -->
                    <div class="form-group{{ $errors->has('person') ? ' has-error' : '' }}">
                        {!! Form::label('person', '対象者:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($persons as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::radio('person', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('person'))
                                <span class="help-block">
                            <strong>{{ $errors->first('person') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
 <!-- 性別の項目欄 -->
                    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                        {!! Form::label('gender', '性別:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($genders as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::radio('gender', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('gender'))
                                <span class="help-block">
                            <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
<!-- 年齢の項目欄 -->
                    <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                        {!! Form::label('age', '年齢:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($ages as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::radio('age', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('age'))
                                <span class="help-block">
                            <strong>{{ $errors->first('age') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
<!-- お問い合わせの種類一覧欄 --> 
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        {!! Form::label('type', 'お問い合わせ種類:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($types as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::checkbox('type[]', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('type'))
                                <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>                    

 <!-- 相談内容の項目欄 --> 
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