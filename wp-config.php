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
define( 'DB_NAME', 'i-worldDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'rDX=`*`$~$ac$b0[M Y)3&*yciCw=RcE564KTa2yY:^=/NT|E}nl(!7=}P@evfuU' );
define( 'SECURE_AUTH_KEY',  ']ef42LIRS)ir8{&k`w{w)WCBhw=QQ@P<22Y0|0Lg!n0~G,b#4nY:Wv*n#.Gjo]<U' );
define( 'LOGGED_IN_KEY',    'nXbuveAcC+;@Pi0)VZ5><]JEX(4s]O9-9xN=furW/@c6]w8$/_QEDSQ4RAaEHIR$' );
define( 'NONCE_KEY',        'fjr7+{sP!y9K,1e]G(ZGo*4~`2+PT:z:B&DIe4uilJT|Epg!-O/%sL$dVyDmKB0c' );
define( 'AUTH_SALT',        'Vb*:nDKp;wi^,S,7?=2^/:@IjT)95$Pp`7Z^1tdU<{h&bG6L>Gg=av,!s>bl,z7/' );
define( 'SECURE_AUTH_SALT', 'BT_=E:#@-S[!#E6A.(W}>#0bnp_Ga/hI{?)ByOp3zoLW;,{5s_*CZk2?xF>Ayn7 ' );
define( 'LOGGED_IN_SALT',   'wR#qSgN3%.V^_J3-2_pY=/7i$T|JJ|0ZC?I;.1nB #U:x[LG`7;Ch}SguJyA$f|Z' );
define( 'NONCE_SALT',       'mY*3t3|!!fL(>{dR=0; Cr@LIN*~I;L[C<-?i[L.&jAdzMcin>Vv-m.MA,TunEuJ' );

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
