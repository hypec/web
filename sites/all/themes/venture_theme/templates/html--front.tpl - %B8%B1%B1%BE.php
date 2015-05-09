<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php /*print $styles; */?>
<?php /*print $scripts;*/ ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'venture_theme') . '/js/html5.js'; ?>"></script><![endif]-->

<style>
.tabs-wrapper{ display:none;}
@font-face {
  font-family: "HelveticaNeueW02-UltLtE 739241";
  src: url("/sites/all/themes/Fonts/739241/3baafb02-7cc7-467e-bf5c-e714e93bdbbd.eot?#iefix");
  src: url("/sites/all/themes/Fonts/739241/3baafb02-7cc7-467e-bf5c-e714e93bdbbd.eot?#iefix") format("eot"), url("/sites/all/themes/Fonts/739241/3234d0c3-f18f-4427-92b3-eb13b26a701e.woff") format("woff"), url("/sites/all/themes/Fonts/739241/86fb4e23-7a3e-426f-8e84-3dd33ec66c7e.ttf") format("truetype"), url("/sites/all/themes/Fonts/739241/fd29cac4-e41f-4245-b0db-d2501bd53240.svg#fd29cac4-e41f-4245-b0db-d2501bd53240") format("svg");
}
@font-face {
  font-family: "HelveticaNeueW02-ThinEx 739247";
  src: url("/sites/all/themes/Fonts/739247/bc4cb275-c22a-4921-a48c-2c909fe53d60.eot?#iefix");
  src: url("/sites/all/themes/Fonts/739247/bc4cb275-c22a-4921-a48c-2c909fe53d60.eot?#iefix") format("eot"), url("/sites/all/themes/Fonts/739247/d5abdaf2-6392-4485-9aec-8ed66efc2884.woff") format("woff"), url("/sites/all/themes/Fonts/739247/28798551-f76b-4d3f-9cfa-70e9329a762c.ttf") format("truetype"), url("/sites/all/themes/Fonts/739247/ce595e9f-ed8f-4975-8af5-26e6685cc120.svg#ce595e9f-ed8f-4975-8af5-26e6685cc120") format("svg");
}
@font-face {
  font-family: "HelveticaNeueW02-BdExt";
  src: url("/sites/all/themes/Fonts/739271/852a14d9-aa7e-4222-b856-e8e8f5b00d8a.eot?#iefix");
  src: url("/sites/all/themes/Fonts/739271/852a14d9-aa7e-4222-b856-e8e8f5b00d8a.eot?#iefix") format("eot"), url("/sites/all/themes/Fonts/739271/56a53244-36b5-4359-b7da-f683600a21e7.woff") format("woff"), url("/sites/all/themes/Fonts/739271/459148c5-040c-4b87-9fdc-3822a5a16194.ttf") format("truetype"), url("/sites/all/themes/Fonts/739271/27fd311f-4e56-4637-9df3-838091597008.svg#27fd311f-4e56-4637-9df3-838091597008") format("svg");
}

</style>
<link rel="stylesheet" href="/jquery.fullPage.css">
<style>
.container{ width:100%;}
#main { padding:0px;}
.page-node #content-wrap img { border:none;margin:0px;padding:0px;max-width:100%;}

