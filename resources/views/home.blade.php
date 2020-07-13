<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>KateiSoudanSitsu</title>
    <!--stylesheet cssリンク-->
     <link rel="stylesheet" href="{{asset('/css/stylesheet3.scss')}}">

    <!--vegas cssリンク-->
    <link rel="stylesheet" href="{{asset('/css/vegas.min.css')}}">
    
    <!--vegas jsのリンク-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('/js/vegas.min.js')}}"></script>
    
    <!--vegas zeptoのリンク-->
    <script src="http://zeptojs.com/zepto.min.js"></script>

    <!--bootstrap cssのリンク-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    <!--bootstrap jsのリンク-->
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.js.map')}}"></script>

    </head>
    <body>

    <!--ヘッダー部分の実装-->
    <header>
    <h1 class="headline">
      <a><img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}"></a>
    </h1>
    <ul class="head-list">
      <li class="head-list__item"><a href="#">Home</a></li>
      <li class="head-list__item"><a href="#">事業所一覧</a></li>
      <li class="head-list__item"><a href="#">新規登録フォーム</a></li>
      <li class="head-list__item"><a href="#">ログイン</a></li>
    </ul>
    </header>

   
    <!--Vegas-->
    <script>
        
    $(".Vegas JS_VegasItem, body").vegas({
        slides: [
            { src: "/img/top1.png" },
            { src: "/img/top2.png" },
            { src: "/img/top3.png" }
        ],
        animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
    });

    </script>

    <!--メイン画面-->
    <div class="main">
        <div class="Vegas JS_VegasItem">
            <div class="Vegas-Inner">
            <div class="Vegas-Inner-Item">家庭相談室<br/>
            地域密着</div>
            </div>
        </div>            
    </div>

    <!--ナビゲーション部分の実装-->
    <div class="wrapper">  
    <div class="navigation">
        <ul>
            <li><a href="#">事業案内</a></li>
            <li><a href="#">相談内容</a></li>
            <li><a href="#">サービス利用方法</a></li>
            <li><a href="#">事業所一覧</a></li>
            <li><a href="#">お問合せ</a></li>
        </ul>
    </div>

    <!--事業案内-->   
    <div class="infomation">
        <h2>事業案内</h2>
    </div>           
    <div class="info">
        <img class="info-top" src="{{asset('/img/service2.png')}}" alt="授業風景"/>
            <p class="info-title">
                コンテンツ1の本文になります。<br/>
                コンテンツ1の本文になります。
                コンテンツ1の本文になります。コンテンツ1の本文になります。<br/>
                コンテンツ1の本文になります。コンテンツ1の本文になります。
                コンテンツ1の本文になります。コンテンツ1の本文になります。
                コンテンツ1の本文になります。コンテンツ1の本文になります。
                コンテンツ1の本文になります。コンテンツ1の本文になります。<br/>
                コンテンツ1の本文になります。コンテンツ1の本文になります。
                コンテンツ1の本文になります。コンテンツ1の本文になります。
            </p>
    </div>
    <div class="info-area">
        <div class="info-item">
        <p calss="info-logo"><a href="#"><img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}">KSSについてもっと詳しく</a></p>
        </div>    
    </div>
   
    <!--相談内容-->
    <div class="consutation">
        <div class="cons-top">
            <h2>相談内容</h2>
        </div>
        <div class="cons-txt">
            <img class="cons-img" src="{{asset('/img/content.png')}}" alt=""/>
            <p id="cons-bottom">
            コンテンツ1の本文になります。コンテンツ1の本文になります。
            コンテンツ1の本文になります。コンテンツ1の本文になります。<br/>
            コンテンツ1の本文になります。コンテンツ1の本文になります。
            コンテンツ1の本文になります。コンテンツ1の本文になります。
            コンテンツ1の本文になります。コンテンツ1の本文になります。
            コンテンツ1の本文になります。コンテンツ1の本文になります。<br/>
            コンテンツ1の本文になります。コンテンツ1の本文になります。
            コンテンツ1の本文になります。コンテンツ1の本文になります。

            </p>
        </div>
    </div>    
    <!--サービス利用方法-->
    <section class="service">
        <div class="service-body">
            <div class="service-txt">
                <h2>サービス利用方法</h2>
            <div class="grid">
                <h1>
                    <img src="{{asset('/img/service1.png')}}" alt="サービス利用方法">
                </h1>
                <h1>
                    <img src="{{asset('/img/service4.png')}}" alt="サービス利用方法">
                </h1>
                <h1>
                    <img src="{{asset('/img/service2.png')}}" alt="サービス利用方法">
                </h1>
                <h1>
                    <img src="{{asset('/img/service4.png')}}" alt="サービス利用方法">
                </h1>
                <h1>
                    <img src="{{asset('/img/service3.png')}}" alt="サービス利用方法">
                </h1>
            </div>
        </div>  
    </section>


    <!--システムの流れ-->
    <section class="system">
        <h2>システムの流れ</h2>
        <div class="system-img">
            <img src="{{asset('/img/system1.png')}}" alt="システムの流れ">
        </div>
    </section>
    
    <!--事業所の紹介-->
    <section class="office">
        <h2>事業所の紹介</h2>
        <div class="office-top">
                <img class="office-img" src="{{asset('/img/service4.png')}}" alt="office"/>
        </div>
            <div class=office-txt>
                <p>
                    コンテンツ2の本文になります。コンテンツ2の本文になります。コンテンツ2の本文になります。<br/>
                    コンテンツ2の本文になります。コンテンツ2の本文になります。
                </p>
            </div>
    </section>

    <!--事業者エントリーフォーム-->
    <section class="entry">
        <div class="entry-box">
            <p>支援を支援をしてくださる企業の皆様へ</p>
            <figure>
                <img alt="事業者の写真" src="{{asset('/img/KSS.png')}}">
            </figure>
            <a class="entry-box__btn" href="/users/sign_in">
                ::before
                "事業者エントリー"
            </a>
        </div>
    </section>
</div>
    <!--メイン画面終了-->

    <!--フッターお問合せ -->
    <div class="footer">
        <div class="footer-txt">
        <div class="footer-log">
            <span class="footer-log__font">事業所マッチングサービス</span>
            <br>
            <a href="/">
                <img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}">
            </a>
        </div>  
        <div class="footer-nav">
            <ul>
                <li class="footer-low"><a href="#">会社概要</a></li>
                <li class="footer-low"><a href="#">利用規約</a></li>
                <li class="footer-low"><a href="#">プライバシーポリシー</a></li> 
                <li class="footer-low"><a href="#">お問合せ</a></li>
            </ul>
        </div>
    </div>
</div>
    <div class="copyright">
        <p>&copy; 2020 Katei Soudan Sitsu All Rights Reserved.</p>
    </div>

    </body>
</html>