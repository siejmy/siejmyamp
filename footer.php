<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since SiejmyAMP 1.0
 */

?>

<footer id="site-footer" role="contentinfo" class="header-footer-group">
	<div class="footer-shadow"></div>
	<div class="footer-content">
		<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
	</div>
</footer><!-- #site-footer -->

<style>
footer {
	display: block;
	position: relative;
	margin: 0;
	padding: 3rem;
	width: 100%;
	background: var(--overlays-bg-dark);
	color: white;
}

.footer-shadow {
	display: block;
	position: absolute;
	width: 100%;
	top: 0;
	left: 0;
	right: 0;
	height: 3rem;
	z-index: 1;
	overflow: hidden;
}

.footer-shadow::after {
	content: '';
	position: absolute;
	top: 0;
	left: -100px;
	right: -100px;
	height: 6rem;
	z-index: 1;
	box-shadow: 0px 0px 28px 1px rgba(0,0,0,0.5) inset;
}

.footer-content {
	margin: 0 auto;
	max-width: 1300px;
	z-index: 2;
}
</style>

<?php wp_footer(); ?>

</body>
</html>
