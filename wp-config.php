<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'Website' );

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
define( 'AUTH_KEY',         'M/yj<qH.H5.W$?zpRwx@C/a|/.?XL(|U?k-H` %W~MT57G,&qU/.00C6|Rcp|zt ' );
define( 'SECURE_AUTH_KEY',  'jUT10@_WernM&{V4fZ:G{~3W>p]7lrO! #_]5hMfmB$n|<1N2IT5rCl,)?k[I:0A' );
define( 'LOGGED_IN_KEY',    'XN;IMCV*%&{s?Ihipv!}-fD0IAie+%&}`l{%)@bq0l_`0+)x[18DTR%{lX56D:wa' );
define( 'NONCE_KEY',        'a$m]>WRVTe=H-qJzpSYW an7.ud7N(@v0$kg4v%.lqNT1-bF#(B>E{h&in{zPxIm' );
define( 'AUTH_SALT',        'J$lWO1w]F:8!TAM7q=uo=0(a%m[]8,E}hI_<va%u{.WowC.lz6:UDK$}[n_PVD3C' );
define( 'SECURE_AUTH_SALT', '7sHo.UUyUc.C9gm:?2/8%5xt$8 -g5*]LT6lBfOSVyHMj(Y_%#}2h|R;[}2M!#H5' );
define( 'LOGGED_IN_SALT',   '0&4Dk2@>eYPQGvJb[E@<?)`Bc!<rsty3zEI~b-}A4;IkItd>Ksrsr7ubT/B|N7JD' );
define( 'NONCE_SALT',       'e]k!0;!8?{m42@3vl{aW#w~~+:N4p8+^ t<uOO3$@8d|Z(u*9=[y9)!a>$;^1he^' );

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
