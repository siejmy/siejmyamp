<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since SiejmyAMP 1.0
 */

$has_footer_menu = has_nav_menu( 'footer' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
?>



<?php

$footer_top_classes = '';

$footer_top_classes .= $has_footer_menu ? ' has-footer-menu' : '';

if ( $has_footer_menu ) {
	?>
	<div class="footer-top<?php echo $footer_top_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">
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

	<aside class="footer-widgets-outer-wrapper" role="complementary">

		<div class="footer-widgets-wrapper">

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

		</div><!-- .footer-widgets-wrapper -->

	</aside><!-- .footer-widgets-outer-wrapper -->

<?php } ?>
