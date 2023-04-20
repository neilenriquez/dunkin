<?php 
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );
wp_enqueue_script( 'my-script', get_template_directory_uri() . '/scripts/swiper.js', array(), '1.0', true );
