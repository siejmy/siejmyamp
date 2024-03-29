<?php
$has_footer_menu = has_nav_menu( 'footer' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
?>



<?php

$footer_top_classes = '';

$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';

if ( $has_footer_menu ) {
	?>
	<div class="footer-top<?php echo $footer_top_classes; ?>">
		<?php if ( $has_footer_menu ) { ?>

			<nav aria-label="<?php esc_attr_e( 'Footer', 'siejmyamp' ); ?>" role="navigation" class="footer-menu-wrapper">

				<ul class="footer-menu reset-list-style">
					<?php
					wp_nav_menu(
						array(
							'container'      => '',
							'depth'          => 1,
							'items_wrap'     => '%3$s',
							'theme_location' => 'footer',
						)
					);
					?>
				</ul>

			</nav><!-- .site-nav -->

		<?php } ?>
	</div><!-- .footer-top -->

<?php } ?>

<?php if ( $has_sidebar_1 || $has_sidebar_2 ) { ?>

	<aside class="footer-widgets-columns" role="complementary">
			<?php if ( $has_sidebar_1 ) { ?>

				<div class="footer-widgets column-one grid-item">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>

			<?php } ?>

			<?php if ( $has_sidebar_2 ) { ?>

				<div class="footer-widgets column-two grid-item">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>

			<?php } ?>

	</aside><!-- .footer-widgets-outer-wrapper -->

<?php } ?>
