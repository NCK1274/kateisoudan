<!DOCTYPE html>
<html lang="ja" class="animated">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <title>kateisoudan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--stylesheet cssリンク-->
  <link href="/css/stylesheet3.css" rel="stylesheet" type="text/css">

   <!--bootstrap cssのリンク-->
  <link rel="stylesheet" href="{{asset('/css/bootstrap.css.map')}}">
  <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    <!--bootstrap jsのリンク-->
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.js.map')}}"></script> 


   <!--jqueryのリンク-->
  <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

   <!-- top.jsのリンク -->
  <script src="{{asset('/js/top.js')}}"></script>

    <!--フォントオーサムのリンク-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   <!--Google Fontsのリンク-->
<!--     <style>@import url('https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap');</style>
 -->
</head>

<body>
  　<!-- TOPに戻る部分の実装-->
  <div class="page_top"><a href="#"></a></div>

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


  <!--全体部分の実装-->
  <div class="container bg-light py-5 my-5">

  <!--紹介画像部分の実装-->
    <div id="column">

      <h2 class="text-center py-3">NPO法人かわもと学習サポートセンター</h2>
    </div>
    <div class="py-3 text-right">
      <button type="button" class="btn btn-secondary btn-lg">コンタクトを取る</button>
    </div> 
    <div class="row">                                                                     <!-- 一行分を定義する（12個に分けることがきる） -->
      <div class="col-md-12">                                                             <!-- md（ミディアム）指定＝720pxよりの画面が小さくなった場合はcolの指定をなくす -->
        <img class="img-fluid img-thumbnail" src="https://picsum.photos/1000/300?grayscale" alt="">
      </div>
    </div>
    <div class="row pt-1">
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://picsum.photos/200" alt="">
      </div>
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://picsum.photos/200" alt="">
      </div>
      <div class="col-md-4">
        <img class="img-fluid img-thumbnail" src="https://picsum.photos/200" alt="">
      </div>
    </div>

    <!-- 企業情報 -->
    <table class="table py-2">
      <thead class="table-primary">
        <tr>
          <th scope="col"></th>               <!-- scope属性は見出しのセルを対象にする。colで列の指定 -->
          <th scope="col-md-12">登録情報</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>                                  <!-- trは見出しセル -->
          <th scope="row" style="background-color: silver">事業内容</th>
          <td style colspan="3">学童保育</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">対象年齢</th>
          <td colspan="3">0歳〜</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">種類</th>
          <td colspan="3">一時預かり</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">場所</th>
          <td colspan="3">関東</td>
        </tr>
      </tbody>
    </table> 

    <!--担当者の一言-->
    <div class="card mb-3" style="max-width: 1200px;">
      <div class="row no-gutters">
        <div class="col-md-4 px-2 py-2">
          <img class="bd-placeholder-img img-fluid rounded-circle card-img-top img-thumbnail" src="https://picsum.photos/200" alt="Card image cap">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">担当者の一言</h5>
            <p class="card-text">一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- サービス・関連情報 -->
    <table class="table py-2">
      <thead class="table-primary">
        <tr>
          <th scope="col"></th>               <!-- scope属性は見出しのセルを対象にする。colで列の指定 -->
          <th scope="col-md-12">会社概要</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>                                  <!-- trは見出しセル -->
          <th scope="row" style="background-color: silver">会社名</th>
          <td style colspan="3">NPO法人かわもと学習サポートセンター</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">電話番号</th>
          <td colspan="3">044-444-6666</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">住所</th>
          <td colspan="3">〒230-0001 神奈川県川崎市川崎区5ー5-5</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">アクセス</th>
          <td colspan="3">川崎駅より徒歩10分</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">営業時間</th>
          <td colspan="3">平日：10：00〜20：00 休日・祝日：10:00〜17：00</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">定休日</th>
          <td colspan="3">水曜日</td>
        </tr>
      </tbody>
    </table> 

    <!-- サービス・関連情報 -->
    <table class="table py-2">
      <thead class="table-primary">
        <tr>
          <th scope="col"></th>               <!-- scope属性は見出しのセルを対象にする。colで列の指定 -->
          <th scope="col-md-12">施設・設備</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>                                  <!-- trは見出しセル -->
          <th scope="row" style="background-color: silver">主な業務内容</th>
          <td style colspan="3">カウンセリング、三者面談</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">設備</th>
          <td colspan="3">個別面談スペースあり</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">活動</th>
          <td colspan="3">2000年より全国を相談に回る活動をスタート。年間約500件以上の相談実績あり。</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">事業体系</th>
          <td colspan="3">5人の専門カウンセラー</td>
        </tr>
        <tr>
          <th scope="row" style="background-color: silver">金額</th>
          <td colspan="3">初回：無料　2回目以降：1000円〜</td>
        </tr>
      </tbody>
    </table> 

    <!-- 会社HP -->
    <table class="table py-2">
      <thead class="table-primary">
        <tr>
          <th scope="col"></th>               <!-- scope属性は見出しのセルを対象にする。colで列の指定 -->
          <th scope="col-md-12">会社ホームページ</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>                                  <!-- trは見出しセル -->
          <th scope="row" style="background-color: silver">かわもとサポートセンターHP</th>
          <td style colspan="3">リンク先</td>
        </tr>
      </tbody>
    </table>
        
    <!--お問い合わせ-->
    <div id="accordion">
      <h2 class="text-center py-3">CONTACT</h2>
    </div>
    <div class="col-8-auto mb-3 px-5 ">
      <button type="button" class="btn btn-secondary btn-lg btn-block">コンタクトを取る</button>
    </div>
  </div>

  <!-- お気に入り -->
    <div class="py-3 text-right">
      <div class="star"><a href="#"></a></div>
    </div>

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