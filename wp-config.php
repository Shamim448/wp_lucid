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
define( 'DB_NAME', 'wp_lucid' );

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
define( 'AUTH_KEY',         'CZ%]*m$qsc;l~>1,nYO,?57<dFP3N`I]{&@@sF72u*YMKV6I)V(cVF~Q,^ZK-MW7' );
define( 'SECURE_AUTH_KEY',  '3]eKAh9eh-,@S6v%B~AKNW_c 9g+oC}oCN@QM/wOZ4SyQA=CWT-R)./5z*p^KD8=' );
define( 'LOGGED_IN_KEY',    'e] kLT{URXiZC:jBXz!x{^<+IE,%O^D(L*&?7K06Q,|u_Hr^+plN~T zB8fGu.r3' );
define( 'NONCE_KEY',        '(p>TC65Lc,JQ5it}f?Tt)``4&HNskblHAC>uXz/;<O6wHKV;_CT*cy#8vRgDU/Qb' );
define( 'AUTH_SALT',        '3-o^^38dDcA/n6F3@*WxP0c>sQ(E@Mj8)oys*_pEsh>-1TNd_BQ6u%O1i6Qdifp7' );
define( 'SECURE_AUTH_SALT', 'gYOHXhb0P+fDyX 4mT+ys1__.HG*Q6[s$(<JT> C=$T4ab|@UIx5/%I;M{4,(u4#' );
define( 'LOGGED_IN_SALT',   'NL]@:Af$0vz!2c;@nfdOwJ=+uCR)QEYGDq;r_-4}:84( b=f>Ljmkm6=b`jZC7X,' );
define( 'NONCE_SALT',       'Mb-o4DPGn?60;U(X5l^PnZsScQ2hBaRSYw8F+7<=i=cp8Y1j7y&l~ob`tdl6dlBq' );

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
