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
	<div class="footer-content">
		<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
	</div>
</footer><!-- #site-footer -->

<style>
footer {
	margin: 0 auto;
	margin-left: -10%;
	width: 120%;
	padding-top: 4%;
	padding-left: 14%;
	padding-right: 14%;
	background: var(--overlays-bg-dark);
	box-shadow: inset 0px 10px 10px 8px rgba(0,0,0,0.47);
	color: white;
}

.footer-content {
	margin: 0 auto;
	max-width: 1300px;
}
</style>

<?php wp_footer(); ?>

</body>
</html>
