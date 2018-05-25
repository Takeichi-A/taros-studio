<?php
    //値が取れてるかの確認
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // exit;
    
    
    //悪意のあるコードの無害化
    function h($str) {
        return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');    
    }
    //日本語化
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    //送信先
    $to = 'info@taros-studio.com';
    //メールの件名
    $subject = h($_POST["subject"]);
    //入力内容を全て結合したメールの内容
    $message = "お名前:" . h($POST_["name"])
            . "\nふりがな :" . h($_POST["furigana"])
            . "\n貴社名 :" . h($_POST["company"])
            . "\nE-mail :" . h($_POST["email"])
            . "\nご住所 :" . h($_POST["address"])
            . "\nお電話番号 :" . h($_POST["tel"])
            . "\n件名 :" . h($_POST["subject"])
            . "\nお問い合わせ内容 :" . h($_POST["body"]);
    //送信元
    $header = "From: " . h($_POST["email"]);
?>
    
<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>Taros-Studio|映像、キャラクター、ロゴ、パンフレット、マンガ広告、Webサイト制作</title>
        <meta name="description" content="映像、キャラクター、ロゴ、パンフレット、リーフレット、マンガ広告、Webサイト制作のTaros-Studio。個人事業主様を中心に広報物制作をトータルにサポートします。動画ならプロモーション動画制作から講座撮影まで行います。各種デザインは様々な目的に合わせて制作いたします。" >
        <meta name="keywords" content="サービズ、映像制作,パンフレット,キャラクターデザイン,マンガ,web,プロモーション,講座撮影,名古屋,愛知県,東海,taro,studio,tarosstudio,taros-studio,たろずすたじお" >
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link  href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" >
        <link rel="icon" type="image/png" href="images/favicon.png" >
        <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css" >
        <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css" >
        <link rel="stylesheet" type="text/css" href="lightbox/jquery.fancybox.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="owlcarousel/owl.carousel.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
        <script src="mixup/mixitup.min.js"></script>
        <script src="lightbox/jquery.fancybox.min.js"></script>
        <script src="js/wow.min.js" ></script>
        <script src="js/taros-studio.js"></script>


    </head>
    
    <body>
        <div id="bg">
            <video src="images/top/bg.mp4" poster="images/top/bg.png" autoplay loop></video>
            <img src="images/top_sp/bg_sp.png" alt="" srcset="images/top_sp/bg_sp@2x.png 2x"/>
        </div>
<!-- header -->        
        <header>
            <div id="head_in">
                <div class="head_logo">
                    <h1><a href="index.html"><img src="images/top_sp/logo.png" alt="Taros-Studio" srcset="images/top_sp/logo@2x.png 2x" /></a></h1>
                </div>
                <div class="navi">
   <!-- sp_navi --><div class="sp_navi">
                       <div id="sp_navi_btn" class="hamburger hamburger--spring">
                          <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                          </div>
                       </div>
                       <ul class="sp_navi_li">
                            <li><a href="index.html" class="uppercase">home</a></li>
                            <li><a href="service.html" class="uppercase">service</a></li>
                            <ul>
                                <li><a href="movie.html" class="sublist">Movie</a></li>
                                <li><a href="pamph.html" class="sublist">Pamphlet&frasl;Leaflet</a></li>
                                <li><a href="chara.html" class="sublist">Character&frasl;Logo</a></li>
                                <li><a href="mannga.html" class="sublist">Mannga</a></li>
                                <li><a href="web.html" class="sublist">Web&nbsp;Design</a></li>
                                <li><a href="others.html" class="sublist">Others</a></li>
                            </ul>
                        <!--   <li><a href="flow.html" class="uppercase">flow</a></li> -->
                            <li><a href="works.html" class="uppercase">works</a></li>
                            <li><a href="contact.html" class="uppercase">contact</a></li>
                        </ul>
                   </div>
  
  
        </header>
        

<!-- main_img -->
        <div id="ct_main_img">
                <div class="main_title">
                    <p class="main_text uppercase">contact</p>
                </div>
        </div>


<!-- content -->
    
    <div class="echo">
        <?php
        //メールの送信
         if(mb_send_mail($to, $subject, $message, $header)){
            echo "メールが送信されました。<br />";
            echo "お問い合わせありがとうございます。１週間以内にご返信させていただきます。<br />";
            echo "１週間経っても返信がない場合はお手数ですが再度ご連絡をお願いいたします。";
        } else {
            echo "メールの送信に失敗しました。<br />";
            echo " 誠に申し訳ございませんが、再度お問い合わせをお願いいたします。";
        };
        ?>

    </div>
    <div id="pagetop">
        <a href="#head_in"><img src="images/top_sp/pagetop.png" alt="" srcset="images/top_sp/pagetop@2x.png 2x" /></a>
    </div>

<!-- footer -->
    <footer>
     <div id="footer_container">
         <a href="index.html"><img src="images/top_sp/logo_footer.png" alt="Taros-Studio" srcset="images/top_sp/logo_footer@2x.png 2x" /></a>
         <p><a href="https://ja-jp.facebook.com/taros.studio/" class="facebook">f</a></p>
             <ul>
                <li><a href="index.html" class="uppercase">home</a></li>
                <li><a href="service.html" class="uppercase">service</a></li>
            <!--   <li><a href="flow.html" class="uppercase">flow</a></li> -->
                <li><a href="works.html" class="uppercase">works</a></li>
                <li><a href="contact.html" class="uppercase">contact</a></li>
             </ul>
         <p class="policy"><a href="policy.html">個人情報の取り扱いについて</a></p>
         <p class="copy">copyright (c) Taros-Studio all rights reserved.</p>
     </div>   
    </footer>


    </body>
</html>