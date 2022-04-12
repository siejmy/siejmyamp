<header class="header-home" role="banner">
  <span class="logo-counterweight"></span>
  <div class="logo-container">
    <?php
    echo(sprintf('<a href="%s">', esc_url( get_home_url( null, '/' ) )));
    ?>
      <amp-img
      class="logo"
        width="60"
        height="60"
        src="<?php bloginfo('template_url'); ?>/assets/images/siejmy-logo-amp.min.svg"
        alt="Logo siejmy"
        noloading
      />
      <h1>
          <span class="title">Siejmy</span>
          <span class="subtitle">Portal Katolicki</span>
      </h1>
    </a>
  </div>
  <span class="megamenu-trigger"><?php get_template_part('parts/megamenu/trigger') ?></span>
</header>
