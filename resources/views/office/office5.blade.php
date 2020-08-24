<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>事業所リスト</title>
  </head>
  <body class="bg-light">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">NPO法人かわもと学習サポートセンター</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Flex">お客様の声</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#tab">事業内容</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#Embeds">授業風景</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#modal">入学方法</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#card">挨拶</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#accordion">その他サービス</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!--スライドショー-->
    <div class="keyvisual">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sample1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>school</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/sample2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>kids</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/sample3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>friends</h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container bg-white py-5 my-5">
      <!--にこにこキャンプの特徴-->
      <div id="column">
        <h2 class="text-center py-3">特徴</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-12">
          <img class="img-fluid" src="img/img4.jpg" alt="">
        </div>
        <div class="col-md-4 col-12">
          <img class="img-fluid" src="img/img5.jpg" alt="">
        </div>
        <div class="col-md-4 col-12">
          <img class="img-fluid" src="img/img6.jpg" alt="">
        </div>
      </div>

      <!--お客様の声-->
      <div id="Flex">
        <h2 class="text-center py-3">お客様の声</h2>
      </div>
      <div class="d-flex flex-wrap-reverse justify-content-center">
        <div class="col-md-6 col-12 p-0 align-self-center h3 p-4"> ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        </div>
        <div class="col-md-6 col-12 p-0 align-self-center">
          <img class="img-fluid" src="https://picsum.photos/500/500?grayscale" alt="">
        </div>
      </div>
      <div class="d-flex flex-wrap justify-content-center">
        <div class="col-md-6 col-12 p-0 align-self-center">
          <img class="img-fluid" src="https://picsum.photos/500/500?grayscale" alt="">
        </div>
        <div class="col-md-6 col-12 p-0 align-self-center h3 p-4">
          ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト ダミーテキストダミーテキストダミーテキストダミーテキストダミーテキスト
        </div>
      </div>

      <!--事業内容-->
      <div id="tab">
        <h2 class="text-center py-3">事業内容</h2>
      </div>
      <div class="tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item col-4 p-0">
            <a class="nav-link active text-center" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">カウンセリング</a>
          </li>
          <li class="nav-item col-4 p-0">
            <a class="nav-link text-center" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">出張サービス</a>
          </li>
          <li class="nav-item col-4 p-0">
            <a class="nav-link text-center" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">一時預かり</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-8 col-12 my-5 mx-auto">
              リモートのSkypeやハングアウトなどのビデオチャットでの
              対応もさせていただいており、その他メール、LINE、お電話でも
              ご相談の手段に関しましては気軽にご相談下さい。
            </div>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="col-md-8 col-12 my-5 mx-auto">
              現在は、コロナウイルスの影響で関東圏内にさせていただいております。
              遠方の方は申し訳ございませんが、リモート対応もしくは事業所での
              予約対応になります。
            </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="col-md-8 col-12 my-5 mx-auto">
              1ヶ月から半年の短期間の児童教育を行なっております。
              教員免許の持つ指導者による五教科の教育他、スポーツ、道徳、
              歴史なども教えております。
            </div>
          </div>
        </div>
      </div>

      <!--YouTube-->
      <div id="Embeds">
        <h2 class="text-center py-3">授業風景</h2>
      </div>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NaY66_S2e48" allowfullscreen></iframe>
      </div>


      <!--よくある質問-->
      <div id="modal">
        <h2 class="text-center py-3">入学方法</h2>
      </div>
      <div class="row">
        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter">
            何歳から入れますか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">何歳から入れますか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  3歳から15歳の方が入学可能です。無料体験や見学会も行なっておりますので
                  ぜひ、一度足を運んできて下さい。
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter1">
            どの様な授業が行われるのですか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">どの様な授業が行われるのですか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  五教科に加えて体育（スポーツ）、道徳がメインになります。
                  その他に、各種得意分野が先生によってあるので英語学習が得意な先生
                  には週に1日教えております。            </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter2">
            先生はどんな人たちですか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">先生はどんな人たちですか？？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  教員免許の持った方が勉強の指導を担当させていただいております。
                  その他、保育、ジムのインストラクターなど専門分野に特化した方々が多いです。                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 pt-3">
          <!-- Button trigger modal -->
          <div class="text-dark border p-3" data-toggle="modal" data-target="#exampleModalCenter4">
            いつでも入れますか？
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">いつでも入れますか？</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  入学の期間に関しては決まっておりません。いつでも入学可能になります。
                                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--実績-->
      <div id="card">
        <h2 class="text-center py-3">挨拶</h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="img/teacher3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">園長先生</h5>
              <p class="card-text">
                教育者、カウンセラー全ての指導者が全力を持って皆様一人一人と
                向き合ってサポートしていきたいと思っております。
                皆さんの入学をお待ちしております。              </p>
              <a href="#" class="btn btn-primary">詳しく</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="img/teacher2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">国語教師</h5>
              <p class="card-text">
                国語を学ぶことで文章読解力、物事の理解力、論理的思考力も
                育つ子を目指しております。
                楽しんで学習をすることのモットーに行なっています。
              </p>
              <a href="#" class="btn btn-primary">詳しく</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="card">
            <img src="img/teacher1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">体育教師</h5>
              <p class="card-text">
                体を動かすことの面白さ、そして教育においてもスポーツをみんなで
                行なっていくことで養われる教養を身につけてもらいたいと思っています。
               </p>
              <a href="#" class="btn btn-primary">詳しく</a>
            </div>
          </div>
        </div>
      </div>

      <!--よくある質問-->
      <div id="accordion">
        <h2 class="text-center py-3">その他のサービス</h2>
      </div>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                カウンセリングについて
              </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              カウンセラーが常に在籍しておりますので、どの様なご相談でもお気軽にどうぞ。            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                三者面談について
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              事前に相談内容をお知らせいただいてからご希望の日程を調整して
              お話をさせていただく事はできます。            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                出張サービスについて
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              現在のところ、関東県内のみの対応とさせていてだいておりますが、
              事業所のほうに来ることができない方などにお話を伺わせせていただきます。            </div>
          </div>
        </div>
      </div>

       <!--お問い合わせ-->
       <div id="accordion">
        <h2 class="text-center py-3">お問い合わせ</h2>
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
        <button class="btn btn-primary" type="submit">Submit form</button>
      </form>
      
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
    </div>
    <footer class="bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <div class="py-4">
              <h4 class="d-inline-block py-3 border-bottom border-info">Profile</h4>
            </div>
            <div class="mx-5">
              <img class="img-fluid rounded-circle" src="img/people.jpg" alt="">
            </div>
            <p>
              様々な家庭環境にお悩みがある方へのカウンセリング、学童教育サービスを提供しています。
              自立促進と生活の質の向上を目的とした、教養知識、基礎体力、社会学習、コミニュケーションをとったグループワークを行うことで、
              大人への成長も図ります。
              また、特別支援学校に通う子どもたちへのボランティア活動も行っています。
            </p>
          </div>
          <div class="col-md-4 col-12">
            <div class="py-4">
              <h4 class="d-inline-block py-3 border-bottom border-info">支援内容</h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="#">カウンセリング</a></li>
              <li class="list-group-item"><a href="#">三者面談</a></li>
              <li class="list-group-item"><a href="#">出張サービス</a></li>
              <li class="list-group-item"><a href="#k">一時預かり</a></li>
            </ul>
          </div>
          <div class="col-md-4 col-12">
            <div class="py-4">
              <h4 class="d-inline-block py-3 border-bottom border-info">Portfolio</h4>
            </div>
            <a class="twitter-timeline" data-lang="ja" data-height="500" href="＃">Tweets by kawamotosaport</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>          </div>
        </div>
      </div>
      <div class="bg-dark text-white text-center p-3">
        Copyright - river book, 2020 All Rights Reserved.
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>