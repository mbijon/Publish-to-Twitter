<?php
/*
Plugin Name: Publish to Twitter
Plugin URI: http://github.com/tollmanz/publish-to-twitter
Description: Allows for publishing posts to Twitter based on category.
Author: Zack Tollman, Helen Hou-Sandi, Jeremy Felt
Version: 0.1
Author URI: http://github.com/tollmanz
*/

/**
 * Set constants
 */
define( 'PTT_ROOT' , __DIR__ );
define( 'PTT_URL' , plugins_url( '/', __FILE__ ) );

/**
 * Wrapper to initiate plugin functionality.
 */
class pttPublishToTwitter {

	public function __construct() {

		// @todo: think about adding these files only when necessary if possible

		// All functionality related to the ptt-twitter-account CPT.
		require_once( PTT_ROOT . '/includes/cpt-ptt-twitter-account.php' );

		// Handles publishing the post to Twitter.
		require_once( PTT_ROOT . '/includes/publish-tweet.php' );

		// Controls the admin page for the plugin.
		require_once( PTT_ROOT . '/includes/settings-page.php' );
	}
}
$pttPublishToTwitter = new pttPublishToTwitter();