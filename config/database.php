<?php

/** MySQL settings - You can get this info from your web host */

/** The name of the database for WordPress */
define('DB_NAME', env('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', env('DB_USERNAME'));

/** MySQL database password */
define('DB_PASSWORD', env('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', env('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = env('DB_PREFIX', 'wp_');
