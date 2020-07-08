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
define( 'DB_NAME', 'five' );

/** MySQL database username */
define( 'DB_USER', 'five_info' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y6Z6elULZ3SG0z99' );

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
define( 'AUTH_KEY',         '6q<}w~|eX]KL*O=LFaz9#~V,|=VHQhsJD>1)>dMRgke0R*eQ5FBlQ .[FUMFMdUi' );
define( 'SECURE_AUTH_KEY',  ']X@W>}N4YfNsk Unv;IPkfTv=P9`Ic1p3Ff3(eKOoC9x72$t<FzI!g,I!U1Z}~*8' );
define( 'LOGGED_IN_KEY',    'Kw6H&Ov)GO;[h6;;J4N:AU2xocru?v3|6BtbR1*ly)TH&;nSSv+5lHve@[K1X_U~' );
define( 'NONCE_KEY',        'IZwAKPf+uMul}axOM2|ibbdk1_YCEOul7uX6XhP_ucgl{%}Wp@#/7b4EO]>hU.(G' );
define( 'AUTH_SALT',        'IuE^!q0o6ldp#]ht!E@Z[f{Eo7?IYe$g&z,?:OC#AXI]T@l8Q@#qa%qrJn8v*xu$' );
define( 'SECURE_AUTH_SALT', 'M+;xI|,1|UV lq)$t,ovIv^]*x+B*7!TNC8gB~gygMgi0 ql4)W<S17@2|}Rk`9s' );
define( 'LOGGED_IN_SALT',   '7=G. `R#i54V^A]Hk6z;oB^{!p]4Bw7$-thu?uX&9N(^^wurc(fK|0]vGXUryJ~N' );
define( 'NONCE_SALT',       '*)mXnu?=KKjn~bLq|~[#EsMuJ6wexZ.C/.ebDWYa,.>9EP5jMCg?6m!v.j7Z1_wH' );

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
