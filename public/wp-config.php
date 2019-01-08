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
define('DB_NAME', "floredesmines");

/** MySQL database username */
define('DB_USER', "user");

/** MySQL database password */
define('DB_PASSWORD', "WemtS7oq");

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0lQ}[h_^,`x3.U5x-&{Y~8td*lG@)}*%f+nn1S9E)JH&`A*VZeY &e8g){Wd/f$^');
define('SECURE_AUTH_KEY',  'tD,zfXC3I]LM]0tMUlS1SaRz xQj?8xzz{dymbn*+j,$-$?CCE+-.~V?u,Jcbn3P');
define('LOGGED_IN_KEY',    'vpxT4M)YcJk3Fzg$eQ+/nF$4^19{[CvcAUm}[e?+n+%6?&7Z$7?[h$~]?|~tpa+f');
define('NONCE_KEY',        '@$P-40tA6+4;*G|s:Zgym|HK@/ggn`$jD5-3:(K;XGCgVC+H$OtYb=}9_V$N,}7Y');
define('AUTH_SALT',        'q(:;b>Ps_w,|%y{m`L0(n6F~2BSaL+S3aNq)1&zq~KLM+zl14`d2<$~[5IbNlTqk');
define('SECURE_AUTH_SALT', 'O#|%%h_+}-Uef>4Zb?AkFdC?0lecq}*H#|(r41,hE(@v^]e|KNzhU}DjRm#.n,9e');
define('LOGGED_IN_SALT',   'qf+_{(tIU/3AKA^Gl0<@g<8:c.S5sbH/[zv?*?1RMj3J{81.jMb9PTXcC+!2p0:-');
define('NONCE_SALT',       'Iy[|u?u2)%q/Ah9j%z!>|v3~kIK~|z1ZX9ni<)|W$QI(u3FY%:-I;uz1IFTM iwW');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_floredesmines_';

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
