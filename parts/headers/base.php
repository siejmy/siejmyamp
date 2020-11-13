<header class="header-home" role="banner">
  <?php
  echo(sprintf('<a href="%s">', esc_url( get_home_url( null, '/' ) )));
  ?>
    <amp-img
    class="logo"
      width="75"
      height="75"
      src="<?php bloginfo('template_url'); ?>/assets/images/siejmy-logo-amp.min.svg"
      alt="Logo siejmy"
      noloading
    />
    <h1>
        <span class="title">Siejmy</span>
        <span class="subtitle">Portal Katolicki</span>
    </h1>
  </a>
</header>
<style>
  .header-home {
    width: 100%;
    height: 120px;
    background: var(--color-accent);
  }

  .header-home a {
    display: block;
    margin: 0 auto;
    width: -moz-fit-content;
    width: fit-content;
    padding-top: 22.5px;
    color: white;
    text-decoration: none;
  }

  .header-home .logo {
    display: inline-block;
    height: 75px;
    width: 75px;
    margin-right: 2px;
  }

  .header-home a h1 {
    display: inline-block;
    vertical-align: top;
    margin-top: 0;
    padding-top: 0;
    margin-top: -5px;
  }

  .header-home h1 .title, .header-home h1 .subtitle  {
    display: block;
    margin: 0;
    padding: 0;
    text-transform: uppercase;

  }

  .header-home .title {
    font-weight: 300;
    font-size: 60px;
    line-height: 60px;
  }

  .header-home .subtitle {
    font-weight: 300;
    font-size: 17px;
    line-height: 22px;
    letter-spacing: 3.1px;
  }
</style>
