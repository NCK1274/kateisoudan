<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>KateiSoudanSitsu</title>
    <!--stylesheet cssリンク-->
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    
    <!--bootstrap cssのリンク-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    <!--bootstrap jsのリンク-->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js.map')}}"></script>

    <!--メディアクエリのリンク-->
    <link rel="stylesheet" href="/css/style.css" media="screen">

    <!--フォントオーサムリンク-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">

    </head>

	<body>
    <!-- <div class="container">   -->
        <script>
                $(function() {
                  const hum = $('#hamburger, .close')
                  const nav = $('.sp-nav')
                  hum.on('click', function(){
                     nav.toggleClass('toggle');
                  });
                });
        </script>
    <!--ヘッダー部分の実装-->
        <header>
            <div class="header-top">
                <h1 class="header-log">
                  <a><img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}"></a>
                </h1>
                <nav class="header-nav">
                    <ul class="header-list">
                      <li class="header-item"><a href="#">事業所一覧</a></li>
                      <li class="header-item"><a href="#">新規登録フォーム</a></li>
                      <li class="header-item"><a href="#">ログイン</a></li>
                    </ul>
                </nav>
                <!--レスポンシブヘッダーハンバーガー部分の実装-->
                 <div id="hamburger">
                    <span></span>
                </div>
                <nav class="sp-nav">
                    <ul>
                        <li><a href="#">事業所一覧</a></li>
                        <li><a href="#">新規登録フォーム</a></li>
                        <li><a href="#">ログイン</a></li>
                        <li class="close"><span>閉じる</span></li>
                    </ul>
                </nav>
                <!--ハンバーガーメニューの表示の関数-->      
            </div>
        </header>


	


		<!--フッターお問合せ -->
        <footer>
            <div class="footer-txt">
                <div class="footer-log">
                    <span class="footer-log__font">CtoC事業所マッチングサービス</span>
                    <br>
                    <a href="/">
                        <img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}">
                    </a>
                </div>  
                <div class="footer-nav">
                    <ul class="footer-list">
                        <li class="footer-low"><a href="#">会社概要</a></li>
                        <li class="footer-low"><a href="#">利用規約</a></li>
                        <li class="footer-low"><a href="#">プライバシーポリシー</a></li> 
                        <li class="footer-low"><a href="#">お問合せ</a></li>
                    </ul>
                </div>
            </div>    
        </footer>
        <div class="copyright">
            <p>&copy; 2020 Katei Soudan Sitsu All Rights Reserved.</p>
        </div>
    </body>    
</html>
