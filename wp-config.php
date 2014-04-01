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
define('WP_CLIENT', '/trivaco');


if ($_SERVER['REMOTE_ADDR']=='::1') {
    define('WP_ENV', 'development');
} else {
    define('WP_ENV', 'production');
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if (WP_ENV == 'development') {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . WP_CLIENT . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME'] . WP_CLIENT);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . WP_CLIENT . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . WP_CLIENT .'/wp-content');
    define('DB_NAME',           'wp_trivaco_dev');
    define('DB_USER',           'root');
    define('DB_PASSWORD',       'root');
    define('DB_HOST',           'localhost:8889');
} else {
    define('WP_SITEURL',        'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
    define('WP_HOME',           'http://' . $_SERVER['SERVER_NAME']);
    define('WP_CONTENT_DIR',    $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
    define('WP_CONTENT_URL',    'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('DB_NAME',           'trivaco_robchipman_co');
    define('DB_USER',           'trivacorobchipma');
    define('DB_PASSWORD',       'XkDukkxx');
    define('DB_HOST',           'mysql.trivaco.robchipman.co');
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
define('AUTH_KEY',         '+[6g-$J!]A<Cl)|-H d9.)2=hop?|RZIHOnrX=tkfYU:y~L:Y]?-;h1Xd`QGtf!P');
define('SECURE_AUTH_KEY',  '+AYf$Tt]q9a-#Kd+}pKsE0x&KH!g7m P(~P^kp]chcLRJBBOCN->@):Hla0orA|J');
define('LOGGED_IN_KEY',    'f(Egy|f{%E*F;7>((,kOcE%G;|<P+|V*2/kO6Cf[p[4>e~-Wg+Za5+pG~T|5*a{o');
define('NONCE_KEY',        'Q|;vpkq4FFoe)niWN-/Ks;o|vLxFd1hV&D}%DslLd73h+e:D~=I! ! Lklt;tM%~');
define('AUTH_SALT',        'T;[?3)8-J;`&:*5*0*Gu1l^%dEm&%D9#@)TcLC:ER{Ru=L-1?yl_bzVD<:50[jGV');
define('SECURE_AUTH_SALT', '{TR@+$sRr0)%)0gJkx@Zol6Y&=]dqi:+di%)r6u~#N38|,HJTMZEz&V+EubF-qHD');
define('LOGGED_IN_SALT',   'd5[uxAp%D#e921d8_JIKiKOWkl[f]$r~1@Gm{T,Y/,-N;gJ}O]h%:Hees-y2=c>(');
define('NONCE_SALT',       'a^J-RO:*e?P%Jq0d`O@@zszU>-|A99=e$Sc@=~OtnHnqpsMtGAj/gR]BTfsy|**5');

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
