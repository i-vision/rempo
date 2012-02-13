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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rempocb_cz');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Q~Bb+a6efB9rl6_8=88xAynN.TX{]CHj5I)k&7)-/rNTN$Wt9^ccP&1@v^:m0F-2');
define('SECURE_AUTH_KEY',  'uo<[ICB6??K^wRq^*/Zrq9m+)/s@,6!hRTu< |jQD}ZvLRFubJ)i&&!LqU<ibW|F');
define('LOGGED_IN_KEY',    '<pw$nA9gn,|+N1g&if;b|1`$[@^<ty;g>3E&K`5:&.E}{]!K!YCI*{of-?C6]Iyl');
define('NONCE_KEY',        'KrzwBjTDdCI)RhBBogehW# `004Il_PZ<NOJfka&b(.zY?:rKh=mpoyDj/}1hCsN');
define('AUTH_SALT',        ')/C;a]og.Di5cH@rAnT}DK%> TFiOe;ZS#Mtq{3rJ[GHLYf}UW]Hr+RVImDV4njt');
define('SECURE_AUTH_SALT', 'U}=tS<a5w*zN<-Gl={o$XHaE`m6n mZ<zI,u9X-[)?@U_g-`L!V!7 2xd{{]p{1C');
define('LOGGED_IN_SALT',   'Tk[L^2 BO]S!J;^0[KIVz;DcpUZv$r f]YB0ZY%dm>8uId,<Pl(5}}HtU*qrX4BM');
define('NONCE_SALT',       'm0s!c};gNeH}|U3W]du @~=7ypy8J?j8>+EcZK`2~H#MoJ0 iIL#m+V=yigCS.6r');

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
define('WPLANG', 'cs_CZ');

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
