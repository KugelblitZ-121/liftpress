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
define( 'DB_NAME', 'project1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         'U%aLc,*P%^zk~qbBgoP>s]%Wmvww?u$x#Ha,cRf<<0)bMD.mK={T.&I}!kNBsa 7' );
define( 'SECURE_AUTH_KEY',  'r^/wGNAs~n!d/Pn^ZSl:syZ/7@E&X7a4kSSJRnB2s)~t=Dv_1`XVx.D>0TtmRpBt' );
define( 'LOGGED_IN_KEY',    '`(4ifY=M6bYK6|Hn,>P8pQ1jX:T^>(K1&y,nd2m5H#:kf8]64M)=w9BDECDR#2>{' );
define( 'NONCE_KEY',        ' &%Ht]U[!NY`sRWEck=!8XVNbo(cb9@`~#eYfT@lkgb0SXa_4V?U{TpD20-7s)y:' );
define( 'AUTH_SALT',        'RRWoXwKGW&t]kB8@>N&t1}T*B%on^|-J[7)dbmw$)4/Z%[W;];:HuDY?JNGPbDzu' );
define( 'SECURE_AUTH_SALT', '74P9SO~y9l0%U0]{:-lvw$#Z#4{g%:Y|3:1fr!>fVK78Y`TwqYV5&MV6-)?Jg#WF' );
define( 'LOGGED_IN_SALT',   'Dg*D<(0w$+=W?2A`^B#K0KAo^s^O,~H.?eaPd||gl%/D26E }0!`LrdKM7#&_/7B' );
define( 'NONCE_SALT',       '4=r36wj`=mD0,#l}8L41%`p5YoPPC&h,y7!R[liJddoOYt<GBT`Pn_2G!+aYwLV5' );

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
