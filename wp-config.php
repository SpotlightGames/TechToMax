<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techtomax_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3Hm&4SV:*:=)CnG$vz7ep/9K!X0h$od!tlc8gUDhO-b%wwty,V]Iup=>B`s%>J^w' );
define( 'SECURE_AUTH_KEY',  'gqCyeb>Y77AzA/X&H+1w#n4%mH(MXUnKH]j[P7Qz=a=-}IeVxhXIwMc/r}sU05i)' );
define( 'LOGGED_IN_KEY',    '<x|[V1boMlhc-0|mkqJWmxjlT07Agn(_E@+.O=it4J2}/A_{I+!nIFK9_&H&5:r$' );
define( 'NONCE_KEY',        '530NF}88xxc05whh7 Ji(a .q]g3*WsMXn12fFMTW VVvHGn /B`>sI7nV g-G+W' );
define( 'AUTH_SALT',        '|mU(97wN+vI0=+bV!*@uOQU3F[O_BrCULA9>P}>g}1uMN1P~N6 S^ajHRl><keit' );
define( 'SECURE_AUTH_SALT', '{8!?^7):~ud*V`1`0,Ja8L)(%oO`N~]H|AmkpwU3ByCU@GTd?2>>Oaa.!}ii)i`i' );
define( 'LOGGED_IN_SALT',   '<x$2^{aWAOBF3S#4Ro->f}l<I;]R[a)es$F%E$ vapM?ng{n_m0A+p;wx*[6Llr#' );
define( 'NONCE_SALT',       'L1hRMY=*|M-DKO8O}: |<a]V^N]lJ3KVc[`_/~u6`d0ySxjV8U%bAlowKCiD3*Oz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
