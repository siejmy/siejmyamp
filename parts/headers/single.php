<header class="header-single" role="banner">
    <?php get_template_part('parts/social-icons-horizontal') ?>

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

    <?php get_template_part('parts/megamenu/trigger') ?>
</header>

<?php get_template_part('parts/megamenu/menu') ?>
