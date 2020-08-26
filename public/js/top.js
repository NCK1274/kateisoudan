// ハンバーガーメニューの実装

   $(function() {
      const hum = $('#hamburger, .close')
      const nav = $('.sp-nav')
      hum.on('click', function(){
         nav.toggleClass('toggle');
      });
   });

// Vegas
// 画面全体表示 
    $(function() {
    $('#vegas,.top').vegas({
        slides: [
            { src: '/img/vegas1.jpg' },
            { src: '/img/vegas2.jpg' },
            { src: '/img/vegas3.jpg' }
        ],
        overlay: './js/overlays/02.png', //フォルダ『overlays』の中からオーバーレイのパターン画像を選択
        transition: 'fade2', //スライドを遷移させる際のアニメーション
        transitionDuration: 4000, //スライドの遷移アニメーションの時間
        delay: 7000, //スライド切り替え時の遅延時間
        animation: 'kenburnsUp', //スライド表示中のアニメーション
        animationDuration: 20000, //スライド表示中のアニメーションの時間
        });
    });

// Vegas
// humanスライド部分の実装
    $(function() {
    $('#vegas,#men').vegas({
    delay: 7000,
    timer: false,
    shuffle: true,
    firstTransition: 'fade',
    firstTransitionDuration: 5000,
    transition: 'slideDown2',
    transitionDuration: 2000,
    slides: [
        { src: '/img/teacher1.jpg' },
        { src: '/img/teacher2.jpg' },
        { src: '/img/teacher3.jpg' }
    ]
    })
  });



        
       