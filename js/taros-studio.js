//ハンバーガーメニュー
    $(function() {
        $(document).ready(function(){
            $("#sp_navi_btn").click(function(){
                $(this).next().slideToggle();
            });
        });
    });
    
    

//TOPページ WORKSカルーセル
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        autoplay:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
});
});

// Link Page top
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    }
  });
});


//Works
$(function(){
	// Instantiate MixItUp:
	$('#container').mixItUp();
});



//lightbox
$(document).ready(function() {
	$('[data-fancybox]').fancybox();
});


//スクロール
$(window).scroll(function (){
	$(".animation").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('active'); //クラス「active」を与える
	  }
	});
});

//wow
$(document).ready(function() {
	new WOW().init();
});