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
define( 'AUTH_KEY',         'bIMv]clgZZo<]c0Iy??GnLn8n2B|CHPZ6!Z]kc!6%PNLNu6}(VI) Xn[PTRLan8=' );
define( 'SECURE_AUTH_KEY',  '<[*zq-_QPN&3I7#)LLx=X!JCGpCUZZjfD6./OG8n2SM`Keh4>9r_qh5Gb;fPz!(j' );
define( 'LOGGED_IN_KEY',    '8`d)^nxl#1>4HwPoeCZ)p{3mE2ovg>?^ZK2Fc?M4LVNyw<5D(QYJ3(lSrd.Qv,{:' );
define( 'NONCE_KEY',        'ZT%<)H-~#;KNkDXMTzgpVuV7CZ~s#O5eqs% anV4>(=J7|VQKGf$@?zGP=Lf0i:2' );
define( 'AUTH_SALT',        'Mt_a9V:bs> qtIB~Ac/7y~)N(fgpyz6Czj8iGgTeR]9c}]6hyncge&otbA$=&/5[' );
define( 'SECURE_AUTH_SALT', '::KQn}=q%f:q/vn#zKs4]BGv$q}b^1N^3bKL^yZqt3~*JQZb>cKBQvi|PCc)a t/' );
define( 'LOGGED_IN_SALT',   'v(7jc4sx.@*V~%QA$9t8)*hQ%[#=U~=cvYy~&P_m||S>T5W(KT*~[WeRM3jTp>SA' );
define( 'NONCE_SALT',       '<Uut2k@>-g,LS) u;lEzj_IyKpxb;7D([2VJ<p&C0nr<d-[e)PL FJFHjOT e8V`' );

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
