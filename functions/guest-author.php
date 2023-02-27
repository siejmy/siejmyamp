<?php

function siejmyamp_guest_author_name($author_name) {
    $guest_author = get_post_meta(get_the_ID(), 'guest_author', true);
    if ($guest_author) {
        return $guest_author;
    }
    return $author_name;
}
add_filter('the_author', 'siejmyamp_guest_author_name');
add_filter('get_the_author_display_name', 'siejmyamp_guest_author_name');
add_filter('get_the_author_last_name', 'siejmyamp_guest_author_name');

function siejmyamp_guest_author_override_object($author) {
	$guest_author = get_post_meta(get_the_ID(), 'guest_author', true);
	if($guest_author) {
		$author->display_name = $guest_author;
	}
	return $author;
}
add_filter('get_the_author', 'siejmyamp_guest_author_override_object', 10, 1);

function siejmyamp_guest_author_empty_value($prev_value) {
	$guest_author = get_post_meta(get_the_ID(), 'guest_author', true);
	if ($guest_author) {
			return '';
	}
	return $prev_value;
}

add_filter('get_the_author_first_name', 'siejmyamp_guest_author_empty_value');
add_filter('get_the_author_description', 'siejmyamp_guest_author_empty_value');
add_filter('get_the_author_user_url', 'siejmyamp_guest_author_empty_value');

function siejmyamp_guest_author_update_yoast_seo_author_name($description) {
	$override_author_name = get_post_meta(get_the_ID(), 'guest_author', true);
	if ($override_author_name) {
			$description = str_replace(get_the_author(), $override_author_name, $description);
	}
	return $description;
}
add_filter('wpseo_metadesc', 'siejmyamp_guest_author_update_yoast_seo_author_name');

function siejmyamp_register_post_fields() {
	register_post_meta( 'post', 'guest_author', array(
			'description' => 'Nazwa autora gościnnego',
			'show_in_rest' => true,
			'single' => true,
			'type' => 'string',
	) );
}

add_action( 'init', 'siejmyamp_register_post_fields' );
