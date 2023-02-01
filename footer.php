      <footer>
        <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg" alt="Logotipo StreetStore SP">
        <div class="footer-nav">
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
        <div class="footer-credits">
          Desenvolvido com 🤍 por <a href="https://agenciasolary.com.br/">Solary</a>
        </div>
      </footer>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>
