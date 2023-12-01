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
define( 'DB_NAME', 'bfcwszmy_webtuata_magro_db' );

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

/** Define imagen SVG */
define('ALLOW_UNFILTERED_UPLOADS', true);

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
define( 'AUTH_KEY',         'ro:Z&/ve1)ouL*<e]OVcJpuIlIn#FaXbJv(&h1II:$~X+}XJ~(@-Ep9V0ux#NksO' );
define( 'SECURE_AUTH_KEY',  '~-_9R;:Z2d>}G=|5oAbUN6XRx9;?HHi^=/]y_{SFTxeUov9+`_*|me/*f!;s(Xk:' );
define( 'LOGGED_IN_KEY',    '9tD.@Y]V#D4lCjXK]Dh^r?vs=Pv6~96Cq[c/g,x(y#eGF=zU?/Q{6I6*UyukPz$M' );
define( 'NONCE_KEY',        '!IUAa)jP3;woZ+|~1^}&kfy>p@>r`TS3Jo{/f.;lHPf@_}6.5<N]E4u:?;IJ/z;B' );
define( 'AUTH_SALT',        'XD`iae0s5h[H32BuqZ%b`ur-+Te[`5K$93j0A)HA|4vAIB|ddzLmTqzb/GVue=Yw' );
define( 'SECURE_AUTH_SALT', 'r8J5RKx6_2H/]RBOS~M[sPA9fwE7)pa2W<jX5N%ln)EpnTJo3 2aa^.URPjn@t+D' );
define( 'LOGGED_IN_SALT',   '#@/^XBb;-?u0*CCHG6>`[<b0txNyme3[L|{orEgn=vIUjnECgvtZ_SKO?yX_rq[8' );
define( 'NONCE_SALT',       '=q Z-<tBdGUwGF~3V5 26e[UT,[l/+K_zWA|chW GSX|*JS?E.VTnhCP:8n>So<N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'idt450_';

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
