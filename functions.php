<?php

// Remover alguns links desnecessário do <head/>
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/vendor/swiperjs/swiper-bundle.min.css');
  wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/vendor/swiperjs/swiper-bundle.min.js', [], null, true);
  wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', ['swiper-js'], null, true);
});

function get_property_safe(object|array|bool $obj, string $key) {
  if (!$obj) {
    return null;
  }

  return property_exists((object) $obj, $key) ? $obj[$key] : '';
}
function get_image_alt_text($image_id) {
  $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
  return (bool) $alt_text ? $alt_text : '';
}
function get_cmb_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();
  return get_post_meta($id, $key, true);
}
function the_cmb_field($key, $page_id) {
  echo get_post_meta($key, $page_id);
}

const IMAGE_MIME_TYPES = ['image/jpeg', 'image/png', 'image/svg+xml', 'image/webp'];

function cmb2_add_home_boxes() {
  $galeria_box = new_cmb2_box([
    'id' => 'home_galeria_box',
    'title' => 'Galeria',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'index.php',
    ],
  ]);

  $galeria_cabecalho = $galeria_box->add_field([
    'id' => 'galeria_cabecalho',
    'type' => 'group',
    'repeatable' => false,
    'options' => [
      'group_title' => 'Galeria (cabeçalho)',
    ],
  ]);

  $galeria_box->add_group_field($galeria_cabecalho, [
    'name' => 'Título',
    'id' => 'titulo',
    'type' => 'text',
    'description' => 'Insira o título da seção',
    'default' => 'Galeria',
  ]);

  $galeria_box->add_group_field($galeria_cabecalho, [
    'name' => 'Título de Fundo',
    'id' => 'titulo_fundo',
    'type' => 'text',
    'description' => 'Insira aqui o texto que ficará atrás do título',
    'default' => 'Algumas fotos',
  ]);

  $galeria_fotos = $galeria_box->add_field([
    'id' => 'galeria_fotos',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Foto {#}',
    ],
  ]);

  $galeria_box->add_group_field($galeria_fotos, [
    'id' => 'imagem',
    'type' => 'file',
    'description' => 'Adicione uma foto',
    'options' => [
      'url' => false
    ],
    'query_args' => [
      'type' => IMAGE_MIME_TYPES,
    ],
    'preview_size' => 'medium',
  ]);

  $parceiros_box = new_cmb2_box([
    'id' => 'home_parceiros_box',
    'title' => 'Parceiros',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'index.php',
    ],
  ]);

  $parceiros_fotos = $parceiros_box->add_field([
    'id' => 'parceiros_imagens',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Imagem {#}',
    ],
  ]);

  $parceiros_box->add_group_field($parceiros_fotos, [
    'id' => 'imagem',
    'type' => 'file',
    'description' => 'Adicione uma imagem/logo do parceiro do projeto',
    'options' => [
      'url' => false,
    ],
    'query_args' => [
      'type' => IMAGE_MIME_TYPES,
    ],
    'preview_size' => 'small',
  ]);

  $patrocinadores_box = new_cmb2_box([
    'id' => 'home_patrocinadores_box',
    'title' => 'Patrocinadores',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'index.php',
    ],
  ]);

  $patrocinadores_fotos = $patrocinadores_box->add_field([
    'id' => 'patrocinadores_imagens',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Imagem {#}',
    ],
  ]);

  $patrocinadores_box->add_group_field($patrocinadores_fotos, [
    'id' => 'imagem',
    'type' => 'file',
    'description' => 'Adicione uma imagem/logo do patrocinador do projeto',
    'options' => [
      'url' => false,
    ],
    'query_args' => [
      'type' => IMAGE_MIME_TYPES,
    ],
    'preview_size' => 'small',
  ]);

  $apoiadores_box = new_cmb2_box([
    'id' => 'home_apoiadores_box',
    'title' => 'Apoiadores',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'index.php',
    ],
  ]);

  $apoiadores_fotos = $apoiadores_box->add_field([
    'id' => 'apoiadores_imagens',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Imagem {#}',
    ],
  ]);

  $apoiadores_box->add_group_field($apoiadores_fotos, [
    'id' => 'imagem',
    'type' => 'file',
    'description' => 'Adicione uma imagem/logo do apoiador do projeto',
    'options' => [
      'url' => false,
    ],
    'query_args' => [
      'type' => IMAGE_MIME_TYPES,
    ],
    'preview_size' => 'small',
  ]);
}

add_action('cmb2_admin_init', 'cmb2_add_home_boxes');
