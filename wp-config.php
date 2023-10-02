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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'beautyproducts' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'm{8N<_$0]::qzz$lTY5~bLt+l6(TCBo9VmZJrw4m2Fo]GuQudfij~UZu9w[!{}p&' );
define( 'SECURE_AUTH_KEY',  'jI(2`DNL)B;`25$YTI`v.o[?s$:sib9sBU$W#b$tlad[QL_]Pv!;F+ xI^v W^59' );
define( 'LOGGED_IN_KEY',    'D1-.(<LA#ul8L(.cTA]>x4zeY<;/]^KrUo~_<0iQe9lz?tf1^XJ/f2^Bc6H[m?0[' );
define( 'NONCE_KEY',        'j`:7iyK6q OAWrygZPr glFM/~`z(hTE;Uf6WPTJP}qx5s#}1bdSDt0oie?uS/rY' );
define( 'AUTH_SALT',        'U$+pAhWqB5[Xy6.hs1(#~O[q:VYogPRnZq4T0l!OMRsoJnpAG:WF]1L-;,ms*w>(' );
define( 'SECURE_AUTH_SALT', 'itbDRpj:B)u:n$-[#$9GJ+z{,6GdP2Lj:[z.YyB22x:B:;0?|#73p4Hc $nBm&H:' );
define( 'LOGGED_IN_SALT',   '{R(K1cBRcNnvh$.[1+hVsROCQs%n*W+v=l?ky;63j8@MW5S|u#GU@:Tp;!fP*]{u' );
define( 'NONCE_SALT',       '45S_JLGZg>iy}<H5Yaz (=zOR.*#[QYjKBs{ei2y!c|gp0<x9s]DF_qqbh9F<CC1' );

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
