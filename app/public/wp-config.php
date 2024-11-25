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
define( 'AUTH_KEY',          '@s 9-Y/myD5T4JJ^dl&Wz(]?Uv+{yjdpWW7[p[RSfg/XRu&~~P9je4 !(awcCbW7' );
define( 'SECURE_AUTH_KEY',   ']kS/K0xeknXZTvF{ ^IX&{yZhw,=p>Iuxhn.6S#oR V]]F5N4jx6Kg5m?Wx=1*Kh' );
define( 'LOGGED_IN_KEY',     '84C]N-JgD*<yGQMRqkYLNl3nv/zou6%t9g].8b}$?UqkP3D3uHg1Ug;rGwK=wg+~' );
define( 'NONCE_KEY',         'OD5<a>H& ^R+G1s_#r7Xdh- nf?OTxx9a9jYOcmQ2ZC5A+gF!FAdAum);,XR/::o' );
define( 'AUTH_SALT',         'Xol4RNr?j%M%1F--iQAl-,:`u;2Pc:!U0864Zlse;g_r!o4bt5L2+,L)OkO>$dO|' );
define( 'SECURE_AUTH_SALT',  'FNg!xw&87)[mM1ygL:2{5!&$=NOx2Stsf5i`.TEL)u*qmzP+;S1-eM@SSE)<X.S&' );
define( 'LOGGED_IN_SALT',    '(=gb#;HDs^[/ahGvfr2}D;5%DY5j%_K0(lcvUbidp5];Z}86=7]<qZy264#>I*eP' );
define( 'NONCE_SALT',        '9ucq|d{mh`=oHDiFW]GF}wp.v[9R C]/vf~2CYo_&X+qJJL$Y+(O2og5J,M}nicQ' );
define( 'WP_CACHE_KEY_SALT', '&#ZU[tf2!}X;7>cHA1aH,oD?HRrb~W&dc4u2 H<jiuhTm/0<V:U;F8(AQ@r!TjHb' );


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
