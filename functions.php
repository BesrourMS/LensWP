<?php

function load_css() {
	wp_enqueue_style( 'lenswordpress_stylesheet', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

add_theme_support( 'post-thumbnails' ); 

add_action('customize_register', 'theme_footer_customizer');
function theme_footer_customizer($wp_customize){
 
$wp_customize->add_section('footer_settings_section', array(
  'title'          => 'Social Media Links'
 ));

 $wp_customize->add_setting('twitter', array(
 'default'        => 'https://twitter.com/User',
 'transport'      => 'postMessage'
 ));
 $wp_customize->add_setting('instagram', array(
 'default'        => 'https://instagram.com/User',
 'transport'      => 'postMessage'
 ));
 $wp_customize->add_setting('github', array(
 'default'        => 'https://github.com/User',
 'transport'      => 'postMessage'
 ));
 $wp_customize->add_setting('contact', array(
 'default'        => 'mailto:user@user.com',
 'transport'      => 'postMessage'
 ));
 
$wp_customize->add_control('twitter', array(
 'label'   => 'Twitter Account',
 'section' => 'footer_settings_section',
));
$wp_customize->add_control('instagram', array(
 'label'   => 'Instagram Account',
 'section' => 'footer_settings_section',
));
$wp_customize->add_control('github', array(
 'label'   => 'Github Account',
 'section' => 'footer_settings_section',
));
$wp_customize->add_control('contact', array(
 'label'   => 'Your E-mail',
 'section' => 'footer_settings_section',
));
}
?>