<?php

//BootStrap
function añadir_css_js(){
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js', array ('jquery'), '2.5', true);

  wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js', array ('popper'), '5.0', true);

}
add_action('wp_enqueue_scripts', 'añadir_css_js');
