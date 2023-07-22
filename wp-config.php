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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newDB' );

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

define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

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
define( 'AUTH_KEY',         'W[/sO4=>{OSIp+x(1lc:2Ivv{pzY>pV}JMZ-SkN{uSFw3s%yNBluM+%~ 13>v`kC' );
define( 'SECURE_AUTH_KEY',  'bk3Eqr[Slg|(_2s_]YUSp2?Y(?]SW%-{g+hYX8Qp}Wvq 6!hiC@&W%;gn<_L)K]^' );
define( 'LOGGED_IN_KEY',    '_eZ[pR/(N-k!)}i`^?0KZXH,O@f=33ORvhL,0W%_,U>i}a8&`tMb[P(DgR >rNf)' );
define( 'NONCE_KEY',        '5u2qP4{s`k<A8^DekL[Jv$@0&Wr&_0#O%SLDacU`[CM+|N3idS:)kVNr(y,%d4ux' );
define( 'AUTH_SALT',        'L)pTApI`j]BC~bD?-b}XihM8O)w>$5cc)fa:w[3`U3>W9myCk6m0c^9CswyN{Fbw' );
define( 'SECURE_AUTH_SALT', '&XCP#np`=R;EKG mqK`}N;Gxvl]C%.uUbK/Rx8(i0zQ6LQtqms!p8M7]QQ9!;4tZ' );
define( 'LOGGED_IN_SALT',   '-hZM|FIyHs>j0494UYW+=u/1lM>imVJ48U9*]4sTgu~1Z:Z{3r>}kA*xJD/|`&j=' );
define( 'NONCE_SALT',       'Q^vIC9FNU+;L_-[O*ge8[;]50#HbG+NtRp~$Hds5}t2wXZ 8F4?@|-mvxd!1?y>A' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
