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
define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASS') );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         '/rT7U_ Oi]@JA@ZlgS#*Fee2KDpHBaF$=0m0u3FY*^11FspMWzP?RWq$Udkwk=j4' );
define( 'SECURE_AUTH_KEY',  'eyudN5z1[LwR?4.aV!u>}QRf9eK%$n`LyALXj/j#]zE(bvx8;/#Sy?)z]D{&M(,x' );
define( 'LOGGED_IN_KEY',    '|F*,]CpJb$fMWcd?>XNQt:o(u?j;_d-}=CKOo& D3BWUpp<$%2qNJX;u]W@-1b};' );
define( 'NONCE_KEY',        '?Z-c9[sX2X=kn@?;3jpq#+UcoD5 V.-]Y/Y} .}t*Oyn@SZO$;[)W wDoD)io)U?' );
define( 'AUTH_SALT',        'pU2@ Z*WqME?=NYOKHaq<:CquzzOBLmH@eif9|Vog9JH>Vh<B+/1sQ;.4KNKS8W6' );
define( 'SECURE_AUTH_SALT', 'L-;`A?>mO~/FFl`K*lgB_S<3d}S^Ybc,Z*dJU)E]SG,J~ IxDQnb}3-cPtxj^QXW' );
define( 'LOGGED_IN_SALT',   'm!~xDz]owbk[pBg,#g71h(Fe([Y8X0Z&:99/<D+Z8sUg.MA=h>mBX!;Hp]~|Gtwb' );
define( 'NONCE_SALT',       'RC-@d:fP1y`t&r/D<ZwE?vFX:QF!B+|hLg].Gk{B?YJ6}]6vGHxE15bC]u@xQ=71' );

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
