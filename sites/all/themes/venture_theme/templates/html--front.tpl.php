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
<link rel="stylesheet" href="/sites/all/themes/venture_theme/css/front.css">
<style>
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
  
  $('.section7 h3').click(function(){
    $('.section7 form').css('width','450px').css("margin-top","150px").css("background-color","#f1f1f1");
    $('.section7 form .formdiv').show('slow');
    $('.section7 h3').removeClass('form-btn').css("background",'none').css("border-color", 'none');
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
 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43066377-2', 'auto');
  ga('send', 'pageview');

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
