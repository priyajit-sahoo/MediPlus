<?php
function priyajit()
{
    $labels = array(
        'name' => 'Helmets',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports'  => array('thumbnail' , 'title' , 'editor','excerpt','comments'),
        // 'taxonomies'  => array('category', 'post_tag')
    );
    register_post_type('Helmets', $args);
}

add_action('init', 'priyajit');







////////////////////////////////////////////////////////////stsrt hospital post type///////////////////////////////////////

function hospital()
{
    $labels = array(
        'name' => 'Hospital',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports'  => array('thumbnail' , 'title' , 'editor','excerpt','comments'),
        'menu_icon'  => 'dashicons-plus',
        // 'taxonomies'  => array('category', 'post_tag')
    );
    register_post_type('Hospital', $args);
}

add_action('init', 'hospital');



// /////////////////////////////////////hospital post type end///////////////////////////////////////////////////////////////






function college()
{
    $labels = array(
        'name' => 'College',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports'  => array('thumbnail' , 'title' , 'editor','excerpt','comments'),
        'menu_icon'  => 'dashicons-welcome-learn-more',
        // 'taxonomies'  => array('category', 'post_tag')
    );
    register_post_type('College', $args);
}

add_action('init', 'college');




function vehicle()
{
    $labels = array(
        'name' => 'Vehicle',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports'  => array('thumbnail' , 'title' , 'editor','excerpt','comments'),
        'menu_icon'  => 'dashicons-car',
        // 'taxonomies'  => array('category', 'post_tag')
    );
    register_post_type('Vehicle', $args);
}

add_action('init', 'vehicle');





function priyajits()
{
    register_nav_menus(array(
        'header_menu' => 'header_menu',
        'footer_menu' => 'footer_menu'
    ));
}
add_action('init', 'priyajits');



//////////////////////////////////////////////////////////////////// page logo dynamic/////////////////////////////////////////////////////////
function amarlogo()
{
    add_theme_support('custom-logo', array(
        'height'    =>  100,
        'width'     =>  300,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'amarlogo');









function slider()
{
    $labels = array(
        'name' => 'Carosuel',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports'  => array('thumbnail' , 'title' , 'editor','excerpt','comments'),
        'taxonomies'  => array('category', 'post_tag')
    );
    register_post_type('Carosuel', $args);
}

add_action('init', 'slider');









function amarEnqueue()
{
    wp_enqueue_style('main-style', get_stylesheet_uri());


    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.2', 'all');

    wp_enqueue_style('nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0', 'all');

    wp_enqueue_style('font-awesome.css', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '5.15.4', 'all');

    wp_enqueue_style('icofont.css', get_template_directory_uri() . '/assets/css/icofont.css', array(), '1.0', 'all');

    wp_enqueue_style('slicknav-css', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0', 'all');

    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), '2.3.4', 'all');

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() .  ' /assets/css/datepicker.css', array(), '1.0', 'all');



    wp_enqueue_style('animate-css', get_template_directory_uri() .  ' /assets/css/animate.min.css', array(), '4.1.1', 'all');

    wp_enqueue_style('magnific-css', get_template_directory_uri() .  '/assets/css/magnific-popup.css', array(), '1.1.0', 'all');

    wp_enqueue_style('normalize-css', get_template_directory_uri() .  '/assets/css/normalize.css', array(), '1.0', 'all');

    wp_enqueue_style('style-css', get_template_directory_uri() .  ' /assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('responsive-css', get_template_directory_uri() .  '/assets/css/responsive.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'amarEnqueue');


// function amarEnqueueScript()
// {
//     wp_enqueue_script('jquery');
//     wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.0.js', array('jquery'), null, true);
//     wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js',array('jquery'), null, true);
//     wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.js', array('jquery'), null, true);
//     wp_enqueue_script('colors', get_template_directory_uri() . '/assets/js/colors.js', array(), null, true);
//     wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), null, true);
//     wp_enqueue_script('bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array('jquery'), null, true);
//     wp_enqueue_script('jquery.nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), null, true);
//     wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/slicknav.min.js', array('jquery'), null, true);
//     wp_enqueue_script('scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array('jquery'), null, true);
//     wp_enqueue_script('niceselect', get_template_directory_uri() . '/assets/js/niceselect.js', array('jquery'), null, true);
//     wp_enqueue_script('tilt', get_template_directory_uri() . '/assets/js/tilt.jquery.min.js', array('jquery'), null, true);
//     wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), null, true);
//     wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), null, true);
//     wp_enqueue_script('steller', get_template_directory_uri() . '/assets/js/steller.js', array('jquery'), null, true);
//     wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
//     wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
//     wp_enqueue_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), null, true);
//     wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
//     wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
// }
// add_action('wp_enqueue_scripts', 'amarEnqueueScript');
function amarEnqueueScript()
{
    $theme_uri = get_template_directory_uri() . '/assets/js/';

    // jQuery (included in WordPress, no need to enqueue manually)
    wp_enqueue_script('jquery');

    // Enqueue other scripts
    wp_enqueue_script('jquery-migrate', $theme_uri . 'jquery-migrate-3.0.0.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', $theme_uri . 'jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('easing', $theme_uri . 'easing.js', array('jquery'), null, true);
    wp_enqueue_script('colors', $theme_uri . 'colors.js', array('jquery'), null, true);
    wp_enqueue_script('popper', $theme_uri . 'popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-datepicker', $theme_uri . 'bootstrap-datepicker.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-nav', $theme_uri . 'jquery.nav.js', array('jquery'), null, true);
    wp_enqueue_script('slicknav', $theme_uri . 'slicknav.min.js', array('jquery'), null, true);
    wp_enqueue_script('scrollup', $theme_uri . 'jquery.scrollUp.min.js', array('jquery'), null, true);
    wp_enqueue_script('niceselect', $theme_uri . 'niceselect.js', array('jquery'), null, true);
    wp_enqueue_script('tilt-jquery', $theme_uri . 'tilt.jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', $theme_uri . 'owl-carousel.js', array('jquery'), null, true);
    wp_enqueue_script('counterup', $theme_uri . 'jquery.counterup.min.js', array('jquery'), null, true);
    wp_enqueue_script('steller', $theme_uri . 'steller.js', array('jquery'), null, true);
    wp_enqueue_script('wow', $theme_uri . 'wow.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', $theme_uri . 'jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', $theme_uri . 'bootstrap.min.js', array('jquery', 'popper'), null, true);
    wp_enqueue_script('main', $theme_uri . 'main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'amarEnqueueScript');


add_theme_support('post-thumbnails');

add_theme_support('title-tag');     