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
define( 'DB_NAME', 'yondraco' );

/** MySQL database username */
define( 'DB_USER', 'yondraco' );

/** MySQL database password */
define( 'DB_PASSWORD', '@3kHRw3NeRmZR%-' );

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
define( 'AUTH_KEY',         'K IIV6t6ei9bLgS;@bSAhn&n@q&4%*~cx=hr/hMbb/N?,p^u)?s4z7PFQ8Al(J:E' );
define( 'SECURE_AUTH_KEY',  '30VSa7gK&UAi4CB,<9&<!1gL9K(jb9#d-b)uw9EVilpHKo=xK<LFAd$L/]z}pUxi' );
define( 'LOGGED_IN_KEY',    '2VEp?%{%79E-{8+$(Fu W$L)xnpDm;Uf k~WB^Vl{8:n{RY-Eh saS=Ro6u:JE]n' );
define( 'NONCE_KEY',        'FaUN44wgY!37bb24ENThF[R<S-a+O!S5Fi8oP11d)c+Av,u5VwIQR%4v!Rxii$|G' );
define( 'AUTH_SALT',        '|fcTULW-60TG6M32Z.qfKftTY%Ci/H$k&.v&%a5JV9|Cr|4>o=%3?+J;B@9&bSD?' );
define( 'SECURE_AUTH_SALT', 'Q53?H+<,m[*b.x/2=0SpW4~:]>8D/MY?jh%&2!rP9j|xXm`qtnkF+a!ayqA&2JN=' );
define( 'LOGGED_IN_SALT',   '7d{[K_W JufXnG{:ksADy?g$V},5rm^$ObdR|bs7XSscwr1ZG;a0C2(B|(;<gb8U' );
define( 'NONCE_SALT',       'F|1M{wrn^5UA|EpC!M};d (=_O6kXR- |-anJ!,U-Npl+aZ>JXrR]#5^hu:QG vt' );

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
