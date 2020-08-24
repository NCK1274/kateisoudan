<!DOCTYPE html>
<html lang="ja" class="animated">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <title>Heaz&Time</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--stylesheet cssリンク-->
  <link rel="stylesheet" href="{{ asset('/css/stylesheet1.css') }}" type="text/css">

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


   <!--vegas cssリンク-->
  <link rel="stylesheet" href="{{asset('/css/vegas.min.css')}}">
    
    <!--vegas jsのリンク-->
    <!-- <script src="{{asset('/js/jquery-2.1.3.min.js')}}"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{asset('/js/vegas.min.js')}}"></script>
    
    <!--vegas zeptoのリンク-->
  <script src="http://zeptojs.com/zepto.min.js"></script>

    <!--フォントオーサムのリンク-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

   <!--Google Fontsのリンク-->
<!--     <style>@import url('https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap');</style>
 -->
</head>
<body>
  　<!-- TOPに戻る部分の実装-->
  <div id="page_top"><a href="#"></a></div>
    <!--ヘッダー部分の実装-->
  <header>
    <h1>
        <a href="/">Headz&Time</a>
    </h1>
      <!--PCヘッダー部分の実装-->
    <nav class="pc-nav">
      <ul>
        <li><a href="#column">INTRODUCTION</a></li>
        <li><a href="#card">MEMDER</a></li>
        <li><a href="#accordion">CONTACT</a></li>
        <li><a href="#accordion">ABOUT</a></li>
      </ul>
    </nav>
      <!--スマホヘッダー部分の実装-->
    <nav class="sp-nav">
      <ul>
        <li><a href="#column">INTRODUCTION</a></li>
        <li><a href="#card">MEMDER</a></li>
        <li><a href="#accordion">CONTACT</a></li>
        <li><a href="#accordion">ABOUT</a></li>
        <li class="close"><span>close</span></li>
      </ul>
    </nav>
      <!--レスポンシブヘッダーハンバーガー部分の実装-->
    <div id="hamburger">
      <span></span>
    </div>
  </header>

    <!--トップ部分の実装-->
  <div class='top keyvisual'>
    <h2>HEADZTIME HISTORY</h2>
    <!--メイン部分の実装-->
    <div class="top-logo">
      <img class="logo" src="{{asset('/img/headz.png')}}">
    </div>
  <!--human部分の実装-->
    <div class="human">
      <div id="men" class ="human-poster vegas-container img-responsive" style="padding: 0px;">
      </div>
      <div class="human-label animated">
        <p>MEMBER</p>
      </div>
    </div>
  </div>  
  <!--introduction部分の実装-->
  <div class="container bg-white py-5 my-5">
      <!--にこにこキャンプの特徴-->
    <div id="column">
      <h2 class="text-center py-3">Headz & Time</h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-12">
        <img class="img-fluid" src="img/piano.jpg" alt="">
      </div>
      <div class="col-md-4 col-12">
        <img class="img-fluid" src="img/piano2.jpg" alt="">
      </div>
      <div class="col-md-4 col-12">
        <img class="img-fluid" src="img/piano3.jpg" alt="">
      </div>
    </div>

<!--introduction-->
    <div id="Flex">
      <h2 class="text-center py-3">INTRODUCTION</h2>
    </div>
    <div class="d-flex flex-wrap-reverse justify-content-center">
      <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
        ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
      </div>
      <div class="col-md-6 col-12 p-0 align-self-center">
        <img class="img-fluid" src="img/cinema.jpg" alt="">
      </div>
    </div>
    <div class="d-flex flex-wrap justify-content-center">
      <div class="col-md-6 col-12 p-0 align-self-center">
        <img class="img-fluid" src="img/cinema1.jpg" alt="">
      </div>
      <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
        ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
      </div>
    </div>      

      <!--member-->
    <div id="card">
      <h2 class="text-center py-3">MEMBER</h2>
    </div>
    <div class="row">
      <div class="col-md-4 col-12">
        <div class="card">
          <img src="img/human3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">KUNMMY</h5>
              <p class="card-text">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
              </p>
              <ul class="follow-me">
                <li><a href="https://twitter.com"></a></li>
                <li><a href="https://www.facebook.com"></a></li>
                <li><a href="https://www.tumblr.com"></a></li>
                <li><a href="https://www.youtube.com"></a></li>
              </ul>      
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="img/human2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">TaK</h5>
              <p class="card-text">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
              </p>
              <ul class="follow-me">
                <li><a href="https://twitter.com"></a></li>
                <li><a href="https://www.facebook.com"></a></li>
                <li><a href="https://www.tumblr.com"></a></li>
                <li><a href="https://www.youtube.com"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="img/human1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">NCK</h5>
              <p class="card-text">
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
                テキストテキストテキストテキストテキストテキスト
               </p>
              <ul class="follow-me">
                <li><a href="https://twitter.com"></a></li>
                <li><a href="https://www.facebook.com"></a></li>
                <li><a href="https://www.tumblr.com"></a></li>
                <li><a href="https://www.youtube.com"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

       <!--お問い合わせ-->
      <div id="accordion">
        <h2 class="text-center py-3">CONTACT</h2>
      </div>
      <form action="#" class="needs-validation col-8 mx-auto" novalidate>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="validationCustom01">名前</label>
            <input name="entry.2114262126" type="text" class="form-control" id="validationCustom01" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              名前を入れてください
            </div>
          </div>
          <div class="col-12 mb-3">
            <label for="validationCustom02">電話番号</label>
            <input name="entry.88768733" type="text" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              電話番号を入れてください
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="validationCustom04">住所</label>
            <select class="custom-select" id="validationCustom04" required>
              <option selected disabled value="">選択して下さい</option>
              <option>東京</option>
              <option>神奈川</option>
              <option>千葉</option>
              <option>埼玉</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              同意する
            </label>
            <div class="invalid-feedback">
              同意するにチェックを入れてください
            </div>
          </div>
        </div>
        <button class="btn btn-dark" type="submit">Submit form</button>
      </form>
    </div>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
   <!--フッター部分の実装-->
  <footer>
    </div>
    <footer class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="py-4">
              <h4 class="d-inline-block py-3 border-bottom border-info text-dark">Profile</h4>
            </div>
            <div class="mx-5">
              <img class="img-fluid rounded-circle" src="img/gang.jpg" alt="">
            </div>
            <p>
              テキストテキストテキストテキストテキストテキスト。
              テキストテキストテキストテキストテキストテキスト、
              テキストテキストテキストテキストテキストテキスト
            </p>
          </div>
          <div class="col-md-4 col-12">
            <div class="py-4">
              <h4 class="d-inline-block py-3 border-bottom border-info text-dark">Portfolio</h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a class="text-dark" href="#">youtube</a></li>
              <li class="list-group-item"><a class="text-dark" href="#">blog</a></li>
              <li class="list-group-item"><a class="text-dark" href="#">twitter</a></li>
              <li class="list-group-item"><a class="text-dark" href="#k">instagram</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-12">
            <div class="py-4">
              <h4 class="d-inline-block py-3 border-bottom border-info text-dark">Product</h4>
            </div>
            <a class="twitter-timeline text-dark" data-lang="ja" data-height="500" href="＃">Tweets by heaztime</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>          </div>
        </div>
      </div>
      <div class="copylight">
      &copy; 2020 Katei Soudan Sitsu All Rights Reserved.
      </div>
  </footer>
</body>

</html>