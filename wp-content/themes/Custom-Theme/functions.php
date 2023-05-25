<?php 
wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all' );
wp_enqueue_script( 'my-script', get_template_directory_uri() . '/scripts/swiper.js', array(), '1.0', true );
add_theme_support( 'menus' );

function mailtrap($phpmailer) {
  $phpmailer->isSMTP();
  $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = '312269fe2feb2d';
  $phpmailer->Password = 'c2238ac53c47f5';
}

add_action('phpmailer_init', 'mailtrap');
?>