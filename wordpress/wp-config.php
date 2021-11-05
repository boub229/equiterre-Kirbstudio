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
define( 'DB_NAME', 'equiterre' );

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
define( 'AUTH_KEY',         '/D5D$R4u).1W_)e=$;+.$LZ}h7oTzrtHD}+Rw#id4a0Sc/_jpHY{B03Qyq>@PQCS' );
define( 'SECURE_AUTH_KEY',  ')TgX=z{O`~bXAbb!C!?B`mjy,2@XpO_eRyqLc(*io~q0nNIz9 RW}#F+_4bE*-?h' );
define( 'LOGGED_IN_KEY',    'j9<&yDw:(/Ym%sM2g ,,^/IGXe:jYw:Y{][*!C5;dr*!TCG~!=#sa^|o)VZ6F[)M' );
define( 'NONCE_KEY',        'W_,C#Fm9o7<#MQ){=:C.r+a0RHRc/<^X?afwE,u~eL841=%qa&R$YxD9le`%Y`+T' );
define( 'AUTH_SALT',        '*)`vJ? Er? ]4#gtO+ s:~;DTCB0G,p=haRE..j,E1dW}bqDM!n{r4<yEQPP$Kje' );
define( 'SECURE_AUTH_SALT', ' 1FNm]&?Z!n!W<tJ16lWrw`%Pq=i (c;35R`sg cS}:!z[=S-K%44TgS3|muJhE!' );
define( 'LOGGED_IN_SALT',   '[s)N!eS#9)VDho6a{BHW&2N7 Rcg/kPjGhIjmp[=kq3mY0NOBWn>g!YBB~5nOK1=' );
define( 'NONCE_SALT',       '^g_:x~{n8(Q+R$L=xum7MZ(5j/CzQtgJ<cD&kKDM%q|h?}s9&XnRuPQvo[xjGpLd' );

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
