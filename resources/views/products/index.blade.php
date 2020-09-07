@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja" class="animated">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <title>kateisoudan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--stylesheet cssリンク-->
  <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">

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

</head>
<body>
  　<!-- TOPに戻る部分の実装-->
  <div class="page_top"><a href="#"></a></div>

  <!--全体部分の実装-->
  <div class="container bg-light py-5 my-5">

    <!-- 画像の横に水平に文章を設置 -->
    <div id="Flex">
      <h2 class="text-center py-3">事業所一覧</h2>
    </div>
    <!-- 事業所 -->
    <div class="card my-5 " >
      <div class="row no-gutters">
        <div class="col-md-4 px-2 py-2">
          <div class="card" style="width: 100%;">
            <img class="card-img-top img-thumbnail" src="https://picsum.photos/200" alt="Card image cap">
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
        </div> 
        <div class="col-md-8">
            @foreach($products as $product)
          <div class="card-body">
            <h2 class="card-title font-weight-bold">{{$product->name}}
            </h2>
            <p class="card-text">{{$product->body}}</p>
            <p class="card-text"><small class="text-muted">2020年8月24日　更新</small></p>
            <p class="card-text">一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント</p>
            <a href="{{route('products.show', $product)}}" class="btn btn-primary">詳細を見る</a>
          </div>
          @endforeach
        </div>
      </div>
    </div>


    <!-- 事業所 編集なし　通常遷移のみ -->
    <div class="card my-5" >
      <div class="row no-gutters">
        <div class="col-md-4 px-2 py-2">
          <div class="card" style="width: 100%;">
            <img class="card-img-top img-thumbnail" src="https://picsum.photos/200" alt="Card image cap">
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
        </div> 
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title font-weight-bold">NPO法人かわもと学習サポートセンター<div class="star"><a href="#"></a></div></h2>
            <p class="card-text">初めまして、私たちが学習サポートを行います。私たちが学習サポートを行います。私たちが学習サポートを行います。私たちが学習サポートを行います。私たちが学習サポートを行います。</p>
            <p class="card-text"><small class="text-muted">2020年8月24日　更新</small></p>
            <p class="card-text">一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント</p>
            <a href="office4_1" class="btn btn-primary">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>


    <!-- 事業所 -->
    <div class="card my-5 " >
      <div class="row no-gutters">
        <div class="col-md-4 px-2 py-2">
          <div class="card" style="width: 100%;">
            <img class="card-img-top img-thumbnail" src="https://picsum.photos/200" alt="Card image cap">
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
        </div> 
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="card-title font-weight-bold">NPO法人かわもと学習サポートセンター<div class="star"><a href="#"></a></div></h2>
            <p class="card-text">初めまして、私たちが学習サポートを行います。私たちが学習サポートを行います。私たちが学習サポートを行います。私たちが学習サポートを行います。私たちが学習サポートを行います。</p>
            <p class="card-text"><small class="text-muted">2020年8月24日　更新</small></p>
            <p class="card-text">一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント一言コメント</p>
            <a href="office5_1" class="btn btn-primary">詳細を見る</a>
          </div>
        </div>
      </div>
    </div>

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
@endsection