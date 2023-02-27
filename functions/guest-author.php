<?php

function siejmyamp_guest_author_name($author_name) {
    $guest_author = get_post_meta(get_the_ID(), 'guest_author', true);
    if ($guest_author) {
        return $guest_author;
    }
    return $guest_author;
}
add_filter('get_the_author', 'siejmyamp_guest_author_name');
add_filter('get_the_author_display_name', 'siejmyamp_guest_author_name');
add_filter('get_the_author_last_name', 'siejmyamp_guest_author_name');

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

function siejmyamp_register_post_fields() {
	register_post_meta( 'post', 'guest_author', array(
			'description' => 'Nazwa autora gościnnego',
			'show_in_rest' => true,
			'single' => true,
			'type' => 'string',
	) );
}

add_action( 'init', 'siejmyamp_register_post_fields' );
