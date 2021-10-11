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
define( 'DB_NAME', 'johannvj' );

/** MySQL database username */
define( 'DB_USER', 'johannvj' );

/** MySQL database password */
define( 'DB_PASSWORD', '11111111' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.metropolia.fi' );

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
define( 'AUTH_KEY',         'tJG]dnQYC^s<p^Em|r,mf2g3g)&Trc;3Vf2,eN*PYB(ca6`egcDNsEiMzK{l{s9X' );
define( 'SECURE_AUTH_KEY',  '9RHEk+3U^y,exiA-36ArAzJ4vqcWn`%B6z+c!dV|[nxX.S0tCGc{k[s&n{+b4UTH' );
define( 'LOGGED_IN_KEY',    'x%%{8dO^sF:sEe7)T52=)tD(_Y{Vs` _oJmnI]@}KZ>-j#1C[c37g%G2-,O],Zg&' );
define( 'NONCE_KEY',        'FrmXb7ez?KFaN`@}p)%9hr_iN4NUQmb:H)x?7`Se35_@._;^w=,[5X2hYOy)6{Qy' );
define( 'AUTH_SALT',        '6Sr-P@F+}LD*yBQbY6c/i.t #oPXPZ3y#qX LvDjYn(p:4=<%e`wd&5 M@ &*GLZ' );
define( 'SECURE_AUTH_SALT', '>W2cSk]:lX2. [(KoKp]@T:SYpfJG;(~l67G>QI;U$qjn=oNmw%G]yzE/9I>0b9#' );
define( 'LOGGED_IN_SALT',   '`SiF{kB^+*(W.[y,ezh*v?mDL5MN*?#;Ru:u!7;+DVJ(?<,`dR.NAB[%ycqiB[8s' );
define( 'NONCE_SALT',       'qf*E;H:=T=(vKl6hMu#1sr_,#P<7JktBxj,j $tI(c<5w>BX-F?a_iXjVm^oWpi#' );

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
