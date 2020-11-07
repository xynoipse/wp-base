<?php

/**
 * WordPress view bootstrapper
 */

/** Tells WordPress to load the WordPress theme and output it. */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require __DIR__ . '/core/wp-blog-header.php';
