<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'danielscott');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.l%Qb!gnW_R9m8^^6t78N+/hdn|(PZ|<Rv[8to,|KzE7/]O,8KF_@FzD+5WmJ8A-');
define('SECURE_AUTH_KEY',  '?z-nzd+V(K&^r[;!<$RMLJ+5q%u C-ob-z+Z,|zT:9+=_g?D^/kZ-xne?IDciks)');
define('LOGGED_IN_KEY',    'B-UvFkDuhlo c(Qj5JbCjIw1]/.*hEV-4s1`(1,B)m-D _x}#|xF9t_(x5<aw($}');
define('NONCE_KEY',        'x^7{~kSQpSt>IG%9PajBNpN@NePJ.$-.1?Fd:-4=fgB|yyAF6_>.r8very#C5aQ`');
define('AUTH_SALT',        ':_ZZ,hMEeo{HiAB?WaZ2EUa$pfP]Pr?<-gx6C?{QWZUDzi$(kLq?RA{rt,4d#L}f');
define('SECURE_AUTH_SALT', 'k8g=9_(FY5s?x`MC?^v.cu?FZuy%ud^s[:Gt=PODk_(W18N62t_8YNbqp+ ~afhG');
define('LOGGED_IN_SALT',   '4k6fR~ujh(I1i:xCFieB aA)``+G#iW!AHt9aVGL+/KN-h>:3SCpbwZ.[Q_p!Jak');
define('NONCE_SALT',       'Q~q|X4XO.fj)ICDblwJ5LtBAlwQegGz|d^*|%p2F+qESI+Gl(Qr4uG?4~OfX(K2O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ds_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
