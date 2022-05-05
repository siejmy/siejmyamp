<amp-sidebar id="megamenu-sidebar" class="megamenu-sidebar" layout="nodisplay" side="left">
  <h2><?php echo get_bloginfo( 'name' ); ?></h2>

  <?php

$menu_location = '';

// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
if ( has_nav_menu( 'megamenu' ) ) {
  wp_nav_menu(array(
    'menu' => 'megamenu',
  ));
}

?>

<?php get_template_part('parts/megamenu/bottom') ?>
</amp-sidebar>
