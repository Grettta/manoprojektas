<?php
function projektas_register_styles()
{
    wp_enqueue_style('projektas-template-styles', get_template_directory_uri() . '/assets/css/custom.css?v=' . time(), array(), false, 'all');
    wp_enqueue_style('projektas-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), false, 'all');
    wp_enqueue_style('projektas-bootstrap-theme', get_template_directory_uri() . '/assets/css/bootstrap-theme.css', array(), false, 'all');
    wp_enqueue_style('projektas-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('projektas-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('projektas-custom', get_template_directory_uri() . '/assets/css/custom.css', array(), false, 'all');
    wp_enqueue_style('projektas-flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), false, 'all');
    wp_enqueue_style('projektas-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('projektas-font-awesome-min', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), false, 'all');
    wp_enqueue_style('projektas-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css', array(), false, 'all');
    wp_enqueue_style('projektas-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), false, 'all');
    wp_enqueue_style('projektas-prettyPhoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css', array(), false, 'all');
    wp_enqueue_style('projektas-responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'projektas_register_styles');



function projektas_register_scripts()
{
    wp_enqueue_script('projektas-a', "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js", array(), null, 'all', true);
    wp_enqueue_script('projektas-b', "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js", array(), null, 'all', true);
    wp_enqueue_script('projektas-alljs', get_template_directory_uri() . '/assets/js/all.js', ['jquery'], false, true);
    wp_enqueue_script('projektas-customjs', get_template_directory_uri() . '/assets/js/custom.js', ['jquery'], false, true);
    wp_enqueue_script('projektas-hoverdirjs', get_template_directory_uri() . '/assets/js/hoverdir.js', ['jquery'], false, true);
    wp_enqueue_script('projektas-portfoliojs', get_template_directory_uri() . '/assets/js/portfolio.js', ['jquery'], false, true);
}
add_action('wp_enqueue_scripts', 'projektas_register_scripts');
