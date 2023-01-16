<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/vendor/swiperjs/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/vendor/swiperjs/swiper-bundle.min.js', [], null, true);
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', ['swiper-js'], null, true);
});
