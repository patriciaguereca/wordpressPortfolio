<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
    wp_enqueue_style( 'main-css' , get_stylesheet_uri() );
     /* template's primary css file */
    wp_enqueue_style( 'modern-business-css' , get_template_directory_uri() . '/css/modern-business.css' );
    
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'js/jqBootstrapValidation.js' , array( 'jquery' ) , false , true );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'js/contact_me.js' , array( 'jquery' ) , false , true );
    
    
      /* boostrap resources from theme files */
    wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . 'vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'vendor/bootstrap/js/bootstrap.min.js' , array( 'jquery' ) , false , true );
    
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'vendor/bootstrap/js/bootstrap.bundle.min.js' , array( 'jquery' ) , false , true );
            
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . 'vendor/jquery/jquery.min.js' , array( 'jquery' ) , false , true );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );
?>
