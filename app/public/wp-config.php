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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>%}Lq?-TMs }XY3)4A-mzq_*dm<Kt9QD8xI&3Q:m!<]_yWl2,d5Xo3z/*!ag+9,%' );
define( 'SECURE_AUTH_KEY',   'b)%T2kcOyneH5X)U]UvWvZP=2TDBMPTZMaH#&.>e+y85z|nGn:35xF7Sups`z)_F' );
define( 'LOGGED_IN_KEY',     'Rhz9QyB+n;^z)n!@9$BQ_k@wdqKoi*j d/0:{@rJe!z.PZCmQsvO|7w)8MgT n>2' );
define( 'NONCE_KEY',         'Ky%}|`aAR0lpM5Wx(/i(M9t_xC>%-PD|xCJ*$SA&HP2>SmdddtRD6LTU.p:Ktt+I' );
define( 'AUTH_SALT',         'TXXa.3qm Ifv=;zCY(J#&T@o|]Uv KWA 7*Tv.x8DT8V2uu/:|L0^*1Ktp 9T{gY' );
define( 'SECURE_AUTH_SALT',  'ZZMX@SzZG[Ta:.r^-!x0BfIR+9b`t,P(}/@I^2kii2Rf9ydg`Y($#2iK.b+0c[9O' );
define( 'LOGGED_IN_SALT',    '1/<fPAPDS[1ShcFa<GbjAVb!|}V0.< O]cmc8D{S/dw`K:X|`s;>3=1.>]-rPFgj' );
define( 'NONCE_SALT',        'k8w3_I-DBPF.z*2J6$d]t+Utmw/,)_Z>cA0T|]r*&w0CzX8tofmi}E,|*%<VZAl/' );
define( 'WP_CACHE_KEY_SALT', '#uwzpTQ$/(eAa&WtE<w->!;&||wz_/)4Kmq)}DJlQ%:-aYNb{P:Tv+ ?9kFDRQkd' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
