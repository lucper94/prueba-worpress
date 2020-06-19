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
define( 'DB_NAME', 'noticias' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'M&#F!i^[Z4ihIKc/^hZ}2TL3!%:H/&Yh2;oT(Ju,]&%nc}-E|27R,pZ,(]pxc]<m' );
define( 'SECURE_AUTH_KEY',  'U;-O;cPG{F3s{_ U}LGb51FML,uM44T(0%MeQ}eDK-8[2Ta/I1gPP?_c-olOyU3!' );
define( 'LOGGED_IN_KEY',    '5kquX[cu.(7*N2^r5#wL|.ps&9NT#X7`J:JM|KK+h%`NJt QnIvZKyJx690VRG2=' );
define( 'NONCE_KEY',        'T:.0:7?D;Ye|P:Ckk@cVz$4I`SD L ![{dnL<pDof`1pU=5/x:oSw$|H[yF ;o?#' );
define( 'AUTH_SALT',        '2wk(X~.XFabXRm~$1,y#:a|7Sgq(Y&.~w#5P|AO[|ma{PhV 2UN!c.Z@>29f 2{a' );
define( 'SECURE_AUTH_SALT', '!~K%mKp(ezfa7oM;T kqn|Rd:,6xA{eWM:EE${y^(XJ|=T&b[:C:xRxmWCPn~PCz' );
define( 'LOGGED_IN_SALT',   'eKlkt(KvUD$.4;$xzcD$U?7sNn4;3wP7|Z>YUSAwQ`Yr&d/Y&&p$FG}6TcC6wS2?' );
define( 'NONCE_SALT',       'nI>PK=X>(2csz5p^y!|yCS8Q6O2}eIRMA,3V&*$S6!s`0FQA:qAvlz2|}_3G P*A' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
