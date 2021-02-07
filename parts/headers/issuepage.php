<header class="header-issuepage" role="banner">
  <div class="topline">
    <p><a href="<?php echo(esc_url( get_home_url( null, '/' ))) ?>">⏎ Wróć do portalu</a></p>
    <?php get_template_part('parts/megamenu/trigger') ?>
  </div>
  <div class="midline">
    <a href="<?php echo(esc_url( get_home_url( null, '/' ))) ?>">
      <amp-img
        class="logo"
          width="2"
          height="2"
          src="<?php bloginfo('template_url'); ?>/assets/images/siejmy-logo-amp.min.svg"
          alt="Logo siejmy"
          layout="responsive"
          noloading
        ></amp-img>
        <h1>Siejmy</h1>
    </a>
  </div>
  <!--<h2 class="subline h6">Portal katolicki</h2>-->
</header>

<?php get_template_part('parts/megamenu/menu') ?>

<style>
  .header-issuepage {
    width: 100%;
    margin-bottom: 6rem;
  }

  .header-issuepage .topline {
    display: block;
    width: 100%;
    height: 3rem;
  }

  .header-issuepage .topline p {
    display: block;
    float: left;
    margin-bottom: 0;
    padding-left: 1rem;
    font-size: 1.1em;
    color: #888;
  }

  .header-issuepage .topline .megamenu-section {
    float: right;
  }

  .header-issuepage .midline {
    width: 100%;
    min-height: 6rem;
  }

  .header-issuepage .midline a {
    display: block;
    margin: 0 auto;
    background: var(--color-accent);
    color: white;
    text-decoration: none;
    width: 100px;
    height: 100px;
    text-align: center;
    padding-top: 6px;
  }

  .header-issuepage .midline a .logo {
    width: 70px;
    height: 70px;
    margin: 0 auto;
  }

  .header-issuepage .midline a h1 {
    font-weight: 300;
    font-size: 18px;
    line-height: 18px;
    letter-spacing: 0.4px;
    text-transform: uppercase;
  }

  .header-issuepage .subline {
    color: #ccc;
    text-align: center;
    text-transform: uppercase;
    font-weight: 300;
  }

  @media (min-width: 768px) {
    .header-issuepage {
      margin-bottom: 12rem;
    }

    .header-issuepage .midline a {
      width: 200px;
      height: 200px;
      padding-top: 12px;
    }

    .header-issuepage .midline a .logo {
      width: 140px;
      height: 140px;
    }

    .header-issuepage .midline a h1 {
      font-size: 36px;
      line-height: 36px;
    }
  }

  .megamenu-section {
    padding-top: 5px;
    padding-right: 5px;
  }
</style>
