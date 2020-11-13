<header class="header-single" role="banner">
    <?php include(dirname(__FILE__) . '/../social-icons-horizontal.php') ?>

    <div class="logo">
      <div class="positioner">
        <a href="<?php echo(esc_url( get_home_url( null, '/' ))) ?>">
          <amp-img
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
    </div>

    <?php include(dirname(__FILE__) . '/../megamenu/trigger.php') ?>
</header>

<?php include(dirname(__FILE__) . '/../megamenu/menu.php') ?>

<style>
  .header-single {
    z-index: var(--z-index-above-sticky);
    position:relative;
    margin: 0 auto;
    width: 100%;
    max-width: 1500px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 9rem;
    background: white;
  }

  .header-single > * {
    flex-grow: 1;
    flex-basis: 0;
  }

  .header-single .logo {
    margin-top: 1rem;
    align-self: flex-start;
  }

  .header-single .logo .positioner {
    position: relative;
    width: 100px;
    height: 1px;
    margin: 0 auto;
  }

  .header-single .logo a {
    background: var(--color-accent);
    position: absolute;
    top: 0;
    left: 0;
    margin: 0 auto;
    display: block;
    width: 100px;
    height: 100px;
      z-index: var(--z-index-above-sticky);
    text-align: center;
    text-decoration: none;
  }

  .header-single .logo a amp-img {
    margin: 0 auto;
    margin-top: 5px;
    width: 66px;
    height: 66px;
    margin-bottom: 2px;
  }

  .header-single .logo a h1 {
    font-size: 22px;
    line-height: 22px;
    color: white;
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 0.75px;
  }

  .socico-horizontal {
    margin-left: 1rem;
  }

  .megamenu-section {
    margin-right: 1rem;
  }
</style>
