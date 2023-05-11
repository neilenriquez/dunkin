<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
<div class= "footer-container">
    <div class="footer-back-to-top-container">
        <p class="">BACK TO TOP
            <span class="back-to-top-button">></span>
        </p>
    </div>
    <div class="footer-content">
        <div class="footer-logo">
            <img src="https://dev.dunkindonuts.ph/_ipx/s_200x200/logo-circle.svg" alt="" class="">
        </div>
        <div class="footer-about">
            <h1 class="">ABOUT</h1>
            <p class="">
            Dunkin' is the world's leading baked goods and coffee chain, serving more than 3 million customers each and every day.
            </p>
        </div>
        <div class="footer-address">
            <h1 class="">HEADQUARTERS</h1>
            <a href="https://www.google.com/maps/place/Golden+Donuts+Inc./@14.5530282,120.9957768,13z/data=!4m10!1m2!2m1!1sgdi!3m6!1s0x3397c8417e14b1d1:0xd9ee018bcc37390b!8m2!3d14.5744252!4d121.0531492!15sCgNnZGmSARZmb29kX3Byb2R1Y3RzX3N1cHBsaWVy4AEA!16s%2Fg%2F11bzvvc91v" target="_blank">GDI Bldg. Reliance cor. Sheridan Sts. Highway Hills, Mandaluyong City
            </a>
        </div>
        <div class="footer-links">
            <h1 class="">QUICKLINKS</h1>
            <?php
                wp_nav_menu(array(
                    'menu'          => 3,
                    'menu_class'     => 'menu', // CSS class for the menu container
                    'container'      => 'nav', // HTML element to wrap the menu in (nav, div, etc.)
                ));
            ?>
            <!-- <ul class="">
                <li class=""> <a href="menu" class="">Menu</a></li>
                <li class=""> <a href="about-us" class="">About Us</a></li>
                <li class="">  <a href="sustainability" class="">Sustainability</a></li>
                <li class="">  <a href="franchise" class="">Franchise</a></li>
                <li class="">  <a href="careers" class="">Careers</a></li>
                <li class="">  <a href="media" class="">Media</a></li>
                <li class="">  <a href="contact-us" class="">Contact Us </a></li>
            </ul> -->
        </div>
    </div>
    <div class="footer-content-bottom">
        <div class="footer-bottom-links">
            <p class="">@ 2022. All Rights Reserved</p>
            <?php
                wp_nav_menu(array(
                    'menu'          => 4,
                    'menu_class'     => 'menu', // CSS class for the menu container
                    'container'      => 'nav', // HTML element to wrap the menu in (nav, div, etc.)
                ));
            ?>
            <!-- <ul class="">
                <li class=""> <a href="site-map">Sitemap</a></li>
                <li class=""> <a href="privacy-policy">Privacy Policy</a></li>
            </ul> -->
        </div>
    </div>
</div>
</body>
</html>