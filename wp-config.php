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
define( 'DB_NAME', 'oma' );

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
define( 'AUTH_KEY',         'TkA=p[qSOF[0kLbA9UUy^C~eS|1vpE,r`T6/LxX`u0X^GD|LOG#%Vxz)h(Kis.,I' );
define( 'SECURE_AUTH_KEY',  ' T]z)DrKs761>X&dW}fBSfy>TFSHuO`[;tKe2UkGMfM;CqL**^B`6-&*4xS(0<RT' );
define( 'LOGGED_IN_KEY',    'brx6ABHS0vY/[gQ4D9!dA7q&l]CY:1] #Yq[YeJvN/Z=iyLGHGeAW3W/brn^WD,t' );
define( 'NONCE_KEY',        'sZ{5y])wxn3jU-WFu>N]<uh},0pP=a+is)hZFDO{ 2&mO]o?Gehauc1/1qFZrc`+' );
define( 'AUTH_SALT',        'd1#pP^2dvmshjMVlMMB%*a0C.Xci8.kxN{^. qkcp;WZVC.>Ky!_dk{tir3c(]xh' );
define( 'SECURE_AUTH_SALT', '682w1M5%udts7kTdXDKPzmz,}}h[5>%YFkv`?8;,?[*Wk9Vr<q>WDP`w^wx9Jvy-' );
define( 'LOGGED_IN_SALT',   '`60f1[X+<Z}%lnjP_i6kp~4l}ce]S|r3+_gyj^5M@tRUqP?HT4jZ2k>g`UG0#lxn' );
define( 'NONCE_SALT',       '5G(:dB.*;_hSKjIQnk|(~|=~)#Rh]WyW0O-2N%2Xm~R~g,T|. MXe6mlnuXP@<Lh' );

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
