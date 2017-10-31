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
define('DB_NAME', 'coktai_b-tautvydas');

/** MySQL database username */
define('DB_USER', 'coktai_b-tautvydas');

/** MySQL database password */
define('DB_PASSWORD', 'istrekintitintalas');

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
define('AUTH_KEY',         ':^t=F@|`YJBD5@Q1ylswH1<c3c/TU>z7BcvuS(JVa>XF#{(5aVChwld@Hn<~gbgh');
define('SECURE_AUTH_KEY',  'd,W7n[H^Ik14Wm aa]<(NP%j@s5d`DDN}3>LpI4omyMujW 4$ [ux{x&|h2^*{Y/');
define('LOGGED_IN_KEY',    'rVm&[=#mNC)?q)F:yj.C3q%RTH:i tchwq~r@]k<*:#gxb+Cxei!dlqcC{R+5w5)');
define('NONCE_KEY',        '^^s3^g0xGw3aHM}n&w=[Dl#>{Fd{M[gP$ENz(#ooSDRvsM?23{FPz@DGCuhArKBQ');
define('AUTH_SALT',        '#zc+ ~p21N*5R~38MScdjmj,24EaK1V0J`1Nk[*O_+^$NyzG?,axZv7nV?b5}}E3');
define('SECURE_AUTH_SALT', 'cQFoMRrPF&?,]27H[K5~>Md4NkJt^RowF0?H+gvAZo:6O?vNV3g;P;)G&e0[ YQ=');
define('LOGGED_IN_SALT',   'i:67,f9ljewYD>5.w;Aylym&(Gb5duKz$r3v4}}6GUw6!Cxm_iDWQ,$dyDO|D=Sb');
define('NONCE_SALT',       '93DMvtSRF@skgDJ9pDVB0 nql~XQv43&->wnpuvfl<!av [5fxWJ[niA5>yk_1(E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
//define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
