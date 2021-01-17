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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ab' );

/** MySQL database username */
define( 'DB_USER', 'ab' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z+/s~Io[1*~1^GNyc]D2;}YEL=G-C|_QA> s?M>0{NnC15sSvyC&[;:/?EStOI_:' );
define( 'SECURE_AUTH_KEY',  'K{,K/,0?FW,{<c!zIX-,E*n^V9EnQ+ysf?On.;pYAN/p]]#]DiAyR&&L<bde$o-0' );
define( 'LOGGED_IN_KEY',    ',Ed:bh.B`i!WTk#x[NuZkY&l0W8gP8}R-L$VAUs*GRinB+^<-|243w cmwu.!2)D' );
define( 'NONCE_KEY',        'wBaqhlBHwn=*5W]*;v@TZEp,:: 6|m39EtgL#KL)C%$X/.[_I_bMs-E,,7P`7p*K' );
define( 'AUTH_SALT',        'D[Tfwv}s||f4r)tti9!A;OPb?;1*X:{4U%2B0+45t$wl#J:[jpv>=^+;oFr4!SYI' );
define( 'SECURE_AUTH_SALT', 't3|~{jZn/;+=f=r<UFjqB$x[{EPU;|1Rv@9}SKvi83e=Q=2Ex=rFe>(0h) WHEBw' );
define( 'LOGGED_IN_SALT',   'ijSg=G@M=*K5JW+@#)TESC~F<1]-@HBHlK/tcar67IT|yHHiPZVhZ1(b@- g!-^]' );
define( 'NONCE_SALT',       'v+ttZ!,#~F`bvgpV=c$1q]Qqjf+izF~_i5,Jg_El8ZI:`cxJamgL.DTz(UKe7(Ta' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
