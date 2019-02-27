<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zh_cn">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>sc.chinaz.com</title>
  <link href="/style/templatemo_style.css" rel="stylesheet" type="text/css" />

  <script language="javascript" type="text/javascript">
    function clearText(field) {
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
      <div id="site_title">
        <h1><a href="http://sc.chinaz.com/">站长素材</a></h1>
      </div>
      <div id="social">
        <a href="#"><img src="/images/templatemo_icon_01.png" alt="twitter" /></a>
        <a href="#"><img src="/images/templatemo_icon_02.png" alt="RSS" /></a>
        <a href="#"><img src="/images/templatemo_icon_03.png" alt="contact" /></a>
      </div>
    </div> <!-- end of header -->

    <div id="templatemo_main">
      <div class="cbox_fw">
        <h2>About Us</h2>
        <a href="#"><img src="/images/templatemo_image_07.jpg" alt="image"
            class="image_frame image_fl" /></a>
        <p>Phasellus id purus. Donec mattis egestas sem. Sed pretium, neque hendrerit rhoncus accumsan, nibh tellus
          pharetra neque, quis rutrum elit justo vitae sapien. Sed nec felis. Vivamus laoreet pharetra eros. Cras
          feugiat. In ut ante. <a href="#">In quam nibh</a>, placerat ac, porta ac, molestie non, purus.</p>
        <p>Curabitur sem ante, condimentum non, cursus quis, eleifend non, libero. Nunc a nulla. Suspendisse vitae orci
          a ligula egestas bibendum. Vestibulum ultrices. Pellentesque tempus sapien nec sem commodo ullamcorper. <a
            href="#">Aenean neque</a>. Mauris in elit. Morbi nec magna pulvinar mi scelerisque posuere. Suspendisse
          rhoncus lectus sit amet justo. Pellentesque rutrum est non pede. <a href="#">Mauris varius</a> risus fermentum
          nulla. Mauris vel sapien mattis urna luctus ultrices. Cum sociis natoque penatibus et magnis dis parturient
          montes, nascetur ridiculus mus. Vivamus tincidunt vehicula est. Vestibulum purus. In hac habitasse <a
            href="#">platea dictumst</a>. </p>
        <a href="#" class="more float_r"><span>&gt;&gt;</span> View All</a>
        <div class="cleaner"></div>
      </div>

      <div id="sidebar">

        <div id="member_login">

          <h3>Member Login</h3>

          <form action="#" method="post">

            <label>Username</label><input name="username" type="text" class="txt_field" id="name" title="name" value=""
              size="10" maxlength="30" />
            <div class="cleaner h10"></div>
            <label>Password</label><input name="password" type="password" class="txt_field" id="password"
              title="password" value="" size="10" maxlength="30" />
            <div class="cleaner h10"></div>
            <input type="submit" name="login" value="" alt="login" id="login" title="Search" class="sub_btn" />

            <div><a href="#">register</a></div>

          </form>

        </div>

      </div>

      <div id="content">

        <h3>Background</h3>
        <p>Ancient Template is designed by <a href="http://sc.chinaz.com/" target="_parent">templatemo.com</a> website.
          Feel free to download, edit and apply this template for your personal or commercial websites. Validate <a
            href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a
            href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Ut enim ad minim veniamquis
          nostrud exercitation ullamco lab.</p>
        <div class="cleaner h30"></div>
        <h3>Our Team</h3>
        <p>In fermentum, eros ac tincidunt aliquam, elit velit semper nunc, a tincidunt orci lectus a arcu. Nullam
          commodo, arcu non facilisis imperdiet, felis lectus tempus felis, vitae volutpat augue ante quis leo. Aliquam
          tristique dolor ac odio. Sed consectetur, lacus et dictum tristique, odio neque elementum ante, nec eleifend
          leo dolor vel tortor. Vivamus vulputate felis. </p>
        <p>Etiam luctus. Quisque facilisis suscipit elit. Curabitur eleifend congue leo. Donec a purus vel purus
          sollicitudin placerat. Nunc at sem. Sed pellentesque placerat augue. Mauris pede nisl, placerat nec, lobortis
          vitae, dictum sed, neque. </p>

        <div class="cleaner"></div>


      </div>

      <div class="cleaner"></div>
    </div> <!-- end of main -->
    <div id="templatemo_main_bottom"></div>

    <div id="templatemo_footer">
      Copyright © 2048 <a href="#">Your Company Name</a> | <a href="http://sc.chinaz.com/" target="_parent">Website
        Templates</a> by <a href="http://sc.chinaz.com/" target="_parent">站长素材</a>

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