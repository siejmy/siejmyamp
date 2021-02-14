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
<style>
  .header-home {
    width: 100%;
    height: 120px;
    background: var(--color-accent);

    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-evenly;
  }

  .header-home a {
    display: block;
    margin: 0 auto;
    color: white;
    text-decoration: none;
  }

  .logo-container {
    flex-grow: 4;
    display: flex;
    align-items: center;
  }

  .header-home .logo {
    display: inline-block;
    height: 60px;
    width: 60px;
    margin-right: 1.6px;
  }

  .header-home a h1 {
    display: inline-block;
    vertical-align: top;
    margin-top: 0;
    padding-top: 0;
    margin-top: -4px;
    margin-bottom: 0;
  }

  .header-home h1 .title, .header-home h1 .subtitle  {
    display: block;
    margin: 0;
    padding: 0;
    text-transform: uppercase;

  }

  .header-home .title {
    font-weight: 300;
    font-size: 48px;
    line-height: 48px;
  }

  .header-home .subtitle {
    font-weight: 300;
    font-size: 13.6px;
    line-height: 17.6px;
    letter-spacing: 2.48px;
  }

  .megamenu-trigger {
    flex-grow: 1;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .logo-counterweight {
    flex-grow: 2;
  }
</style>
