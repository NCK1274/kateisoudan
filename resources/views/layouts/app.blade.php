<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>@yield('title')</title>
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
        <!-- bootstrap-datepickerを読み込む -->
        <link rel="stylesheet" type="text/css" href="../bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.min.css">
        <script type="text/javascript" src="../bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="../bootstrap-datepicker-1.6.4-dist/locales/bootstrap-datepicker.ja.min.js"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        <!-- JSの処置 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            @yield('script')
        </script>

        <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    </body>
</html>