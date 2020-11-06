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
    <span>
        <h1>Siejmy</h1>
        <h2>Portal Katolicki</h2>
    </span>
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

  .header-home a span {
    display: inline-block;
    vertical-align:top;
  }

  .header-home h1, .header-home h2  {
    display: block;
    margin: 0;
    padding: 0;
    text-transform: uppercase;

  }

  .header-home h1 {
    font-weight: 300;
    font-size: 60px;
    line-height: 60px;
    margin-top: -5px;
  }

  .header-home h2 {
    font-weight: 300;
    font-size: 17px;
    letter-spacing: 3.1px;
  }
</style>
