@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <h1>ありがとうございました。</h1>
                    <h2>しばらくお待ち下さいいませ。</h2>
                    <div class="form-group">
                        <a href="./" class="col-sm-10 col-sm-offset-2">
                        {!! Form::submit('戻る', ['class' => 'btn btn-primary']) !!}
                        </a>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection