<footer id="site-footer" role="contentinfo" class="header-footer-group">
	<div class="footer-shadow"></div>
	<div class="footer-content">
		<?php get_template_part( 'parts/footer-menus-widgets' ); ?>

		<p class="footer-info">
			Copyright &copy; 2019 - <?php echo(date('Y')); ?> by Wydawnictwo Siejmy.
			Projekt strony internetowej: <a href="https://cv.jblewandowski.com/">Jędrzej Lewandowski</a>.
			Zobacz:
			<a href="<?php echo(SiejmyConfig::$thanksUrl) ?>">Podziękowania</a>,
			<a href="<?php echo(SiejmyConfig::$privacyUrl) ?>">Polityka prywatności</a>
			<?php get_template_part('parts/analytics/update-consent-btn') ?>
		</p>
	</div>
</footer>

<?php wp_footer(); ?>
<?php get_template_part('parts/analytics/analytics') ?>
</body>
</html>
