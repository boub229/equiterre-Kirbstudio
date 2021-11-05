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
define( 'AUTH_KEY',         'N&TM~U9;n=$L(qBsM:0(!ao{R[NyyetgRmm(9%1pl7~h~vYM,@Es/U4b~Q0*+r`G' );
define( 'SECURE_AUTH_KEY',  'gb@bl<2QFK%IccaiX)u[HjRjAB[sySk}gm][;`el0`j]pc4!.#/d|FXrdc$R?Ow<' );
define( 'LOGGED_IN_KEY',    '$Bcpnk5]H;a(Upc5FEfm80m/+LM%_NqcgDQ&p&;M|Fr@95XinnocE:FMiPgQ;qc:' );
define( 'NONCE_KEY',        '<jKM;=w 4 SZi@{/%iJEa_$g9k)1M[/c,.Ze2kDdJf,:EbbZhnykT#94$@QkPe<,' );
define( 'AUTH_SALT',        'ItK&Xh!}>ZNZ6%U(!,jVTGbyR*E`u.9!1Y?$$iG1pa[O`^DlLKS@Jo;xzD}Qay.y' );
define( 'SECURE_AUTH_SALT', '*y~5q%}iM K`3N>a2rzX_sOnASM4`QD4_d1lgz8 Zn%6m:^(? *5Z-j6r#xH`Pi,' );
define( 'LOGGED_IN_SALT',   '[0Qz^P62>O8@lgFS#P64u4 u~tv|USq~&0&H,#jzmGBte}d);7h{n*&)5vNLOCrA' );
define( 'NONCE_SALT',       '/p5e~Xb2Pw-THMp|0d}RzU>ljZhO^$1p(5-EHsN{pN!>Z8,M HiaPM)2@@@>Dsr(' );

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
