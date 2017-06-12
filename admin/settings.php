<?php
/**
 * Register the plugin settings
 */


/**
 * register settings
 */
function upcart_settings_setup() {


	// register META setting
	register_setting( UPWPCART_PLUGIN_DOMAIN, 'upcart_meta', array(
		'type'         => 'string',
		'description'  => 'Defines the meta name for pricing products',
		'show_in_rest' => true,
		'default'      => 'price',
	) );

	// register the POST_TYPE setting
	register_setting( UPWPCART_PLUGIN_DOMAIN, 'upcart_post_type', array(
		'type'         => 'string',
		'description'  => 'Defines the post type used as products',
		'show_in_rest' => true,
		'default'      => 'post',
	) );

	// register the CURRENCY setting
	register_setting( UPWPCART_PLUGIN_DOMAIN, 'upcart_currency', array(
		'type'         => 'string',
		'description'  => 'Defines the price currency',
		'show_in_rest' => true,
		'default'      => '$',
	) );

	register_setting( UPWPCART_PLUGIN_DOMAIN, 'upcart_redirect', array(
		'type'         => 'string',
		'description'  => 'Defines what page redirect after a cart interaction. Current page if empty',
		'show_in_rest' => true,
		'default'      => '',
	) );

	// register the POST_TYPE setting
	register_setting( UPWPCART_PLUGIN_DOMAIN, 'upcart_auto_display', array(
		'type'              => 'bool',
		'description'       => 'If true, the Add to cart button will be automatically displayed in post content.',
		'show_in_rest'      => true,
		'default'           => false,
	) );
}

add_action( 'admin_init', 'upcart_settings_setup' );
