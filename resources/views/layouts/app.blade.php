<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>@yield('title')</title>
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- CSSの読み込み -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/kateisoudan.css')}}" rel="stylesheet">

        <!-- JSの読み込み -->
        <script type="text/javascript" src="../bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="../bootstrap-datepicker-1.6.4-dist/locales/bootstrap-datepicker.ja.min.js"></script>
        <script src="{{asset('js/app.js')}}"></script>

        <!-- Fontsの読み込み -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- fontawesomeリンク -->
        <script src="https://kit.fontawesome.com/2af07c46b3.js" crossorigin="anonymous"></script>

        <!-- bootstrap-datpickerの読み込み -->
        <link href="{{ asset('css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datepicker.ja.min.js')}}"></script>

    </head>

    <body>
        <div id="app">
            @component('components.header')
            @endcomponent
            <main class="py-4 mb-5">
                @yield('content')               <!-- sectionと言うトンネルを通すための穴 -->
            </main>
        </div>   
    <!-- bootstrap-datepickerのjavascriptの処理-->
    <script>
        $('#date_sample').datepicker({
            language:'ja'
        });
    </script>
    </body>

</html>