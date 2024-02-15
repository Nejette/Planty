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
define( 'AUTH_KEY',          '.4XW;q 5kEyB{oVA{QL}q2FI<3*{4X(0_5$/3Xjwb6ymSb71-YD()swvus!Y#qXX' );
define( 'SECURE_AUTH_KEY',   'vW|+GM-kKO]IJ`P/v?S2/f5Y;UXq,q>eGC!n;@EGk`a69A`J!Jm*cswWx>J $?3o' );
define( 'LOGGED_IN_KEY',     'jkR8x*DXshpq|az?5IA!m#No~m<DebBh/!kT[An~]@0O2r=cLT0EQH5@dREk`@p5' );
define( 'NONCE_KEY',         'QQt_*qrAKQAfd.@XM!H<SrPB)n$PQ$CG;&6YIrS* r@V]?=$|<HGb%BWw n kncx' );
define( 'AUTH_SALT',         '9$/dBSJ Svo995p`OrOAMe*g/1;[0eMikl[sq9(?ml>@{BDAqw/l;?yo-nm|.TY7' );
define( 'SECURE_AUTH_SALT',  '?1BY7]iPemg$^)]dWJf=TP.ciasl#D7Iw%T4<DtCj)T)k9ib7j#}o;0du,-9%?6 ' );
define( 'LOGGED_IN_SALT',    ')Zy*N&-[QTK3NUk0H#/1E^nWk:^sme$zexOvTC By8.u9YJx1h<c(2B,aG:vr]y(' );
define( 'NONCE_SALT',        'c(fg(x@G{z5D?w|vQ}RN%&JJ4+@b;WPO:!n,uzDgC[%b-X=#[Zp[JqzKG`XVQ+%9' );
define( 'WP_CACHE_KEY_SALT', '!)Pj?MT O%uF*qUiL{V RA1VT^w|b/801G:$2fK`qv3T@]$9a0Lx:%37pchT9sx3' );


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
