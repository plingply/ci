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
            <div id="sidebar">

                <div id="nne">

                    <h3>News &amp; Events</h3>
                    <ul class="nne_box">
                        <li><span>16 March 2048</span><a href="#">Ut enim ad minim veniamquis nostru itation ullamco
                                laboris nisi.</a></li>
                        <li><span>14 March 2048</span><a href="#">Dunt in culpa qui officia deserunt mol satst gislets
                                ste otedform.</a></li>
                        <li><span>22 February 2048</span><a href="#">Mourt sculpa qui officia deserunt fure satst
                                gisletsser tellerast.</a></li>
                        <li><span>18 February 2048</span><a href="#">Admirest ad minim veniamquis nostru itation ullamco
                                laboris nisi.</a></li>
                    </ul>

                </div>

                <div id="member_login">

                    <h3>Member Login</h3>

                    <form action="#" method="post">

                        <label>Username</label><input name="username" type="text" class="txt_field" id="name"
                            title="name" value="" size="10" maxlength="30" />
                        <div class="cleaner h10"></div>
                        <label>Password</label><input name="password" type="password" class="txt_field" id="password"
                            title="password" value="" size="10" maxlength="30" />
                        <div class="cleaner h10"></div>
                        <input type="submit" name="login" value="" alt="login" id="login" title="Search"
                            class="sub_btn" />

                        <div><a href="#">register</a></div>

                    </form>

                </div>

            </div>

            <div id="content">

                <div class="cbox_fws">
                    <h3><a href="#">Mauris congue felis at nisi</a></h3>
                    <p align="justify"><a href="http://sc.chinaz.com/"><img src="/images/templatemo_image_07.jpg"
                                alt="image" class="image_frame image_fl" /></a> Ancient Template is designed by <a
                            href="http://sc.chinaz.com/" target="_parent">templatemo.com</a> website. Feel free to
                        download, edit and apply this template for your personal or commercial websites. Validate <a
                            href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a
                            href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Ut enim ad
                        minim veniamquis nostrud exercitation ullamco lab.  Pellentesque elementum enim a augue. Donec
                        in nisi. Etiam sit amet turpis. Duis nulla diam, posuere ac, varius id, ullamcorper sit amet,
                        libero. Nam sodales, pede vel dapibus lobortis, ipsum diam molestie risus, a vulputate risus
                        nisl pulvinar lacus. </p>
                    <p align="justify">Category: <a href="#">Flash Design</a> | Posted by <a href="#">Admin</a> |
                        <strong>Date:</strong> 18 March 2048 </p>
                </div>

                <div class="cbox_fws">
                    <h3><a href="#">Etiam sit amet turpis</a></h3>
                    <p align="justify"><a href="http://sc.chinaz.com/"><img src="/images/templatemo_image_05.jpg"
                                alt="image" class="image_frame image_fl" /></a>  Fusce quis diam sit amet tortor luctus
                        pellentesque. Donec accumsan urna non elit tristique mattis. Vivamus fermentum orci viverra
                        nisl. In nec magna id ipsum aliquam dictum. Donec euismod enim et risus. </p>
                    <p align="justify">Nunc dictum, massa non dignissim commodo, metus quam vehicula lorem, et dignissim
                        enim augue vitae pede. Donec at arcu. Nunc aliquam, dolor vitae sollicitudin lacinia, nibh orci
                        sagittis diam, dignissim sodales dui erat nec eros. Fusce quis enim. Aenean eleifend, neque
                        hendrerit elementum sodales, odio erat sagittis quam, sed tempor orci magna vitae tellus.</p>
                    <p align="justify">Category: <a href="#">Web Development</a> | Posted by <a href="#">Ford</a> |
                        <strong>Date:</strong> 14 March 2048 </p>

                </div>


                <h3><a href="#">Mauris congue felis at nisi</a></h3>
                <p align="justify"><a href="http://sc.chinaz.com/"><img src="/images/templatemo_image_04.jpg" alt="image"
                            class="image_frame image_fl" /></a> Duis faucibus, massa vitae dictum facilisis, ipsum nibh
                    facilisis nisi, ut scelerisque metus enim in tortor. Mauris in sapien in massa pellentesque viverra.
                    Quisque venenatis fringilla eros. Etiam in lorem ac nulla imperdiet sodales. Phasellus in justo at
                    lectus pulvinar ultrices. Mauris ultrices sollicitudin turpis. Fusce non lacus et lorem ornare
                    interdum. Nunc eget urna. Mauris vestibulum felis eget tortor. </p>
                <p align="justify">Praesent mattis varius quam. Vestibulum ullamcorper ipsum nec augue. Vestibulum
                    auctor odio eget ante. Nunc commodo, magna pharetra semper vehicula, dui ligula feugiat elit, et
                    euismod nunc orci ut libero. Etiam sodales massa vel metus. Mauris et elit quis mauris aliquet
                    luctus. </p>
                <p align="justify">Category: <a href="#">Print Media</a> | Posted by <a href="#">Neo</a> |
                    <strong>Date:</strong> 12 March 2048 </p>
                <div class="cleaner h30"></div>

            </div>

            <div class="cleaner"></div>
        </div> <!-- end of main -->
        <div id="templatemo_main_bottom"></div>

        <div id="templatemo_footer">
            Copyright © 2048 <a href="#">Your Company Name</a> | <a href="http://sc.chinaz.com/"
                target="_parent">Website Templates</a> by <a href="http://sc.chinaz.com/" target="_parent">站长素材</a>

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