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
define( 'DB_NAME', 'ezcuisine' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gh1290yu' );

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
define( 'AUTH_KEY',         'XHl6an20P:^LU4p,57}140ah]iNiZ5]^DWq)u5nlB%JMfjaCCQ3k=?I7gmtuqA7.' );
define( 'SECURE_AUTH_KEY',  'P4&e[qL0[B4.,I;G1rGW(J~/FDJM]0a0k*`v1w@ITM}$VhGNq9dk?`3f=U:|27n=' );
define( 'LOGGED_IN_KEY',    'yG_&L0y0}3gd2@vF}c;)eQ ,,}wI~l$S]WX?S.m8Rcn%]jws8@^^$3,cPfqn^%9_' );
define( 'NONCE_KEY',        'cTHkyyYE{s, *A.j0KVZ/me8y/J1L^GH[-,eFy`#W*-cG8$+T3m![oc3x9^pUCB!' );
define( 'AUTH_SALT',        'CJeeqFD^G;kr}nQZnWs<.HHNxr8u9duEiirh62H$rij-r^B0::EQfJ01MO%n}y57' );
define( 'SECURE_AUTH_SALT', '^+?=x&LyF%qK3Si1D.d.e+4flA5d1gB+_h9~H5xIvGnU7#-a#F #&V];-Go9`ZCB' );
define( 'LOGGED_IN_SALT',   '$RPQqO}axao@*^=4BMZ )]L6,%f1HyYQXw%K(rg4eaNT[Zpba;@G{A6AG#*Vt8G!' );
define( 'NONCE_SALT',       'Os9-+QyBGfC&ik0E*^MBS6[t9z@Xc9XnE):sg!dV{G<o(Q2~:}6g991O03 0*_De' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ezc';

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
