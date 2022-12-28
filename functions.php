<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js');
});
