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
			Projekt strony internetowej: <a href="https://cv.jblewandowski.com/">Jędrzej Lewandowski</a>.
			Zobacz: <a href="<?php echo(Config::$thanksUrl) ?>">Podziękowania</a>, <a href="<?php echo(Config::$privacyUrl) ?>">Polityka prywatności</a>
			<?php get_template_part('parts/analytics/update-consent-btn') ?>
		</p>
	</div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>
<?php get_template_part('parts/analytics/analytics') ?>
</body>
</html>
