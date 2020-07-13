<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>KateiSoudanSitsu</title>
	<!--stylesheet cssリンク-->
	 <link rel="stylesheet" href="{{asset('/css/style.css')}}">

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
	<div class="header">
		<h1 class ="header__logo">
				<img src="{{asset('/img/KSS.png')}}" alt="家庭相談室" title="家庭相談室">
		</h1>
		<nav class="menu">
			<ul class="header__nav">
				<li class="header__nav__txt"> <a href="">事業所一覧</a></li>
				<li class="header__nav__txt"> <a href="">新規登録フォーム</a></li>
				<li class="header__nav__txt"> <a href="">ログイン</a></li>
			</ul>
		</nav>
	</div>

	<!--メイン画面-->
	<script>
		
		$(".vegas, body").vegas({
		    slides: [
		        { src: "/img/top1.png" },
		        { src: "/img/top2.png" },
		        { src: "/img/top3.png" }
		    ],
		    animation: [ 'kenburnsUp', 'kenburnsDown', 'kenburnsLeft', 'kenburnsRight' ]
		});

	</script>
	
	<section class="main">
		<div class="main__top">
		    <h2 class="box__title">
		        WEBDESIGNDAY<br>
		        MORE GOOD DESIGN<br>
				MORE INSPIRATION<br>
			    MORE AND MORE
			   <span class="vegas"></span>    
			</h2>                     
		</div><!--box-->
		<div class="main__inner">
			<ul>
				<li class="main-inner__top">
					<span>事業所を探す</span>
				<a href="#" class="main-inner__bottom">
					事業所一覧
				</a>
				</li>
			</ul>	
		</div>
		<p class="mainfoot">"(※)現在、テスト運営中になります。"</p>
	</section>

	<!--ナビゲーション部分の実装-->
	<section class="nav">
		<div class="nav-menu">
			<ul>
				<li><a href="#"><span>事業案内</span></a></li>
				<li><a href="#"><span>相談内容</span></a></li>
				<li><a href="#"><span>サービス利用方法</span></a></li>
				<li><a href="#"><span>事業所一覧</span></a></li>
				<li><a href="#"><span>お問い合わせ</span></a></li>
			</ul>
		</div>
	</section>

	<!--事業案内-->
	<section class="information" id="information">
		<div class="info-img">
			<img class="kss" src="/image/kss2.png"alt="kssのロゴ" />
			<p>
				"コメントコメントコメント"
				<br />
				"コメントコメントコメント"
				<br>
				"コメントコメントコメント"
			</p>
			<a hrf="about/" class="info-btn">
				::defore
				"KSSについてもっと詳しく"
			</a>
		</div>
	</section>
	<!--相談内容-->
	<section class="consutation" id="consutation">
		<div class="consutation-img">
			<img src="image/content.png" alt="相談内容" title="相談内容">
		</div>
		<div class="consutation-txt">	
			<h2 class="consutation-txt__top">
				"コメントコメントコメント"
				<br>
				"コメントコメントコメント"
			</h2>
			<p>
				"コメントコメントコメントコメント"
				<br class="consutation-txt__foot">
				"コメントコメントコメント
				<br class="consutation-txt__foo">
				"コメントコメントコメント"
				<br>
			</p>	
		</div>
	</section>
	<!--サービス利用方法-->
	<section class="service" id="service">
		<div class="service-body">
			<div class="service-body__img">
				<figure>
					<img src="image/service1.png" alt="サービス利用方法">
				</figure>
			</div>
			<div class="service-body__img">
				<figure>
					<img src="image/service4.png" alt="サービス利用方法">
				</figure>
			</div>
			<div class="service-body__img">
				<figure>
					<img src="image/service2.png" alt="サービス利用方法">
				</figure>
			</div>
			<div class="service-body__img">
				<figure>
					<img src="image/service4.png" alt="サービス利用方法">
				</figure>
			</div>
			<div class="service-body__img">
				<figure>
					<img src="image/service3.png" alt="サービス利用方法">
				</figure>
			</div>
		</div>	
	</section>

	<!--システムの流れ-->
	<section class="system" id="system">
		<div class="system-img">
			<img src="image/system1.png" alt="システムの流れ">
		</div>
	</section>
	
	<!--事業所の紹介-->
	<section class="office" id="office">
		<div class="office-img">
			<img src="image/.png" alt="事業所の紹介">
		</div>
	</section>

	<!--事業者エントリーフォーム-->
	<section class="entry" id="entry">
		<div class="entry-box">
			<p>支援を支援をしてくださる企業の皆様へ</p>
			<figure>
				<img alt="事業者の写真" src="img/kssのロゴ">
			</figure>
			<a class="entry-box__btn" href="/users/sign_in">
				::before
				"事業者エントリー"
			</a>
		</div>
	</section>

	<!--メイン画面終了-->

	<!--フッターお問合せ -->
	<div class="footer">
		<div class="footer-log">
			<span class="footer-log__font">事業所マッチングサービス</span>
			<br>
			<a href="/">
				<img alt="kssのロゴ" src="image/kss.png">
			</a>
		</div>	
		<div class="footer-nav">
			<ul>
				<li><a href=" ">会社概要</a></li>
				<li><a href=" ">利用規約</a></li>
				<li><a href=" ">プライバシーポリシー</a></li>	
				<li><a href=" ">お問合せ</a></li>
			</ul>
		</div>	
	<!--top画面に戻る-->	
		<div class="footer_btn">
			<iframe src=" ">
				
			</iframe>
			<script async=" ">
				
			</script>
		</div>
		<a href="#" id="pagetop" style="display: block;">pagettop</a>
	</div>
	<small class="copyright">
		<p>(C) 2020 Katei Soudan Sitsu All Rights Reserved.</p>
	</small>

</body>
</html>