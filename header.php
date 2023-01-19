<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Site desenvolvido pela Agência Solary -->

    <!-- Descrição do site -->
    <meta name="description" content="Uma loja de roupas que resgata a autoestima de moradores de rua em todo o mundo">

    <!-- Título -->
    <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>

    <!-- Tipografia -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
  </head>

  <body>
    <header id="header" class="header">
      <div class="header-logo">
        <a target="_blank" href="#">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Logotipo StreetStore">
        </a>
      </div>

      <nav class="header-nav" data-menu="list" role="menu">
        <button id="btn-mobile" data-menu="button" aria-expanded="false" aria-controls="menu" aria-haspopup="true" aria-label="Abrir Menu">
          Menu
          <span id="hamburguer"></span>
        </button>
        <ul id="menu">
          <li>
            <a href="#quem-somos">Quem somos</a>
          </li>
          <li>
            <a href="#sobre">O que fazemos</a>
          </li>
          <li>
            <a href="#ajude">Faça parte</a>
          </li>
          <li>
            <?php $cadastro = get_field('cadastro'); ?>
            <a
              target="_blank"
              href="<?php echo get_property_safe($cadastro, 'link', '#'); ?>"
            >
              Fale com a gente
            </a>
          </li>
        </ul>
      </nav>
    </header>
