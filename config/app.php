<?php

/** Wordpress Content Directory */
define('WP_CONTENT_DIR', dirname(__DIR__, 1) . '/public/app');

/** Wordpress Content URL */
define('WP_CONTENT_URL', env('APP_URL', "https://{$_SERVER['HTTP_HOST']}") . '/app');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the WordPress.org secret-key service
 * @link https://api.wordpress.org/secret-key/1.1/salt/
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 * 
 * @since 2.6.0
 */
define('AUTH_KEY',         env('AUTH_KEY'));
define('SECURE_AUTH_KEY',  env('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    env('LOGGED_IN_KEY'));
define('NONCE_KEY',        env('NONCE_KEY'));
define('AUTH_SALT',        env('AUTH_SALT'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   env('LOGGED_IN_SALT'));
define('NONCE_SALT',       env('NONCE_SALT'));

/**
 * For developers: WordPress debugging mode.
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', env('WP_DEBUG', false));
define('WP_DEBUG_DISPLAY', env('WP_DEBUG_DISPLAY', false));
define('WP_DEBUG_LOG', env('WP_DEBUG_LOG', false));

/* Custom */
define('WP_AUTO_UPDATE_CORE', env('WP_AUTO_UPDATE_CORE', true));
define('DISALLOW_FILE_MODS', env('DISALLOW_FILE_MODS', false));
define('DISALLOW_FILE_EDIT', env('DISALLOW_FILE_EDIT', false));
define('WP_MEMORY_LIMIT', env('WP_MEMORY_LIMIT', '256M'));