/* 右侧导航 */
#fullPage-nav { _display: none; font-size: 12px;}
#fullPage-nav li { width: 90px; height: 21px; margin: 10px 0 0; vertical-align: middle;}
#fullPage-nav li a { float: right; width: 21px; height: 21px; color: #8F9DA4; text-decoration: none; text-align: right; background: url(images/dot.png) 5px 5px no-repeat;}
#fullPage-nav li .active { background-position: 0 bottom;}
#fullPage-nav span { display: none;}
.fullPage-tooltip { float: left; top: 0; margin-right: 5px; font: 12px "Microsoft Yahei"; color: #8F9DA4; line-height: 21px;}

.section { position: relative; overflow: hidden;}
.section .bg { position: absolute; left: 0; top: 0; width: 100%; height: 100%;}
.section .bg img { display: block; width: 100%; height: 100%;}

.bg12 { position: absolute; bottom: -392px; width: 100%; height: 392px; background: url(images/bg12.png) 50% 0 no-repeat; opacity: 0; transition: all 1.7s; bottom: 90px\0;}
.p10 { position: absolute; margin:200px auto; width:100%;  font-weight: normal;text-align:center;  letter-spacing: 22px;font-size: 5em;margin-top:-100px; color: #fff; opacity: 0; transition: all 0.2s;font-family:"HelveticaNeueW02-UltLtE 739241";}
.p11 { position: absolute; width:100%; bottom:10%; text-align:center;  font-size: 1.5em; color: #fff; opacity: 0; transition: all 0.2s;font-family:"HelveticaNeueW02-ThinEx 739247"; letter-spacing:2px;}
.mail { position: absolute; left: 20%; top: -26px; width: 100px; height: 100px; margin-left: -187px; background-image: url(/logo.png); transition: all 1s;}

.mail { float: left; height: 100px; text-indent: -9999px;}
.mail-163 { float: left; width: 107px;}
.mail-126 { float: left;width: 108px; margin-left: 23px;}
.mail-yeah { float: right; width: 115px;}
.section strong{ line-height:2em; }
.section p a{ line-height:1em; }
.section p {  line-height: 2em; letter-spacing:3px;}
.bg21 { position: absolute; left: 50%; bottom: 15%; width: 819px; height: 250px; margin-left: -608px; margin-bottom: 40px; background: url(images/bg21.png) 0 0 no-repeat; transition: all 1s;  opacity: 0; margin-left: -1108px;}
.bg22 { position: absolute; left: 50%; bottom: 15%; width: 819px; height: 299px; margin-left: -280px; margin-bottom: 70px; background: url(images/bg22.png) right 0 no-repeat; transition: all 1s; opacity: 0; margin-left: 320px;}
.bg23 { position: absolute; left: 50%; bottom: 15%; width: 819px; height: 325px; margin-left: -409px; background: url(/imgs/IMGP0984.png) 50% 0 no-repeat; transition: all 1s;  bottom: -40%; border:10px solid #fff;}
.section strong { position: absolute; width:100%; top: 15%; z-index: 10; text-align:center;height: 45px;font-size: 4em;   font-weight: normal; color: #fff; opacity: 0; -webkit-transform:scale(0.5, 0.5); transform:scale(0.5, 0.5); transition: all 1s; letter-spacing: 15px; font-family: "HelveticaNeueW02-ThinEx 739247";}
.section2 strong{  color: #2B3540;}
.section3 strong{  color: #FFF577;}
.section4 strong{  color: rgb(0, 160, 233);}
.section5 strong{  color: rgb(255, 247, 153);}
.section6 strong{  color: #2B3540;}
.section7 strong{  color: rgb(255, 247, 153);}
.section h3 { position: absolute; left: 50%; top: 15%; z-index: 10; width: 512px; height: 45px; margin-left: -256px; margin-top: 60px; text-indent: -9999px; background-repeat: no-repeat; opacity: 0; -webkit-transform:scale(0.5, 0.5); transform:scale(0.5, 0.5); transition: all 1s;}
.p1 { position: absolute; left: 50%; top: 15%; width: 510px; margin-left: -255px; margin-top: 130px; font-size: 2em; color: grey; opacity: 0; transition: all 1s;}
.section4 .p1 { position: absolute; top: 15%; left:40%; width: 100%; margin-left: -255px; margin-top: 130px; font-size: 1.5em; color: grey; opacity: 0; transition: all 1s;font-family:"HelveticaNeueW02-ThinEx 739247"; letter-spacing:2px;}
.section2 .p1 { position: absolute; left: 38%; top: 5%; width: 70%; margin-left: -255px; margin-top: 30px; font-size: 1.5em; color: #fff; opacity: 0; transition: all 1s;font-family:"HelveticaNeueW02-ThinEx 739247"; letter-spacing:2px;}

.section2 h3 { background-image: url(images/t2.png);}
.section3 h3 { background-image: url(images/t3.png);}
.section4 h3 { background-image: url(images/t4.png); }
.section5 h3 { background-image: url(images/t5.png);}
.section6 strong { width:100%;text-align:center;}
.section6 h3 { width: 561px; margin-left: -280px; background-image: url(images/t6.png);}
.section7 strong { width:100%;text-align:center;}
.section7 h3 { width: 561px; margin-left: -280px; background-image: url(images/t7.png);}
.section8 strong { width: 561px; margin-left: -280px;}
.section8 h3 { width: 561px; margin-left: -280px; background-image: url(images/t8.png);}
.section9 strong { width: 609px; margin-left: -304px;}
.section9 h3 { width: 609px; margin-left: -304px; background-image: url(images/t9.png);}
.section9 h3 span { position: absolute; left: -100px; top: -48px; width: 89px; height: 90px; background-image: url(images/yixin.png);}

.bg31 { position: absolute; left: 50%; bottom: 0; width: 892px; height: 472px; margin-left: -396px; margin-bottom: 80px; background-image: url(images/bg31.png); opacity: 0; transition: all 1s;}
.bg32 { position: absolute; left: 50%; bottom: 0; width: 892px; height: 472px; margin-left: -396px; background: url(images/bg32.png) 470px bottom no-repeat; opacity: 0; transition: all 1s;}
.bg33 { position: absolute; left: 50%; bottom: 0; width: 441px; height: 380px; margin-left: 50%; background: url(images/bg33.png) 0 0 no-repeat; opacity: 0; transition: all 1s;}
.p3 { position: absolute; width: 530px; left: 50%; top: 0%; margin-top: 200px; margin-left: -100%; font-size: 1.5em; color: #FFFDE1; opacity: 0; transition: all 1s;font-family:"HelveticaNeueW02-ThinEx 739247"; letter-spacing:2px;}

.bg41 { position: absolute; bottom: -372px; width: 100%; height: 372px; background: url(images/bg41.png) 50% 0 no-repeat; transition: all 1s;}
.bg42 { position: absolute; bottom: -449px; width: 100%; height: 449px; background: url(images/bg42.png) 50% 0 no-repeat; transition: all 1s;}
.bg43 { position: absolute; bottom: -449px; width: 100%; height: 449px; margin-bottom: -130px; background: url(images/bg43.png) 50% 0 no-repeat; transition: all 1s;}

.bg51, .bg52, .bg53, .bg54 { position: absolute; z-index: 1; width: 208px; left: 50%; bottom: 10%; padding-top: 210px; color: #fff; height:100px;color:#fff;}
.bg51 p, .bg52 p, .bg53 p, .bg54 p {  color: #fff; font-family:"HelveticaNeueW02-ThinEx 739247"; }
.section5 h4 { margin-bottom: 12px; font-size: 23px; font-weight: 500;}
.section5 p { font-size: 14px;}
.bg51 { margin-left: -851px; background: url(images/bg51.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg52 { margin-left: -403px; background: url(images/bg52.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg53 { margin-left: 195px; background: url(images/bg53.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg54 { margin-left: 645px; background: url(images/bg54.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}

.bg61 { position: absolute; top: -454px; width: 100%; height: 545px; background: url(images/bg61.png) 50% 0 no-repeat; transition: all 1s;}
.bg62 { position: absolute; left: 10%; bottom: 15%; width: 500px; height: 284px; margin-left: -507px; background-image: url(/imgs/bg3.jpg); transition: all 1s;border:10px solid #fff;}
.txt6 { position: absolute; left: 90%; bottom: 25%; width: 447px; margin-left: 90px; opacity: 0; transition: all 1s;}
.txt6 p { margin-bottom: 17px; color: #5C7970; font-size:1.5em;font-family:"HelveticaNeueW02-ThinEx 739247"; letter-spacing:2px;}

.bg71 { position: absolute; left: 50%; bottom: -201px; width: 699px; height: 201px; margin-left: -630px; background: url(images/bg71.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg72 { position: absolute; left: 50%; bottom: -206px; width: 182px; height: 206px; margin-left: -170px; background: url(images/bg72.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg73 { position: absolute; left: 50%; bottom: 150px; width: 451px; height: 231px; margin-left: -530px; /*background: url(images/bg73.png) 50% 0 no-repeat;*/}
/*
.bg74 { position: absolute; left: 0; bottom: 0; width: 100%; height: 100%;}
.bg74 img { position: absolute; left: 0; bottom: 0; width: 100%; height: 251px;}
*/
.txt7 { position: absolute; left: 50%; bottom: 20px; width: 500px; margin-left: 100px; opacity: 0; transition: all 1s;}

.txt7 p { margin-bottom: 17px; color: #EAEFF2; font-size:1.5em;font-family:"HelveticaNeueW02-ThinEx 739247"; }

.bg81 { position: absolute; width: 100%; bottom: 100px; height: 215px; background: url(images/bg81.png) 50% 0 no-repeat;}
.bg82 { position: absolute; left: 50%; bottom: 160px; width: 164px; height: 117px; margin-left: -180px; background-image: url(images/bg82.png); opacity: 0; transition: all 1s;}
.bg83 { position: absolute; left: 50%; bottom: 280px; width: 70px; height: 29px; margin-left: -330px; background-image: url(images/bg83.png); opacity: 0; transition: all 1s;}
.bg84 { position: absolute; left: 50%; bottom: 320px; width: 43px; height: 26px; margin-left: -410px; background-image: url(images/bg84.png); opacity: 0; transition: all 1s;}
.p8 { position: absolute; left: 50%; top: 15%; width: 565px; margin-left: -282px; margin-top: 130px; font-size: 16px; color: #727F8C; opacity: 0; transition: all 1s;}

.bg91, .bg92, .bg93 { padding-top: 350px; font-size: 16px; color: #fff;}
.bg91 { position: absolute; left: 50%; bottom: 15%; width: 340px; margin-left: -970px; background: url(images/bg91.png) 0 0 no-repeat; opacity: 0; transition: all 1s;}
.bg91 p { position: relative; left: 20px; margin-left: 40px; border-right: 1px solid #13AB86;}
.bg92 { position: absolute; left: 50%; bottom: 15%; width: 340px; margin-left: -180px; background: url(images/bg92.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg92 p { position: relative; left: 40px; margin-left: 30px;}
.bg93 { position: absolute; left: 50%; bottom: 15%; width: 340px; margin-left: 630px; background: url(images/bg93.png) 50% 0 no-repeat; opacity: 0; transition: all 1s;}
.bg93 p { position: relative; left: -20px; padding-left: 100px; border-left: 1px solid #13AB86;}

.bg101 { position: absolute; width: 100%; height: 100%; background: url(images/bg101.png) 50% 20% no-repeat;}
.bg102 { position: absolute; width: 100%; top: 25%; height: 79px; background: url(images/bg102.png) 50% 0 no-repeat; opacity: 0; -webkit-transform:scale(0.5, 0.5); transform:scale(0.5, 0.5); transition: all 1s;}
.bg103 { position: absolute; width: 100%; top: 25%; height: 37px; margin-top: 110px; background: url(images/bg103.png) 50% 0 no-repeat; opacity: 0; -webkit-transform:scale(0.5, 0.5); transform:scale(0.5, 0.5); transition: all 1s;}
.go { position: absolute; left: 50%; top: 55%; width: 254px; height: 70px; margin-top: 220px; margin-left: -127px; text-indent: -9999px; background-image: url(images/btn.png); opacity: 0; transition: all 1s;}

.copyright { position: absolute; left: 0; bottom: 20px; width: 100%; text-align: center; font-size: 0;}
.copyright a, .copyright span { margin: 0 7px; font-size: 12px; color: #a0a0a0;}

/* CSS3过度及动画 */
.active strong, .active h3 { opacity: 1; -webkit-transform:scale(1, 1); transform:scale(1, 1); transition-delay: 0.7s;}
.active .p1 { opacity: 1; transition-delay: 1.7s;}

.active .bg12 { bottom: 90px; opacity: 1; transition-delay: 0.7s; }
.active .bg13 { bottom: 0; opacity: 1; transition-delay: 0.7s;}
.active .mail { top: 25px; transition-delay: 0.7s;}
.active .p10 { opacity: 1; margin-top:250px;transition-duration: 1s; transition-delay: 0.2s;letter-spacing: 22px;}
.active .p11 { opacity: 1; transition-duration: 1s; transition-delay: 1s;}

.active .bg21 { opacity: 1; margin-left: -608px; transition-delay: 0.7s;}
.active .bg22 { margin-left: -280px; opacity: 1; transition-delay: 0.7s;}
.active .bg23 { bottom: 10%; transition-delay: 0.7s;}

.active .p3 { margin-left: -480px; opacity: 1; transition-delay: 0.7s;}
.active .bg31, .active .bg32 { opacity: 1; transition-delay: 1s;}
.active .bg33 { margin-left: -120px; opacity: 1; transition-delay: 0.7s;}

.active .bg41 { bottom: 15%; transition-delay: 0.7s;}
.active .bg42 { bottom: 15%; transition-delay: 1.1s;}
.active .bg43 { bottom: 15%; transition-delay: 0.9s;}

.active .bg51 { margin-left: -551px; opacity: 1; transition-delay: 0.7s;}
.active .bg52 { margin-left: -253px; opacity: 1; transition-delay: 0.7s;}
.active .bg53 { margin-left: 45px; opacity: 1; transition-delay: 0.7s;}
.active .bg54 { margin-left: 345px; opacity: 1; transition-delay: 0.7s;}

.active .bg61 { top: 0; transition-delay: 0.7s;}
.active .bg62 { left: 50%; opacity: 1; transition-delay: 0.7s;}
.active .txt6 { left: 50%; opacity: 1; transition-delay: 0.7s;}

.active .bg71 { bottom: 250px; opacity: 1; transition-delay: 0.7s;}
.active .bg72 { bottom: 350px; opacity: 1; transition-delay: 0.9s;}
.active .txt7 { bottom: 80px; opacity: 1; transition-delay: 1.1s;}

.active .bg82 { bottom: 260px; margin-left: -280px; opacity: 1; transition-delay: 0.7s;}
.active .bg83 { bottom: 380px; margin-left: -430px; opacity: 1; transition-delay: 1s;}
.active .bg84 { bottom: 420px; margin-left: -510px; opacity: 1; transition-delay: 1.2s;}
.active .p8 { opacity: 1; transition-delay: 1.7s;}

.active .bg91 { margin-left: -570px; opacity: 1; transition-delay: 0.7s;}
.active .bg92 { opacity: 1; transition-delay: 0.8s;}
.active .bg93 { margin-left: 230px; opacity: 1; transition-delay: 0.7s;}

.active .bg102, .active .bg103 { opacity: 1; -webkit-transform:scale(1, 1); transform:scale(1, 1); transition-delay: 0.7s;}
.active .go { top: 25%; opacity: 1; transition-delay: 1.2s;}

/* for lt ie 10 */
.ltie10 strong, .ltie10 h3 { opacity: 1; transform:scale(1, 1); transition-delay: 0.7s;}
.ltie10 .p1 { opacity: 1; transition-delay: 1.7s;}

.ltie10 .bg12 { bottom: 90px; opacity: 1; transition-delay: 0.7s; }
.ltie10 .bg13 { bottom: 0; opacity: 1; transition-delay: 0.7s;}
.ltie10 .hgroup { opacity: 1; transform:scale(1, 1); transition-delay: 0.7s;}
.ltie10 .mail { top: 25px; transition-delay: 0.7s;}
.ltie10 .p11 { opacity: 1; transition-duration: 1s; transition-delay: 2s;}

.ltie10 .bg21 { opacity: 1; margin-left: -608px; transition-delay: 0.7s;}
.ltie10 .bg23 { bottom: 15%; transition-delay: 0.7s;}
.ltie10 .bg22 { margin-left: -280px; opacity: 1; transition-delay: 0.7s;}

.ltie10 .p3 { margin-left: -480px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg31, .ltie10 .bg32 { opacity: 1; transition-delay: 1s;}
.ltie10 .bg33 { margin-left: -120px; opacity: 1; transition-delay: 0.7s;}

.ltie10 .bg41 { bottom: 15%; transition-delay: 0.7s;}
.ltie10 .bg42 { bottom: 15%; transition-delay: 1.1s;}
.ltie10 .bg43 { bottom: 15%; transition-delay: 0.9s;}

.ltie10 .bg51 { margin-left: -551px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg52 { margin-left: -253px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg53 { margin-left: 45px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg54 { margin-left: 345px; opacity: 1; transition-delay: 0.7s;}

.ltie10 .bg61 { top: 0; transition-delay: 0.7s;}
.ltie10 .bg62 { left: 50%; opacity: 1; transition-delay: 0.7s;}
.ltie10 .txt6 { left: 50%; opacity: 1; transition-delay: 0.7s;}

.ltie10 .bg71 { bottom: 250px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg72 { bottom: 350px; opacity: 1; transition-delay: 0.9s;}
.ltie10 .txt7 { bottom: 420px; opacity: 1; transition-delay: 1.1s;}

.ltie10 .bg82 { bottom: 260px; margin-left: -280px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg83 { bottom: 380px; margin-left: -430px; opacity: 1; transition-delay: 1s;}
.ltie10 .bg84 { bottom: 420px; margin-left: -510px; opacity: 1; transition-delay: 1.2s;}
.ltie10 .p8 { opacity: 1; transition-delay: 1.7s;}

.ltie10 .bg91 { margin-left: -570px; opacity: 1; transition-delay: 0.7s;}
.ltie10 .bg92 { opacity: 1; transition-delay: 0.8s;}
.ltie10 .bg93 { margin-left: 230px; opacity: 1; transition-delay: 0.7s;}

.ltie10 .bg102, .ltie10 .bg103 { opacity: 1; transform:scale(1, 1); transition-delay: 0.7s;}
.ltie10 .go { top: 25%; opacity: 1; transform:scale(1, 1); transition-delay: 1.2s;}



.form-control {
  display: block;
  width: 100%;
  height: 30px;
  margin-top:10px;
  padding: 5px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
  -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
.form-btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: 400;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;

  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}

#homemenu-trigger:-webkit-any-link {
  text-decoration: blink;
}
.pagebtnlink{

  float: left;
  margin-top: 35px;
  background: #31c68b;
  font-size: 1.25em;
  color: #fff;
  font-family: "HelveticaNeueW02-ThinEx 739247";
  webkit-border-radius: 300px;
  border-radius: 300px;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 600;
  font-style: normal;
  text-decoration: none;
  padding: 1em 1.75em;
  background-color: #36b3a8;
}
#homemenu-trigger {
	width: 100px;
	/* height: 100px; */
	position: fixed;
	right: 50px;
	top: 30px;
	z-index: 999999;
	padding: 8px 15px;
	border: 2px solid #fff;
	color: #fff;
	-moz-border-radius: 50px;      /* Gecko browsers */
	-webkit-border-radius: 50px;   /* Webkit browsers */
	border-radius:50px;            /* W3C syntax */
	font-family:"HelveticaNeueW02-UltLtE 739241";
	text-align:center;
	text-decoration: blink;
	  letter-spacing: 2px;
}

#home-leftmenu {
	font-family: 'Helvetica Neue', Helvetica, Arial;
  position: absolute;
  position: fixed;
  top: 0;
  height: 100%;
  z-index: 999999;
  width: 320px;
  overflow-x: none;
  overflow-y: auto;
  font-size: 13px;
  background: #222;
  color: #fff;
}
#sidr-main {
	margin:30px 30px 30px 15px;
}
#sidr-close img{
	width:24px;
	margin-left:12px;
	margin-top:5px;
}
#sidr-main a {
  color: #707070;
}
#sidr-main ul li {
	
	font-size:1.2em;
}
#sidr-main ul a {
	display: block;
	border-bottom: 1px solid #333;
	padding: 10px 0;
	font-weight: 400;
    text-decoration: blink;
}
#sidr-main ul a:hover {
	color:#fff;
}

/******* 首页响应式 *******/
@media screen and (max-width: 1024px) {
	.p10 { font-size:2em; letter-spacing:5px;}
	.active .p10 { font-size:2em; letter-spacing:5px;}
	.p11{ bottom:10%; font-size:1em;}
	
	.section strong{
		font-size:2em;letter-spacing:5px;
	}
	.bg33{ display:none;  background:none;}
	.p3{
		margin-left:10px;
		font-size:1em;
		width: 80%;
	}
	.active .p3{
		margin-left: 20px;
		left: 5%;
		width: 80%;
		font-size:1em;
	}
	
	.bg21,.bg22,.bg23{ display:none; background:none;}
	.section2 .p1{
		left:5%;
		width:90%;
		margin-left:10px;
		top:30%;
		color:grey;
	}
	.bg41, .bg42, .bg43 {
		display:none;  background:none;
	}
	.section4 .p1{
		width:80%;
		left:5%;
		margin-left:10px;
		
		font-size:1.2em;
	}
	.bg51{	top:3%;}
	.bg52{	top:15%;}
	.bg53{	top:32%;}
	.bg54{	top:45%;}
	.section5 .bg51 p{ font-size:1em;}
	.section5 .bg52 p{ font-size:1em;}
	.section5 .bg53 p{ font-size:1em;}
	.section5 .bg54 p{ font-size:1em;}
	.bg51, .bg52, .bg53, .bg54 {
		clear:both;
		width:80%;
		margin-left:0px;
		left:8%;
		background:none;
	}
	.active .bg51, .active .bg52, .active .bg53, .active .bg54{
		margin-left:0px;
	}
	.bg62{
		display:none; background:none;
	}
	.txt6{
		left:5%;
		width:80%;
		margin-left:0px;
	}
	.active .txt6{
		left:5%;
	}
	.bg71{ display:none; background:none;}
	.bg73{
		display:none; background:none;
		width:80%;
		top:25%;
		left:7%;
		margin-left:0px;
	}
	.active .txt7{
		bottom:2%;
	}
	.txt7 {
		width:80%;
		font-size:1em;
		margin-left:0px;
		left:10%;
		top:30%;
	}
	#fullPage-nav{
		display:none; background:none;
	}
}
</style>
<script src="/jquery.min.js"></script>
<script src="/jquery-ui.min.js"></script>
<script src="/jquery.fullPage.min.js"></script>
<script>
$(function(){
	if($.browser.msie && $.browser.version < 10){
		$('body').addClass('ltie10');
	}
	$.fn.fullpage({
		verticalCentered: false,
		anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7'],
		navigation: true,
		navigationTooltips: ['COMMITTED', 'COMPANY PROFILE', 'CORPORATE CULTRE', 'DESIGN CAPACITY', 'PROCUREMENT CAPACITY', 'PROJECT PERFORMANCE', 'SOCIAL RESPONSIBIILITY']
	});
});


function homeleftmenu(){
	if($('#home-leftmenu').is(':visible')){
		$('body').css("left", "0px").css("position","absolute").css('width', '100%');
		$('#home-leftmenu').hide();
	}else{
		$('body').css("left", "320px").css("position","absolute").css('width', '100%');
		$('#home-leftmenu').show().css("left", '0px');
	}
}

function closehomemenu(){
	$('body').css("left", "0px").css("position","absolute").css('width', '100%');
	$('#home-leftmenu').hide();
}
function contactusform(){
	var username = $('#username').val();
	var useremail = $('#useremail').val();
	var userbody = $('#userbody').val();
	//alert(userbody);
	
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (filter.test(useremail)){
		$.post(
			'/api/sendmail.php',
			{
				"key":"<?php echo md5("FS".date("Y-m-d H"));?>",
				"username":username,
				"useremail":useremail,
				"content":userbody
			},
			function(data){
				
				alert("Send Successful");
				$('#username').val('');
				$('#useremail').val('');
				$('#userbody').val('');
			}
		);
	}else{
		alert("Please input correct email!");
	}
}
</script>

</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>

	
  <?php print $page_top; ?>
  <!-- start left menu -->
	<a href="javascript:;" class="icon-menu link-menu jsc-sidebar-trigger" id="homemenu-trigger" onclick="homeleftmenu();">Menu</a> 
	<div id="home-leftmenu" style="display:none;">
		<div id="sidr-main">
			<div id="sidr-close" onclick="closehomemenu();" style="cursor:pointer;"><img src="/imgs/close.png" /></div>
			<div id="site-navigation-wrap">
				<nav id="site-navigation" class="navigation main-navigation clr" role="navigation">
					<div id="main-menu" class="menu-main-container">
					<?php 
						$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
						print drupal_render($main_menu_tree);
					?>
					</div>
				</nav>
			</div>
		</div>
	</div> 
	<!-- left menu -->
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
