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
    <div id="wrapper">

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
                <div class="header-nav">
                    <ul class="header-list">
                      <li class="header-item"><a href="#">事業所一覧</a></li>
                      <li class="header-item"><a href="#">新規登録フォーム</a></li>
                      <li class="header-item"><a href="#">ログイン</a></li>
                    </ul>
                </div>
            </div>
        </header>
    
    <!--jquery-->
        <script type="text/javascript">
            $(document).ready(function(){
                $('.main-middle').bxSlider({
                    auto: true,
                    pause: 4000,
                });
            });
            $(document).ready(function() {          //HTMLを読み込んだら処理
              $(window).scroll(function() {         //windowがスクロールされた時の関数
                if ($(this).scrollTop() > 0) {      //TOP出ない時
                  $('header').css('opacity', 0.8);  //headerの透明度
                } else {
                  $('header').css('opacity', 1);    //TOPの時の透明度
                }
              });
            });
        </script>

    
    <!--メイン画面-->   
        <div class="wrap">
            <h2 class="main-txt">地域に寄り添う、人と人を繋ぐ</h2> 
            <div class="main"> 
                <div class="main-middle">         
                    <img src="/img/top1.jpg"  width="100%" height="100%" alt="メイン画像">
                    <img src="/img/top2.png" width="100%" height="100%" alt="メイン画像2">
                    <img src="/img/top3.jpg" width="100%" height="100%" alt="メイン画像3">
                </div>
                <div class="main-item">
                    <ul class="main-item_top">
                        <li>
                        <span>事業所はこちらからお探しください</span>
                        <a href="office" class="main-item_btn">事業所一覧</a> 
                        </li>
                    </ul>    
                </div>  
            </div>  
        </div>

    <!--ナビゲーション部分の実装-->
        <nav class="navigation">
            <div class="navigation-inner">
                <ul>
                    <li class="menu1"><a href="#info"><span>事業案内</span></a></li>
                    <li class="menu2"><a href="#cons"><span>相談内容</span></a></li>
                    <li class="menu3"><a href="#service"><span>サービス利用方法</span></a></li>
                    <li class="menu4"><a href="office"><span>事業所一覧</span></a></li>
                    <li class="menu5"><a href="contact"><span>お問合せ</span></a></li>
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
            <p><span class="news-btn"><a href="#">more</a></span></p>
        </div>    
    <!--事業案内-->            
        <div id="info">
            <img alt="info画像" src="{{asset('/img/info1.png')}}">
            <dl>
            <dt>事業案内</dt>
                <dd>
                    KSSのホームページへ来て下さいましてありがとうございます。<br>
                    C to Cの関係性でユーザー様と企業様をマッチングサポートさせて頂くアプリケーションでございます。<br>
                    時代が進むにつれ悩みも多様化する中それに伴う選択の幅も広げていきたいと考えてきました。<br>
                    いじめ、薬物、自殺志向、非行・不登校などの改善の為に、全国各地から少年少女を預かり先の提供することで、<br>私たちKSSがその架け橋となれる事を目指しております。<br>
                    支援地域密着型全国の同じ悩みを抱えた親御さんを支援できる受け入れ態勢を整えております。<br>
                    <p class="info-logo">
                    <a href="#"><img alt="kssのロゴ" src="{{asset('/img/KSS.png')}}">もっと詳しく</a>
                    </p>
                </dd>
            </dl>
       </div>

        <!--相談内容-->
        <div id="cons">
            <img alt="相談内容" src="{{asset('/img/info2.png')}}">
            <dl>
                <dt>相談内容</dt>
                <dd>
                ニート、引きこもり、家庭内暴力、盗みや暴力などの倫理的非行行動、子供主体の悩みや、<br>
                特定妊婦、シングルでの子育ての悩みなど対応した多くの企業が登録されております。<br>
                企業には専門に行う事業団体ほか、役所、保育所、学童、児童相談所の公共事業団体も登録されております。<br>
                その他にカウンセラーやセラピスト、出張型の教育指導なども行っており、<br>
                子育てイベントの実施もお知らせや自助グループのグループワークの参加も推薦しております。<br>
                全て実績のある厳選な審査をクリアした企業のみがホストとして登録されており、<br>
                私達は相談内容によってユーザー様とホストをマッチングする手助けをさせていただきたいと思っております。<br>
                </dd>
            </dl>
        </div> 

        <!--サービス利用方法-->
        <section id="service">
            <div class="service-body">
                <div class="service-txt">
                    <h2>サービス利用方法</h2>
                    <div class="grid">
                        <h1>
                             <h2 class="dl1">ステップ<span>1</span></h2>
                            <img class="dt1" src="{{asset('/img/service1.png')}}" alt="サービス利用方法">
                            <p class="dd1">
                            ・登録</br>
                            ユーザー新規登録で</br>
                            1分ほどの簡単な登録をお願いをしております。
                            名前、住所、電話番号などの本人確認事項の他に
                            ホスト先のマッチングの際に必要な相談内容、相談対象者の年齢、職業、相談者との関係性など必要事項のご記入をお願いしております。</p>
                        </h1>
                        <h1>
                            <h2></h2>
                            <img class="dt2" src="{{asset('/img/service4.png')}}" alt="サービス利用方法">
                        </h1>
                        <h1>
                            <h2 class="dl3">ステップ<span>2</span></h2>
                            <img class="dt3" src="{{asset('/img/service2.png')}}" alt="サービス利用方法">
                            <p class="dd3">
                            ・ホスト先を探す</br>
                            サイト内で要件に合うホスト先を探して頂きます。
                            見つけたら連絡可能な日時や面接希望日を設定してホスト先へオファーを出します
                            </p>
                        </h1>
                        <h1>
                            <h2></h2>
                            <img class="dt4" src="{{asset('/img/service4.png')}}" alt="サービス利用方法">
                        </h1>
                        <h1>
                            <h2 class="dl5">ステップ<span>3</span></h2>
                            <img class="dt5" src="{{asset('/img/service3.png')}}" alt="サービス利用方法">
                            <p class="dd5">
                            ・契約後、双方で直接連絡</br>
                            ホスト先から返信が来ます。
                            連絡手段は登録して頂いた電話、メールになります。
                            面接日の日程調整ができたらマッチング終了になります。
                            </p>
                        </h1>
                    </div>
                </div>
            </div> 
        </section>

        <!--システムの流れ-->
        <section class="system">
            <div class="system-area">
                <div class="system-txt">
                    <h2>システムの流れ</h2>
                    <p>
                    C to Cの関係になります。</br>
                    新規登録後、あとはユーザー様一人ひとりに合った
                    相談内容に沿って、ホスト先にオファーを出すだけです。</br>
                    マッチングまでをすべておまかせ下さい。</br>
                    各地域でを選ぶ必要も、
                    各企業ごとに相談内容を話したり必要事項の記入の手続きをする必要もありません。</br>
                    マッチング後は双方での直接やり取りをして頂きます</br>
                    </p>
                </div>
                <figure class="system-img">
                    <img src="{{asset('/img/system1.png')}}" alt="システムの流れ" class ="img-responsive">
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
        <section id="service">
            <h1 class="office-title">
            事業所の紹介
            </h1>
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
    </div>
</body>
</html>