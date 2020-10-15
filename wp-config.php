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
define( 'DB_NAME', 'teena' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '1;[&/@i@@p<~n-8n+vVef>S`-CmMR:yZNM/~M:LRlhzpUV)Df(_^9QSrj1A^Q)Nz' );
define( 'SECURE_AUTH_KEY',  '.ea}))U`>6c{/S?WSXNl618{ogVghL#.LT63?sA%|g- bd<R(}^)$p]YdvZyo{^S' );
define( 'LOGGED_IN_KEY',    'qjLJe~Ml9X*Xv]ndXO@hox$]`-)914Um7K-X0}{70$|vmkUf;!]VKd9I-7K}esPG' );
define( 'NONCE_KEY',        'q;Y[Gw.EWfRq*D6$88s124l}(?pk9s;XFD_z7bA?Sm*&3u7[!yi;(5#{]w?`xZh:' );
define( 'AUTH_SALT',        'IJ^*RKO+8omOkkdlSrZ2aEczv)^>Hp:)d@*3H@^)1=oX;R!qO[fo4:aQ6/{gM*B>' );
define( 'SECURE_AUTH_SALT', '~2C|=mnMBMm]1`s;8x7lp7#J}3d11O:nYpEYK@jG3a eR~T=5== ej8C1-H+Vd6$' );
define( 'LOGGED_IN_SALT',   '+OKAzN4RcTc;T;f248@ze^If0JaJY+ 3Ie4}%5iOhcoGiZcG/ssXIm>XSPAs[u6H' );
define( 'NONCE_SALT',       'm)%>@nGn` 1R-z{7d$ZlTP[vKV6g*[+]6t7;M)c3snD-<j {<^K!q~pLI3kHZW0H' );

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
