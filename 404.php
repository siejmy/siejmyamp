<?php
 require_once(dirname(__FILE__) . '/config.php');

/**
 * The template for displaying the 404 template in the SiejmyAMP theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since SiejmyAMP 1.0
 */

get_header();
?>

<?php get_template_part('parts/headers/home'); ?>

<main id="site-content" class="site-content-404" role="main">
	<h1>Nie znaleźliśmy tego, czego szukałeś</h1>
	<h2>Bardzo nam przykro, przepraszamy!</h2>
	<p>Naprawdę nie wiemy jak to się stało, że nie ma tutaj tej strony.
	Jeśli chdesz nam pomóc i jesteś pewien, że strona powinna tutaj być — napisz do
	nas na <strong><?php echo(Config::$contantEmail); ?></strong>
</main>

<?php
get_footer();
