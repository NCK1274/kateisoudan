<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>KateiSoudanSitsu</title>
    <!--stylesheet cssリンク-->
    <link href="/css/style.css" rel="stylesheet" type="text/css">

    <!--slickスライダー CSSのリンク-->
    <link href="{{asset('/css/slick-theme.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/slick.css')}}" rel="stylesheet" type="text/css">

    <!--slickスライダー JSのリンク-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/slick.min.js')}}"></script>
    
    <!--jqueryのリンク-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

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
        </div>    
    </header>
    
    <!--jquery-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.main').bxSlider({
                auto: true,
                pause: 4000,
            });
        });
    </script>

    
    <!--メイン画面-->
    <div class="wrap">
    <div class="main">           
            <img src="/img/top1.png"  width="900" height="500" alt="メイン画像">
            <img src="/img/top2.png" width="900" height="500" alt="メイン画像2">
            <img src="/img/top3.jpg" width="900" height="500" alt="メイン画像3">
    </div>
    <div class="main-item">
        <ul class="main-item_top">
            <li class="main-item_middle">
                <span>事業所はこちらからお探しください</span>
                    <a href="#" class="main-item_btn">事業所一覧</a>
            </li>
        </ul>
    </div> 
    <h2 class="main-txt">地域に寄り添う、人と人を繋ぐ</h2>         
    </div>
    <!--ナビゲーション部分の実装-->
    <div class="wrapper">
        <nav class="navigation">
            <div class="navigation-inner">
                <ul>
                    <li class="menu1"><a href="#"><span>事業案内</span></a></li>
                    <li class="menu2"><a href="#"><span>相談内容</span></a></li>
                    <li class="menu3"><a href="#"><span>サービス利用方法</span></a></li>
                    <li class="menu4"><a href="#"><span>事業所一覧</span></a></li>
                    <li class="menu5"><a href="#"><span>お問合せ</span></a></li>
                </ul>
            </div>
        </nav>
    <!--ニュース画面-->
    <div class="news">
        <h2 class="news-label">NEWS</h2>
        <div class="news-info">
            <div class="news-inner">
                <div class="news-topic">
                <p>
                    <b>政府からの緊急事態宣言の解除に伴い、5月30日(土)から営業を再開いたします。</b>
                    <br>
                    <b>各事業所では、新型コロナウイルス感染症拡大防止対策を行っております。</b>
                    <br>
                    <b>詳細は各事業所のWEBもしくは直接連絡の上ご確認お願いいたします。</b>
                </div>
            </div>
        </div>
        <div class="news-info">
            <div class="news-inner">
                <div class="news-topic">
                <p>
                    <b>平素は、KSSホームページに格別のお引き立てを賜り、厚く御礼申し上げます。</b>
                    <br>
                    <b>当サイトは現在テスト運用中でございます。そのため一部のブラウザや、ブラウザの設定によっては、</b>
                    <br>
                    <b>ログイン画面が表示できない状況になっております。</b>
                    <br>
                    <b>セキュリティ強化も踏まえ、当社サイトでは対応を進めております。ご了承願います。</b>

                </p>
                </div>
            </div>
        </div>
        <p>
            <span class="news-btn">
                <a href="#">more</a>
            </span>
        </p>
    </div>    
    <!--事業案内-->            
    <div class="info">
        <img alt="info画像" src="{{asset('/img/info1.png')}}">
        <dl>
        <dt>事業案内</dt>
            <dd>
                コンテンツ1の本文になります。<br>
                コンテンツ1の本文になります。<br>
                コンテンツ1の本文になります。コンテンツ1の本文になります。<br>
                コンテンツ1の本文になります。コンテンツ1の本文になります。<br>
                コンテンツ1の本文になります。コンテンツ1の本文になります。<br>
                <p>
                <span class="info-logo"><a href="#"><img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}">KSSについてもっと詳しく</a></span> 
                </p>
            </dd>
        </dl>
   </div>
    <!--相談内容-->
    <div class="cons">
        <img alt="相談内容" src="{{asset('/img/info2.png')}}">
        <dl>
            <dt>相談内容</dt>
            <dd>
            コンテンツ1の本文になります。<br>
            コンテンツ1の本文になります。<br>
            コンテンツ1の本文になります。コンテンツ1の本文になります。<br>
            コンテンツ1の本文になります。<br>
            コンテンツ1の本文になります。コンテンツ1の本文になります。<br>
            </dd>
        </dl>
    </div>    
    <!--サービス利用方法-->
    <section class="service">
        <div class="service-body">
            <div class="service-txt">
                <h2>サービス利用方法</h2>
            <div class="grid">
                <h1>
                     <h2 class="dl1">ステップ<span>1</span></h2>
                    <img class="dt1" src="{{asset('/img/service1.png')}}" alt="サービス利用方法">
                    <p class="dd1">必要事項の記入</p>
                </h1>
                <h1>
                    <h2></h2>
                    <img class="dt2" src="{{asset('/img/service4.png')}}" alt="サービス利用方法">
                </h1>
                <h1>
                    <h2 class="dl3">ステップ<span>2</span></h2>
                    <img class="dt3" src="{{asset('/img/service2.png')}}" alt="サービス利用方法">
                    <p class="dd3">ホスト先を探す</p>
                </h1>
                <h1>
                    <h2></h2>
                    <img class="dt4" src="{{asset('/img/service4.png')}}" alt="サービス利用方法">
                </h1>
                <h1>
                    <h2 class="dl5">ステップ<span>3</span></h2>
                    <img class="dt5" src="{{asset('/img/service3.png')}}" alt="サービス利用方法">
                    <p class="dd5">契約後、双方で直接連絡を取り合う</p>
                </h1>
            </div>
        </div>  
    </section>

    <!--システムの流れ-->
    <section class="system">
        <div class="system-area">
            <div class="system-txt">
                <h2>システムの流れ</h2>
                <p>C to Cの関係になります。</p>
            </div>
            <figure class="system-img">
                <img src="{{asset('/img/system1.png')}}" alt="システムの流れ">
            </figure>
        </div>
    </section>

     <!--slickスライダー-->
    <script>
    $(function() {
    $('.slider').slick({
        autoplay:true,
        infinite: true,
        dots:true,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
               }
                },{
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        }
                    }]            
        });
    });
    </script>
    
    <!--事業所の紹介-->
    <section class="office">
        <div class="office-title">
        事業所の紹介
        </div>
        <ul class="slider">
            <li><a href="#"><img src="{{asset('/img/office1.png')}}" alt="office1"></a></li>
            <li><a href="#"><img src="{{asset('/img/office2.png')}}" alt="office2"></a></li>
            <li><a href="#"><img src="{{asset('/img/office3.png')}}" alt="office3"></a></li>
            <li><a href="#"><img src="{{asset('/img/office1.png')}}" alt="office1"></a></li>
            <li><a href="#"><img src="{{asset('/img/office2.png')}}" alt="office2"></a></li>
            <li><a href="#"><img src="{{asset('/img/office3.png')}}" alt="office3"></a></li>
        </ul>
        <li class="office-btn">
        <a href="#">事業者一覧はこちらへ</a>
        </li>
    </section>

    <!--事業者エントリーフォーム-->
    <section class="entry">
            <figure class="entry-box" >
                <a href="#">
                <img alt="事業者の写真" src="{{asset('/img/entry.png')}}">
                </a>
            </figure>
    </section>

    <!--TOPページボタン-->
    <div class="page_top">
        <a href="#"></a>
    </div>

    <!--メイン画面終了-->
    </div>

    <!--フッターお問合せ -->
    <footer>
        <div class="footer-txt">
            <div class="footer-log">
                <span class="footer-log__font">事業所マッチングサービス</span>
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