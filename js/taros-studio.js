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





//Humburgers
$(document).ready(function() {
    var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
     
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
});

//pagetop
//pagetop
$(document).ready(function() {
  var pagetop = $('#pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 300) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});