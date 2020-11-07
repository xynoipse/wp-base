<?php

/** Wordpress Content Directory */
define('WP_CONTENT_DIR', dirname(__DIR__, 1) . '/public/app');

/** Wordpress Content URL */
define('WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/app');

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
define('AUTH_KEY',         $_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_ENV['NONCE_KEY']);
define('AUTH_SALT',        $_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_ENV['NONCE_SALT']);

/**
 * For developers: WordPress debugging mode.
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG',            $_ENV['WP_DEBUG'] ?: false);
define('WP_DEBUG_DISPLAY',    $_ENV['WP_DEBUG_DISPLAY'] ?: false);
define('WP_DEBUG_LOG',        $_ENV['WP_DEBUG_LOG'] ?: false);

/* Custom */
define('WP_AUTO_UPDATE_CORE', $_ENV['WP_AUTO_UPDATE_CORE'] ?: false);
define('DISALLOW_FILE_MODS',  $_ENV['DISALLOW_FILE_MODS'] ?: true);
define('DISALLOW_FILE_EDIT',  $_ENV['DISALLOW_FILE_EDIT'] ?: true);
define('WP_MEMORY_LIMIT',     $_ENV['WP_MEMORY_LIMIT'] ?: '256M');
