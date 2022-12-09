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
define( 'DB_NAME', 'madlozi_ancestral_wear_db' );

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
define( 'AUTH_KEY',         'w+pOTcG%g^%=Y#%N_9t+[BP]UQH*p1tmtz[yx0;-;kcGs.StGWK)y~pVn,KAp.DL' );
define( 'SECURE_AUTH_KEY',  'e!;+g~dXxE)`tM1e`7Nh-g;4<04nAPNDVBDk-#qf!% kl2bBm:yFR9zhySl-DLLm' );
define( 'LOGGED_IN_KEY',    '55mDSy=b@22 IKJNjKgc#dD8[+dDWD}LS~_*).jCYe2mi?,kZ;Nzq.RHCQGMd0e$' );
define( 'NONCE_KEY',        '/k21ags].i/{^+H&fjUs}g&YX5-iENP2o*;-=iUYI/sw,)|u+Kjtk8:CVaedl|kI' );
define( 'AUTH_SALT',        '#V7pFi@jT_t}rhz1+=f/MZ{j{R~(EBLHZrlBgfXd<H%ZMG|hDTrH!vMC5Pjo]O._' );
define( 'SECURE_AUTH_SALT', 'X@=!G ,;2L6wse1a4.eXpFUy!S,m-N#G5R|BxP<7S(xdphw:O^:_L(@|R,~6H&eY' );
define( 'LOGGED_IN_SALT',   '7QUD$de=tKx~IhWFa[zFF[uUaOG:h((K[qSYz#=[g|U@cINOGTP`!4q{EIdvC[z#' );
define( 'NONCE_SALT',       'D>k!NH7Ta/&STW:8l$!znWy-wS0TyKTuyM+H#YGnl[_m8l(T#@ pt>p^6Wg_qz{g' );

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
