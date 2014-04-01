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
define('WP_CLIENT', '******');


if ($_SERVER['REMOTE_ADDR']=='::1') {
    define('WP_ENV', 'local');
} else if (preg_match('/*******/', $_SERVER['REMOTE_ADDR'])) {
    define('WP_ENV', 'development'); 
} else {
    define('WP_ENV', 'production');
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (WP_ENV == 'local') {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . WP_CLIENT . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME'] . WP_CLIENT);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . WP_CLIENT . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . WP_CLIENT .'/wp-content');
    define('DB_NAME',           'wp_' . WP_CLIENT . '_dev');
    define('DB_USER',           'root');
    define('DB_PASSWORD',       'root');
    define('DB_HOST',           'localhost:8889');
} else if (WP_ENV == 'development') {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('DB_NAME',           '******');
    define('DB_USER',           '******');
    define('DB_PASSWORD',       '******');
    define('DB_HOST',           'mysql.******.co');
} else {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('DB_NAME',           '******');
    define('DB_USER',           '******');
    define('DB_PASSWORD',       '******');
    define('DB_HOST',           'mysql.******.co');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NEW SALTS');
define('SECURE_AUTH_KEY',  'NEW SALTS');
define('LOGGED_IN_KEY',    'NEW SALTS');
define('NONCE_KEY',        'NEW SALTS');
define('AUTH_SALT',        'NEW SALTS');
define('SECURE_AUTH_SALT', 'NEW SALTS');
define('LOGGED_IN_SALT',   'NEW SALTS');
define('NONCE_SALT',       'NEW SALTS');

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
