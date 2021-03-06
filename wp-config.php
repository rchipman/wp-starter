<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
require_once(ABSPATH . '/../wp-client-variables.php');


if ($_SERVER['REMOTE_ADDR']=='::1') {
    define('WP_ENV', 'local');
} else if (preg_match(WP_DEVSITE, $_SERVER['REMOTE_ADDR'])) {
    define('WP_ENV', 'development'); 
} else {
    define('WP_ENV', 'production');
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (WP_ENV == 'local') {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/' . WP_CLIENT . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME'] . '/' . WP_CLIENT);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . '/' . WP_CLIENT . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . '/' . WP_CLIENT .'/wp-content');
    define('DB_NAME',           'wp_' . WP_CLIENT . '_local');
    define('DB_USER',           'root');
    define('DB_PASSWORD',       'root');
    define('DB_HOST',           'localhost:8889');
} else if (WP_ENV == 'development') {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('DB_NAME',           'wp_' . WP_CLIENT . '_dev');
    define('DB_USER',           DEV_DB_USER);
    define('DB_PASSWORD',       DEV_DB_PASS);
    define('DB_HOST',           'mysql.' . DEV_URL);
} else {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('DB_NAME',           'wp_' . WP_CLIENT . '_prod');
    define('DB_USER',           PROD_DB_USER);
    define('DB_PASSWORD',       PROD_DB_USER);
    define('DB_HOST',           'mysql.' . PROD_URL);
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
