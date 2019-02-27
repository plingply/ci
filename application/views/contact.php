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
                <h2>Contact Us</h2>

                <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a
                        href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. In fermentum,
                    eros ac tincidunt aliquam, elit velit semper nunc, a tincidunt orci lectus a arcu. Nullam commodo,
                    arcu non facilisis imperdiet, felis lectus tempus felis, vitae volutpat augue ante quis leo. Aliquam
                    tristique dolor ac odio. Sed consectetur, lacus et dictum tristique, odio neque elementum ante, nec
                    eleifend leo dolor vel tortor.</p>

            </div>

            <div id="sidebar">


                <h3>Address One</h3>

                180-250 Quisque odio quam, <br />
                Pulvinar sit amet convallis eget, 10320<br />
                Venenatis ut turpis<br />
                <br />
                Tel: 020-080-0740<br />
                Fax: 020-080-0920

                <div class="cleaner h40"></div>

                <h3>Address Two</h3>
                110-310 Duis lacinia dictum, <br />
                PVestibulum auctor, 10510<br />
                Nam rhoncus, diam a mollis tempor<br />
                <br />
                Tel: 010-050-0480<br />
                Fax: 010-050-0470

                <div class="cleaner"></div>

            </div>

            <div id="content">

                <div id="contact_form">

                    <h3>Quick Contact Form</h3>
                    <form method="post" name="contact" id="ok" action="#">

                        <label for="author">Name:</label> <input type="text" id="author" name="author"
                            class="required input_field" />
                        <div class="cleaner_h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email"
                            class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="phone">Phone:</label> <input type="text" name="phone" id="phone"
                            class="input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0"
                            class="required"></textarea>
                        <div class="cleaner_h10"></div>

                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                        <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />

                    </form>
                </div>

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