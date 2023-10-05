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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landingpage.github.io' );

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
define( 'AUTH_KEY',         '&>Y~ydv|LkZDh$^k.cK9*vS|#$8)_(:T2i,;V*#P7(SXL^<Wj[1$7GAG}pP~OpQ4' );
define( 'SECURE_AUTH_KEY',  '$Vb?iCB#hCQ-RHX1a^l/ t.5t#eU,wPZ4fU[waSbG_<jR* }ynWS3xfb1(KU9ggn' );
define( 'LOGGED_IN_KEY',    '!1Ki@]5{u<B$9Usz]0oJT(R=Rrt66>ZC?F>C~!#W{H7.;v4yc07W<d$K3L}q08^{' );
define( 'NONCE_KEY',        'sXZu^x_R4Y1Ils-+[.oVnyfV8e>~_{;ob*aX[H~d3[20~ct6{Jv&HEizCmrBe[j?' );
define( 'AUTH_SALT',        'Jg*z@sfXl!($D<Rhn]^Ym<V68]i0NP_?d$a-e0X1Xfo:5)%7$k]_!&W|hNyDe|-U' );
define( 'SECURE_AUTH_SALT', 'o(eo3-gBykUHtW5MQrK3Tbw.7|{)]@}jtevVA0V(T}*8cTfHGl{k2oZ//OTk06_H' );
define( 'LOGGED_IN_SALT',   '{C7gYwUdSWJn-`25|1+e{Ufp:vHY`{RI)a&@mT:YiZ=lKiJ*P-`*x@Gd|+b6kj9.' );
define( 'NONCE_SALT',       'K(kFRI0o[`<j~fH#B- <RS`?=d@|fCNk&$: @?#(:r@59)<ZDMhc([g-E A7I&=v' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
