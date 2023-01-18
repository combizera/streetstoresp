<?php
// Template Name: Home
get_header();
?>
  <main>
    <section class="hero">
      <div class="hero-logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Logotipo StreetStore SP">
      </div>
      <div class="hero-nav">
        <?php $redes_sociais = get_field('redes_sociais'); ?>
        <ul>
          <?php foreach ($redes_sociais as $rede_social => $link): ?>
            <li>
              <a target="_blank" href="<?php echo empty($link) ? '#' : $link; ?>">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-<?php echo $rede_social; ?>.svg"
                  alt="Ícone do <?php echo ucwords($rede_social); ?>"
                />
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>

    <span id="quem-somos" style="padding-top: 8rem; margin-top: -8rem; display: block;"></span>
    <?php $quem_somos = get_field('quem_somos'); ?>
    <section class="quem-somos container">
      <div class="sec-txt">
        <h2>
          <span>
            <?php echo $quem_somos['titulo_fundo']; ?>
          </span>
          <?php echo $quem_somos['titulo']; ?>
        </h2>
        <div class="article-content">
          <?php echo $quem_somos['texto']; ?>
        </div>
        <a
          target="<?php echo get_property_safe($quem_somos['link'], 'target'); ?>"
          href="<?php echo get_property_safe($quem_somos['link'], 'url') ?? '#'; ?>"
          class="btn"
        >
          <?php echo get_property_safe($quem_somos['link'], 'title'); ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/play.svg" alt="Botão de play">
        </a>
      </div>
      <div class="sec-img">
        <img
          src="<?php echo get_property_safe($quem_somos['imagem_1'], 'url'); ?>"
          alt="<?php echo get_property_safe($quem_somos['imagem_1'], 'alt'); ?>"
        />
        <img
          src="<?php echo get_property_safe($quem_somos['imagem_2'], 'url'); ?>"
          alt="<?php echo get_property_safe($quem_somos['imagem_2'], 'alt'); ?>"
        />
        <img
          src="<?php echo get_property_safe($quem_somos['imagem_3'], 'url'); ?>"
          alt="<?php echo get_property_safe($quem_somos['imagem_3'], 'alt'); ?>"
        />
      </div>
    </section>

    <span id="sobre" style="padding-top: 8rem; margin-top: -8rem; display: block;"></span>
    <?php $sobre_nos = get_field('sobre_nos'); ?>
    <section class="sobre container">
      <div class="sec-img">
      <img
          src="<?php echo get_property_safe($sobre_nos['imagem_1'], 'url'); ?>"
          alt="<?php echo get_property_safe($sobre_nos['imagem_1'], 'alt'); ?>"
        />
        <img
          src="<?php echo get_property_safe($sobre_nos['imagem_2'], 'url'); ?>"
          alt="<?php echo get_property_safe($sobre_nos['imagem_2'], 'alt'); ?>"
        />
        <img
          src="<?php echo get_property_safe($sobre_nos['imagem_3'], 'url'); ?>"
          alt="<?php echo get_property_safe($sobre_nos['imagem_3'], 'alt'); ?>"
        />
      </div>
      <div class="sec-txt">
        <h2>
          <span>
            <?php echo $sobre_nos['titulo_fundo']; ?>
          </span>
          <?php echo $sobre_nos['titulo']; ?>
        </h2>
        <div class="article-content">
          <?php echo $sobre_nos['texto']; ?>
        </div>
        <a
          target="<?php echo get_property_safe($sobre_nos['link'], 'target'); ?>"
          href="<?php echo get_property_safe($sobre_nos['link'], 'url') ?? '#'; ?>"
          class="btn"
        >
          <?php echo get_property_safe($sobre_nos['link'], 'title'); ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/play.svg" alt="Botão de play">
        </a>
      </div>
    </section>

    <?php $numeros = get_field('numeros'); ?>
    <section id="numeros" class="container numeros">
      <h2>Números</h2>
      <div class="num-card">
        <h4><?php echo get_property_safe($numeros['card_1'], 'numero'); ?></h4>
        <p><?php echo get_property_safe($numeros['card_1'], 'descricao'); ?></p>
      </div>
      <div class="num-card">
        <h4><?php echo get_property_safe($numeros['card_2'], 'numero'); ?></h4>
        <p><?php echo get_property_safe($numeros['card_2'], 'descricao'); ?></p>
      </div>
      <div class="num-card">
        <h4><?php echo get_property_safe($numeros['card_3'], 'numero'); ?></h4>
        <p><?php echo get_property_safe($numeros['card_3'], 'descricao'); ?></p>
      </div>
    </section>

    <?php $galeria_cabecalho = get_cmb_field('galeria_cabecalho')[0]; ?>
    <?php $galeria_fotos = get_cmb_field('galeria_fotos'); ?>
    <section class="galeria container">
      <h2>
        <span><?php echo $galeria_cabecalho['titulo_fundo']; ?></span>
        <?php echo $galeria_cabecalho['titulo']; ?>
      </h2>
      <ul class="galeria-fts swiper-wrapper">
        <?php if (is_array($galeria_fotos)): foreach ($galeria_fotos as $foto): ?>
          <li class="swiper-slide">
            <img
              src="<?php echo $foto['imagem']; ?>"
              alt="<?php echo get_image_alt_text($foto['imagem_id']); ?>"
            >
          </li>
        <?php endforeach; endif; ?>
      </ul>
    </section>

    <span id="ajude" style="padding-top: 8rem; margin-top: -8rem; display: block;"></span>
    <?php $faca_parte = get_field('faca_sua_parte'); ?>
    <section class="ajude container">
      <h2>
        <span>
          <?php echo $faca_parte['titulo_fundo']; ?>
        </span>
        <?php echo $faca_parte['titulo']; ?>
      </h2>
      <article class="ajude__content">
        <?php echo $faca_parte['texto']; ?>
      </article>
      <a
          target="<?php echo get_property_safe($faca_parte['link'], 'target'); ?>"
          href="<?php echo get_property_safe($faca_parte['link'], 'url') ?? '#'; ?>"
          class="btn"
        >
          <?php echo get_property_safe($faca_parte['link'], 'title'); ?>
        </a>
    </section>

    <span id="parceiros" style="padding-top: 1rem; margin-top: -1rem; display: block;"></span>
    <?php $parceiros = get_cmb_field('parceiros_imagens'); ?>
    <section class="parceiros container">
      <h4>Parceiros</h4>
      <div class="marcas">
        <?php if (is_array($parceiros)): foreach ($parceiros as $parceiro): ?>
          <div class="marca">
            <img
              src="<?php echo $parceiro['imagem']; ?>"
              alt="<?php echo get_image_alt_text($parceiro['imagem_id']); ?>"
            >
          </div>
        <?php endforeach; endif; ?>
      </div>
    </section>

    <span id="patrocinadores" style="padding-top: 1rem; margin-top: -1rem; display: block;"></span>
    <?php $patrocinadores = get_cmb_field('patrocinadores_imagens'); ?>
    <section class="patrocinadores container">
      <h4>Patrocinadores</h4>
      <div class="marcas">
        <?php if (is_array($patrocinadores)): foreach ($patrocinadores as $patrocinador): ?>
          <div class="marca">
            <img
              src="<?php echo $patrocinador['imagem']; ?>"
              alt="<?php echo get_image_alt_text($patrocinador['imagem_id']); ?>"
            >
          </div>
        <?php endforeach; endif; ?>
      </div>
    </section>

    <span id="apoiadores" style="padding-top: 1rem; margin-top: -1rem; display: block;"></span>
    <?php $apoiadores = get_cmb_field('apoiadores_imagens'); ?>
    <section class="apoiadores container">
      <h4>Apoiadores</h4>
      <div class="marcas">
        <?php if (is_array($apoiadores)): foreach ($apoiadores as $apoiador): ?>
          <div class="marca">
            <img
              src="<?php echo $apoiador['imagem']; ?>"
              alt="<?php echo get_image_alt_text($apoiador['imagem_id']); ?>"
            >
          </div>
        <?php endforeach; endif; ?>
      </div>
    </section>
<?php get_footer(); ?>
