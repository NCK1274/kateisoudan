@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="mt-3 mb-3">コンタクトを取る</h3>

            <hr>
             {!! Form::open(['url' => 'offer/confirm',
                                'class' => 'form-horizontal']) !!}

            
                @csrf

                <!-- お名前記入欄 -->
                <div class="form-group row">
                    <label for="name" class="col-md-5 col-form-label text-md-left">氏名<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror kateisoudan-login-input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="氏名">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- タイトル記入欄 -->
                <div class="form-group row">
                    <label for="title" class="col-md-5 col-form-label text-md-left">件名<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror kateisoudan-login-input" title="title" value="{{ old('title') }}" required autocomplete="title" autofocus placeholder="件名">

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>件名</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- 電話番号 -->
                <div class="form-group row">
                    <label for="tel" class="col-md-5 col-form-label text-md-left">電話番号<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="tel" type="tel" class="form-control @error('tel') is-invalid @enderror kateisoudan-login-input" name="tel" value="{{ old('tel') }}" required autocomplete="tel" placeholder="044-000-0000">

                        @error('tel')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <!-- メールアドレスの記入欄 -->
                <div class="form-group row">
                    <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror kateisoudan-login-input" name="postal_code" required placeholder="kateisoudan@kss">
                    </div>
                </div>

                <!-- 日時選択欄 -->
                <div class="form-group row">
                    <label for="day" class="col-md-5 col-form-label text-md-left">面談希望日<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('day') is-invalid @enderror kateisoudan-login-input" id="date_sample" name="day" required placeholder="クリック">
                    </div>
                </div>

                <!-- 内容 -->
                <div class="form-group row">
                    <label for="body" class="col-md-5 col-form-label text-md-left">内容<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('body') is-invalid @enderror kateisoudan-login-input" name="body" required placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn kateisoudan-submit-button w-100">
                        コンタクトを取る
                    </button>
                </div>
            </form>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection