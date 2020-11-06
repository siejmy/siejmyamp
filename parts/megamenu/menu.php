<amp-sidebar id="megamenu-sidebar" class="megamenu-sidebar" layout="nodisplay" side="left">
  <h2>Co<br /> chcesz zobaczyć?</h2>

  <?php

$menu_location = '';

// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order.
if ( has_nav_menu( 'megamenu' ) ) {
  wp_nav_menu(array(
    'menu' => 'megamenu',
  ));
}

?>
</amp-sidebar>
<style>
.megamenu-sidebar {
  background: var(--overlays-bg-dark);
  color: white;
  padding: 3rem;
}

.megamenu-sidebar h2 {
  font-weight: 100;
}

.megamenu-sidebar li {
  margin-bottom: 3rem;
  text-align: right;
}

.megamenu-sidebar li a {
  font-weight: 400;
  letter-spacing: 0.5px;
}
</style>
