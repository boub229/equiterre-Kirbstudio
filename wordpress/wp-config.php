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
define( 'DB_NAME', 'kirb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '61,Len9uDVlhfIS+ey`l<b>uoO33/;EDw#H>M{ONUviS0G6XZkf >no 3eO{2z#G' );
define( 'SECURE_AUTH_KEY',  '<VYaL7EHG>$H%yl)k~=|ZZ.9VhF~vSD0cn xiPNy!u*?u `TiCIf;*1?;/V3qwya' );
define( 'LOGGED_IN_KEY',    'KMgng,[@5`3r[.*W-Qa4UumDP50M$BNY2$ilY(84l&IhcA#Ugarf5WfOLr|!%YOz' );
define( 'NONCE_KEY',        'TM64a}RUUW9$q-:^:,M+JHK^E1:#<O9x/JAdzg-srFDdFuBWJ^1szA,g$0-ZHXzq' );
define( 'AUTH_SALT',        '6lS|gPwZ1E;RC0VR}1wbhjE/TtdO9W`+_(I;P~YP$PhWra5}6?S`(o65&}^d0^2}' );
define( 'SECURE_AUTH_SALT', '&Jm5~3fjQ*/]z rjmg~44YmeNvl/_tyafTyS.SpEr:(TtN+#u@.]*lhPf.>zfRo<' );
define( 'LOGGED_IN_SALT',   '@N4mwb56cdH%y]yZxhq.3lc<y3r*YL)5whHPU4G5Rh JKg :FO5u)T$5o^1]B5<3' );
define( 'NONCE_SALT',       'sdYvb5:IW.5>1}jMVtb?q(_clBam$J!8U]]q%PW9sq+h$AMTeUv6orJ*LAd3%4W,' );

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
