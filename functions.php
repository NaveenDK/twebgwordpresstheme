<?php


function load_stylesheets(){

    wp_register_style('minified-bootstrap',get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',array(), 1 , 'all' );
    wp_enqueue_style('minified-bootstrap');

    
    wp_register_style('icofont',get_template_directory_uri().'/assets/vendor/icofont/icofont.min.css',array(), 1 , 'all' );
    wp_enqueue_style('icofont');
    
    wp_register_style('boxicons',get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css',array(), 1 , 'all' );
    wp_enqueue_style('boxicons');
       
    wp_register_style('venobox',get_template_directory_uri().'/assets/vendor/venobox/venobox.css',array(), 1 , 'all' );
    wp_enqueue_style('venobox');

        
    wp_register_style('owl-carousel',get_template_directory_uri().'/assets/vendor/owl.carousel/assets/owl.carousel.min.css',array(), 1 , 'all' );
    wp_enqueue_style('owl-carousel');

        
    wp_register_style('aos',get_template_directory_uri().'/assets/vendor/aos/aos.css',array(), 1 , 'all' );
    wp_enqueue_style('aos');
           
    wp_register_style('styles',get_template_directory_uri().'/assets/css/style.css',array(), 1 , 'all' );
    wp_enqueue_style('styles');
    
        
 

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

 

//Load scripts

function adjs(){

    
    wp_register_script('$',get_template_directory_uri().'/assets/vendor/jquery/jquery.min.js',array(),1,1,1);
    wp_enqueue_script('$');

    
    wp_register_script('bootstrap',get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',array(),1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery-easing',get_template_directory_uri().'/assets/vendor/jquery.easing/jquery.easing.min.js',array(),1,1,1);
    wp_enqueue_script('jquery-easing');

    wp_register_script('validate',get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),1,1,1);
    wp_enqueue_script('validate');

    
    wp_register_script('isotopepkg',get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),1,1,1);
    wp_enqueue_script('isotopepkg');

;

    wp_register_script('venoboxmin',get_template_directory_uri().'/assets/vendor/venobox/venobox.min.js',array(),1,1,1);
    wp_enqueue_script('venoboxmin');


    wp_register_script('owl-carousel',get_template_directory_uri().'/assets/vendor/owl.carousel/owl.carousel.min.js',array(),1,1,1);
    wp_enqueue_script('owl-carousel');


    wp_register_script('aos',get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),1,1,1);
    wp_enqueue_script('aos');

    
        
    wp_register_script('swiperbundle','https://unpkg.com/swiper/swiper-bundle.js',array(),1,1,1);
    wp_enqueue_script('swiperbundle');

    
    wp_register_script('swiperbundlemin','https://unpkg.com/swiper/swiper-bundle.min.js',array(),1,1,1);
    wp_enqueue_script('swiperbundlemin');



    wp_register_script('mainfile',get_template_directory_uri().'/assets/js/main.js',array(),1,1,1);
    wp_enqueue_script('mainfile');

    


}

add_action('wp_enqueue_scripts', 'adjs');
//Register menus
add_theme_support('menus');
//Menu Support
register_nav_menus(
    array(
        'top-menu'=> __('Top Menu', 'theme'),
    )
    );



