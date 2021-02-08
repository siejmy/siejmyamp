<?php
require_once(dirname(__FILE__) . '/config.php');
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

		<p class="footer-info">
			Copyright &copy; 2019 - <?php echo(date('Y')); ?> by Wydawnictwo Siejmy.
			Projekt strony internetowej: <a href="https://jedrzej.lewandowski.doctor/">Jędrzej Lewandowski</a>.
			Zobacz: <a href="<?php echo(Config::$thanksUrl) ?>">Podziękowania</a>, <a href="<?php echo(Config::$privacyUrl) ?>">Polityka prywatności</a>
			<?php get_template_part('parts/analytics/update-consent-btn') ?>
		</p>
	</div>
</footer><!-- #site-footer -->

<style>
footer {
	display: block;
	position: relative;
	margin: 0;
	margin-top: 9rem;
	padding: 3rem;
	width: 100%;
	background: var(--overlays-bg-dark-opaque);
	color: var(--color-text-footer);
	z-index: var(--z-index-above-sticky);
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
	max-width: var(--content-max-width);
	z-index: 2;
}

.footer-content nav {
	margin-bottom: 9rem;
	border-left: 3rem solid var(--color-accent);
	padding-left: 3rem;
}

.footer-content nav ul li {
	font-weight: 900;
	display: inline-block;
	padding-right: 3rem;
}

.footer-content nav ul li a {
	text-decoration: none;
}

.footer-content nav ul li :hover {
	text-decoration: underline;
}

.footer-widgets-columns {
	max-width: var(--content-max-width);
	margin: 0 auto;
	margin-bottom: 6rem;
}

.footer-widgets-columns .widget {
	margin-bottom: 6rem;
}

.footer-info {
	font-size: 12px;
	display: block;
	text-align: center;
}

@media (min-width: 768px) {
	.footer-widgets-columns {
	max-width: var(--content-max-width);
	margin: 0 auto;
	display: grid;
	grid-template-columns: 1fr 1fr;
	column-gap: 8%;
	margin-bottom: 6rem;
}
}
</style>

<?php wp_footer(); ?>
<?php get_template_part('parts/analytics/analytics') ?>
</body>
</html>
