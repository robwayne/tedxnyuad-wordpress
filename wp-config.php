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
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'FLZ(UYREJszgG}tpAz.92B]}32YiJA@x@P[>tAwD{jR{$8m[@ tljlT9pJiYW8_j');
define('SECURE_AUTH_KEY',  'r~YEmu#*0iwP]VB[kRvwk/?,JL`Y`r*/e9<(?FptZt,5!tw23<|L:[O_`vAbw<EB');
define('LOGGED_IN_KEY',    'q6$/[~Ekph5ptc*fZz~7n0hb9ItT7iZMO V0zvQ%/oI.ht-;TtKs~FiFao@319TN');
define('NONCE_KEY',        ' |FuSFl+J(c =KO_/(W4n!=UcqMZ0yS2++ai}/pJ#ic%KbZX;%KXG8)gPD(pE]AD');
define('AUTH_SALT',        ']HvK53EJUgGw.Yg/i3|e4(ue+bmf0z4rX7.r)+)E)Yv:*WcEY,D?PsS~sfGH{B/`');
define('SECURE_AUTH_SALT', '^{o@3m*az8sWS`}XFcel!khIHeQuO^.Lf7mhy4D>kUf`?)>JV>A[m{dP/IRF9Pjm');
define('LOGGED_IN_SALT',   '@[!-!2NR18WLeL<&|9`438*-OxNAeV}k@uaFC+Cv6+%|+(3R$%2,iqWI@DzALieY');
define('NONCE_SALT',       'Sgjv)me~eZJE913?!)EZx}D}E_W4j 1>V<7]dGa8/R4UFCSP*ur0=4KRgr>29UEv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
