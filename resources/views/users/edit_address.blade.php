@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <span>
                <a href="{{ route('mypage') }}">マイページ</a> > 住所変更
            </span>
            <h3 class="mt-3 mb-3">住所変更</h3>

            <hr>

            <form method="POST" action="/users/mypage">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group row">
                    <label for="name" class="col-md-5 col-form-label text-md-left">氏名<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror kateisoudan-login-input" name="name" value="" required autocomplete="name" autofocus placeholder="氏名">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>氏名を入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left">郵便番号<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror kateisoudan-login-input" name="postal_code" value="{{ $user->postal_code }}" required placeholder="000-0000">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left">住所<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('address') is-invalid @enderror kateisoudan-login-input" name="address" value="{{ $user->address }}" required placeholder="神奈川県横浜市鶴見区1ー1ー1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label text-md-left">電話番号<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror kateisoudan-login-input" name="phone" value="{{ $user->phone }}" required placeholder="xx-xxxx-xxxx">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-5 col-form-label text-md-left">メールアドレス<span class="ml-1 kateisoudan-require-input-label"><span class="kateisoudan-require-input-label-text">必須</span></span></label>

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror kateisoudan-login-input" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="kateisoudan@kateisoudan.com">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>メールアドレスを入力してください</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <hr>

                <div class="form-group d-flex justify-content-end">
                    <button type="submit" class="btn kateisoudan-submit-button w-25">
                        保存する
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    let switchEditUserInfo = (textClass, inputClass, labelClass) => {
        if ($(textClass).css('display') == 'block') {
            $(labelClass).text("キャンセル");
            $(textClass).collapse('hide');
            $(inputClass).collapse('show');
        } else {
            $(labelClass).text("編集");
            $(textClass).collapse('show');
            $(inputClass).collapse('hide');
        }
    }
    </script>

@endsection