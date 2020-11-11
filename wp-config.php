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
define( 'DB_NAME', 'git-hmr-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3Mf{x/==L#1g},$RsL[<a.+|MMFMQm4>~5RwyThj$X%%|yU@>mV7u>.d.7[{{HNj' );
define( 'SECURE_AUTH_KEY',  '(`QU-4Y,xokJ&Gml(N7=AHgb[jfZ)Ul-vX$4rG.pPuZz1XCj:#bYIEYLO 6xt`HS' );
define( 'LOGGED_IN_KEY',    'E{J/FR3*QO:_Nsz1d`o/ LjikvF*j6E/mNbGC(6):IS?L02/I2bOq~gRMr.:BblH' );
define( 'NONCE_KEY',        ';-P8O=7{wp%Y8_PR=Rf?W]=G<2PUvkTTw%~PBm9Su*,g#vQ,T3`1LXe6w|h!8KVj' );
define( 'AUTH_SALT',        ']@P!}JbpQDfW4j<8UDQ!hIN14U|jd[=Cr_V25?S~|!aWHM5=RCecX!V8TR[PVjEP' );
define( 'SECURE_AUTH_SALT', 'p)X6 sKqg2a}S-f4oO)nZuUzM.^){z#<SOs65};jg``^:dz[~nJ;KLV4m!6|]u9V' );
define( 'LOGGED_IN_SALT',   '$%WXvwol:k3}JiC/EVDdyZ`u~q4HY]1g{PYZ+ <2zL{f$eXDl>g4t.lQwgqc3k6V' );
define( 'NONCE_SALT',       '(#XURu|`ctM@ToZXl%5;[`X+|>XLv|0/|?I>!%MT($#JNpGH|K1m1+l3DBm:Fz3X' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
