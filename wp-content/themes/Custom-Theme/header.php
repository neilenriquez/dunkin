<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
<div class="navigation_bar" id="navbar">
        <div class="header_div">
            <div class="header_buttons">
                <div class="socials">
                    <a href="#" class="fa fa-facebook socials_link"></a>
                    <a href="#" class="fa fa-twitter socials_link"></a>
                    <a href="#" class="fa fa-instagram socials_link"></a>
                    <a href="#" class="fa fa-youtube socials_link"></a>
                    <a href="#" class="fa fa-vine socials_link"></a>
                </div>
                <div class="header_contacts">
                    <a href="/dunkin/contact-us" class="general_button transparent_button">Contact Us</a>
                    <button class="general_button">Chat With Us</button>
                </div>
            </div>
        </div>
        <div class="header_nav">
            <div class="nav_content">
                <div class="nav-links">
                    <h1 class="h1_nav">DUNKIN</h1><h1 class="h1_nav pink_highlight">'</h1>
                    <?php
                        wp_nav_menu(array(
                            'menu'          => 2,
                            'menu_class'     => 'menu', // CSS class for the menu container
                            'container'      => 'nav', // HTML element to wrap the menu in (nav, div, etc.)
                        ));
                    ?>
                    <!-- <ul class="navigation_refs">
                        <li class="navigation_ref_item">
                            <a href="menu" class="ref_item_link"> Menu</a>
                        </li>
                        <li class="navigation_ref_item">
                            <a href="about-us" class="ref_item_link">About Us</a>
                        </li>
                        <li class="navigation_ref_item">
                            <a href="sustainability" class="ref_item_link">Sustainability</a>
                        </li>
                        <li class="navigation_ref_item">
                            <a href="franchise" class="ref_item_link">Franchise</a>
                        </li>
                        <li class="navigation_ref_item">
                            <a href="careers" class="ref_item_link">Careers</a>
                        </li>
                        <li class="navigation_ref_item">
                            <a href="archive" class="ref_item_link">Media</a>
                        </li>
                    </ul> -->
            </div>
        </div>
    </div>
</div>
