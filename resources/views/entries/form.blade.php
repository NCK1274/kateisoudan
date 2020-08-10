@extends('layouts.app')

@section('content')

    <h1 style="margin-bottom:30px;"></h1>

    <!-- form -->

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">事業者エントリー</div>
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
 
                    {!! Form::open(['url' => 'entry/store',
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
 <!-- エリアの項目欄 -->
                    <div class="form-group{{ $errors->has('erea') ? ' has-error' : '' }}">
                        {!! Form::label('erea', '対象者:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($ereas as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::radio('erea', $value) !!}
                                    {{ $value }}
                                </label>
                            @endforeach
                            @if ($errors->has('erea'))
                                <span class="help-block">
                            <strong>{{ $errors->first('erea') }}</strong>
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

 <!-- 相談受付内容の項目欄 -->
                    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        {!! Form::label('type', '具体的相談内容:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            @foreach($types as $key => $value)
                                <label class="checkbox-inline">
                                    {!! Form::radio('type', $value) !!}
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
<!-- 画像添付--> 
                    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        {!! Form::label('image', '画像:', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::file('image', null, ['class' => 'form-control']) !!}
 
                            @if ($errors->has('image'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
<!-- HP添付 --> 
                   <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                        {!! Form::label('hp', 'ホームページ :', ['class' => 'col-sm-2 control-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::url('hp', null, ['class' => 'form-control']) !!}
 
                            @if ($errors->has('hp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('hp') }}</strong>
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
    