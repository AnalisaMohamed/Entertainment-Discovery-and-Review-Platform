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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'w4J%b&~n[rl-L}5u{Qm3DI#om7.j7O$;i:Ur-8>hiE1s^L %VkP?AN85; IU(T{A' );
define( 'SECURE_AUTH_KEY',   ':r=lLfl.>wUjzZ[4:W|N-i+)-=NpB1e/!5VZsAmC]/HH/ pd5j+diiB>>F-*4! |' );
define( 'LOGGED_IN_KEY',     'tKKJ]9oLn>[,m%C {$:f]1!af(/UUpM0r!j)g x;ld9V!+Tk8Z- =q|Jo*Wi;?tu' );
define( 'NONCE_KEY',         ')dU tl7TORAV9IHX~@^lwI#PwcG&Fz_ro>>kPUdm~>W&q(76mZ2d6^n1sGR=^|FJ' );
define( 'AUTH_SALT',         'Ac/w3eoPCYdPV$x&s0zN?bHy5%U<Xr!C`6}ht|QTL$MAEr(]>Y*M+D(_O.st:klC' );
define( 'SECURE_AUTH_SALT',  '-LrvT+we6ToO#a4Hea7,xgMn?j4UBDR>$6p2?21/BW5YSwuCbJC92kcUHjNR;`RX' );
define( 'LOGGED_IN_SALT',    'D%@&$.yt8L7kYE&yP/Y}d%v`pJJ2U{L0tZDx`{4;!zQ3Gx7>GEb$rcu-bQ) @I[?' );
define( 'NONCE_SALT',        '>+0X2/KuEsui@:KKz,;,ER^yJ26m4.CVAc5W)`>mB).!x4x25ARp6d]N5I[sR$nm' );
define( 'WP_CACHE_KEY_SALT', '?=CBu:6gQJe)h%N|M7)%8]9R4i{HrXw;0euoY[AnHnH?&b&FBTbc&wex|QI={3qT' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
