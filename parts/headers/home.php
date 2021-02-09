<?php get_template_part('parts/headers/base') ?>

<?php get_template_part('parts/megamenu/menu') ?>

<aside class="header-subline">
  <?php get_template_part('parts/social-icons-horizontal') ?>
  <?php get_template_part('parts/who-we-are-tooltip') ?>
</aside>
<style>
  .header-subline {
    width: 100%;
    height: 6rem;
    z-index: 5;
    position: relative;
    background: rgba(255, 255, 255, 0.7);
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
  }

  .header-subline .megamenu-section {
    float: right;
    padding-top: 5px;
    padding-right: 5px;
  }

  .socico-horizontal {
    padding-top: 5px;
    padding-left: 5px;
  }
</style>
