<?php

/** Register The Auto Loader */
require __DIR__ . '/../vendor/autoload.php';

\Dotenv\Dotenv::createImmutable(__DIR__ . '/../')->load();

/** Base configuration for WordPress */
require_once __DIR__ . '/../config/app.php';
require_once __DIR__ . '/../config/database.php';

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/core');
}

/** Bootstrap WordPress */
require_once ABSPATH . 'wp-settings.php';
