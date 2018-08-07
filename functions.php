<?php
    function style_script()
    {
        
      
     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
     wp_enqueue_style('font-awesom', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
     wp_enqueue_style('animate', get_template_directory_uri() . '/assets/animate/animate.css');
     wp_enqueue_style('icon-font', get_template_directory_uri() . '/assets/linearicons/css/icon-font.min.css');
     wp_enqueue_style('ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css');
     wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
     wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/css/owl.carousel.css');
     wp_enqueue_style('owl-carousel-theme', get_template_directory_uri() . '/assets/owl-carousel/css/owl.theme.css');
        
        
        // wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
      wp_enqueue_style('style', get_template_directory_uri() .'/style.css');
    
    
   
    }
    
    add_action('wp_enqueue_scripts', 'style_script');
    
    
    
    // function javaa_enqueue(){
        
    //      wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/jquery/jquery-3.1.1.min.js', array('jquery'),'',true);
    //  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.js', array('jquery'),'',true);
    //  wp_enqueue_script('slider', get_template_directory_uri() . '/assets/jquery/slider.js', array('jquery'),'',true);
    //  wp_enqueue_script('easing', get_template_directory_uri() . '/assets/easing/jquery.easing.min.js', array('jquery'),'',true);
    //  wp_enqueue_script('plugins', get_template_directory_uri() . '/assets/jquery/plugins.js', array('jquery'),'',true);
    //  wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/jquery/jquery.isotope.js', array('jquery'),'',true);
    //  wp_enqueue_script('uimagesloaded', get_template_directory_uri() . '/assets/jquery/imagesloaded.pkgd.min.js', array('jquery'),'',true);
    //  wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/jquery/jquery.magnific-popup.min.js', array('jquery'),'',true);
    //  wp_enqueue_script('owl-carousel-theme', get_template_directory_uri() . '/assets/owl-carousel/js/owl.carousel.js', array('jquery'),'',true);
    //   wp_enqueue_script('wow', get_template_directory_uri() . '/assets/wow/wow.min.js', array('jquery'),'',true);
    //   wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'),'',true);
    // }
    
    //  add_action('wp_enqueue_scripts', 'javaa_enqueue');
    ?>