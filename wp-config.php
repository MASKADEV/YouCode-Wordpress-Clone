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
define( 'DB_NAME', 'clone_wordpress' );

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
define( 'AUTH_KEY',         '|1W`YGv8.V4PM!^+Bkjpyc.a,p-..%Zbtf)jV?GoR->Vgtlux4j;_EI7XV-PbEh[' );
define( 'SECURE_AUTH_KEY',  'WJ(~$8Xm5^FA:*sF:E7=cfM0{L{Xx~E-4xv#h!-&Y&GQO{z]wm&6YJh9i=SlOwcP' );
define( 'LOGGED_IN_KEY',    'lHJTRc/nYpm!_b!d>y[?3[Fzy#a2LkoX#:)o{Z&9g>Z!|B%[A:CIf>j0Em<2$g!+' );
define( 'NONCE_KEY',        ')nf=NV#.fV-]iy93;Z[INFP:**83O.FzSwmhxTH^Pu{KH<=YCN(r2Pa@i?(f;):.' );
define( 'AUTH_SALT',        'U1RJ*%sj$ XsGqh?m3bi?L^W1}iW6vm&}^>;oe{Gvi!Oqir;z*U3qvqNLzYh!U?_' );
define( 'SECURE_AUTH_SALT', 'FqY+4{53r*%e~sq:cxc4DF=V64CA%WLVu/CA,k!_*,D!<9H3w+|GVMEX+9|NX}Kv' );
define( 'LOGGED_IN_SALT',   '3`zac` qFQ=7)&m.$0?d.fT_/Cg6r9a;.c1#XA_N@*@_(&=TX:A)FSjqJ)Ocv:Gu' );
define( 'NONCE_SALT',       'D`lOY<wQg:_v4!hr~/p:PW#_}6nh*^CFMLw>w0H0J=Vwg[fY]%k$2##wt VDh5y{' );

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
define( 'FS_METHOD', 'direct' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
