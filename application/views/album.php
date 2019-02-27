<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh_cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sc.chinaz.com</title>
<meta name="keywords" content="ancient, gallery, 站长素材, CSS, HTML" />
<meta name="description" content="Ancient Photo Gallery - free HTML CSS template from templatemo.com" />
<link href="/style/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

</head>
<body>

<div id="templatemo_wrapper">

	<span class="bg_top"></span>
    <span class="bg_bottom"></span>

	<div id="templatemo_menu">
        <ul>
        <li v-for="item in list"><a :href="item.url" class="current">{{ item.name }}</a></li>
        </ul>
	</div> <!-- end of menu -->

    <div id="templatemo_header">
		<div id="site_title"><h1><a href="http://sc.chinaz.com/">站长素材</a></h1></div>
        <div id="social">
        	<a href="#"><img src="/images/templatemo_icon_01.png" alt="twitter" /></a>
            <a href="#"><img src="/images/templatemo_icon_02.png" alt="RSS" /></a>
            <a href="#"><img src="/images/templatemo_icon_03.png" alt="contact" /></a>
		</div>
	</div> <!-- end of header -->

    <div id="templatemo_main">


        <div id="sidebar">

        	<div id="nne">

	        	<h3>News &amp; Events</h3>
                <ul class="nne_box">
                	<li><span>16 March 2048</span><a href="#">Ut enim ad minim veniamquis nostru itation ullamco laboris nisi.</a></li>
                    <li><span>14 March 2048</span><a href="#">Dunt in culpa qui officia deserunt mol satst gislets  ste otedform.</a></li>
                    <li><span>22 February 2048</span><a href="#">Mourt sculpa qui officia deserunt fure satst gisletsser tellerast.</a></li>
                    <li><span>18 February 2048</span><a href="#">Admirest ad minim veniamquis nostru itation ullamco laboris nisi.</a></li>
                </ul>

			</div>

            <div id="member_login">

            	<h3>Member Login</h3>

            	<form action="#" method="post">

                 	<label>Username</label><input name="username" type="text" class="txt_field" id="name" title="name" value="" size="10" maxlength="30" />
                	<div class="cleaner h10"></div>
					<label>Password</label><input name="password" type="password" class="txt_field" id="password" title="password" value="" size="10" maxlength="30" />
<div class="cleaner h10"></div>
					<input type="submit" name="login" value="" alt="login" id="login" title="Search" class="sub_btn"  />

                    <div><a href="#">register</a></div>

                </form>

            </div>

        </div>

        <div id="content">

             <div class="cbox_last">
            	<h3>Our Photo Gallery</h3>
                <ul class="photo_gallery">
                	<li><a href="#"><img src="/images/templatemo_image_01.jpg" alt="Image 1" class="image_frame" /></a></li>
                    <li><a href="#"><img src="/images/templatemo_image_02.jpg" alt="Image 2" class="image_frame" /></a></li>
                    <li class="rmp"><a href="#"><img src="/images/templatemo_image_03.jpg" alt="Image 3" class="image_frame" /></a></li>

                    <li><a href="#"><img src="/images/templatemo_image_03.jpg" alt="Image 10" class="image_frame" /></a></li>
                    <li><a href="#"><img src="/images/templatemo_image_01.jpg" alt="Image 20" class="image_frame" /></a></li>
                    <li class="rmp"><a href="#"><img src="/images/templatemo_image_02.jpg" alt="Image 30" class="image_frame" /></a></li>
                </ul>
            </div>

            <div class="cleaner h30"></div>

        	<div class="cbox_fws">
                <h3>Excepteur occaecat cupid duis</h3>
                <div class="cbox_w280 float_l"> <a href="#"><img src="/images/templatemo_image_06.jpg" alt="image" class="image_frame" /></a>
                  <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Excepteur sint occaecat cupidatat non proi ent.</p>
                    <a href="#" class="more float_r"><span>&gt;&gt;</span> Details</a>
                    <div class="cleaner"></div>
              </div>
                <div class="cbox_w280 float_r"> <a href="#"><img src="/images/templatemo_image_04.jpg" alt="image" class="image_frame" /></a>
                  <p>Duis ac tellus et risus vulputate vehicnec lobortis risus a elit. Etiam tempor. Utllan corper ligula.</p>
                    <a href="#" class="more float_r"><span>&gt;&gt;</span> Details</a>
                    <div class="cleaner"></div>
              </div>
                <div class="cleaner"></div>
                <div class="cbox_w280 float_l"> <a href="#"><img src="/images/templatemo_image_05.jpg" alt="image" class="image_frame" /></a>
                  <p>Marst str sint occaecat cupidatat non prod ent, sunt in culpa qui officia deserunt mol satst gislets  ste otedform.</p>
                    <a href="#" class="more float_r"><span>&gt;&gt;</span> Details</a>
                    <div class="cleaner"></div>
              </div>
                <div class="cbox_w280 float_r"> <a href="#"><img src="/images/templatemo_image_07.jpg" alt="image" class="image_frame" /></a>
                  <p>Fedarls moste risus vulputate vehiculnec lobortis risus a elit. Etiam tempor. sullan cooffieca deserunt moti.</p>
                    <a href="#" class="more float_r"><span>&gt;&gt;</span> Details</a>
                    <div class="cleaner"></div>
                </div>
                <div class="cleaner"></div>
			</div>



        </div>

        <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_main_bottom"></div>

    <div id="templatemo_footer">
        Copyright © 2048 <a href="#">Your Company Name</a> | <a href="http://sc.chinaz.com/" target="_parent">Website Templates</a> by <a href="http://sc.chinaz.com/" target="_parent">站长素材</a>

        <div class="cleaner"></div>
    </div>

</div> <!-- end of wrapper -->

<script src="/js/vue.min.js"></script>
    <script>
        var list = <?php echo $menu ?>;
        console.log(list)
        new Vue({
            el:'#templatemo_wrapper',
            data:{
                list: list
            }
        })
    </script>
</body>
</html>