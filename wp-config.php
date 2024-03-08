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
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         'hs*|J(pZj6JUqgxS^~8Z3BXnM*W-ba}L}t&cnbE=:~?2/M>5q<w]dK.MIgP?_sb/' );
define( 'SECURE_AUTH_KEY',  'yJt!U|9%UYg;]PB}}Am>^&}GmWJDC83Bf_eqd 50-(#{VaBGbZ^Xat$di<#[1yBt' );
define( 'LOGGED_IN_KEY',    '6b&B7&g738Z_Tep}I_PH{X?TVa<u9iE1?PU*:C{(|6KgB^H)l,np%8Yo2fFTTG,J' );
define( 'NONCE_KEY',        'jBcI8?qvH&*sSa =R&uv*5:x&c}b]Z,cQA^*oojoRFai)XD=vB`{KVV1Z/8?[# _' );
define( 'AUTH_SALT',        ';Lbi^r#R}T[<3WeH*ny0Y|!~/6On[lVEtG4W_{PH)[XSpxTC{cwWp1}Gm9!<=ZJW' );
define( 'SECURE_AUTH_SALT', 'x|9~Ae+.!]wP&q-e[g5ZI*+1i-PIl2:d`pl ]c.EfM6hEaQ(@YRW38ztp}2]!P %' );
define( 'LOGGED_IN_SALT',   '+Y94lB/KL6|-$-6UKibE]Eo.PX`F6!L#Lw/(tG_p])1n)xq3i2Z$MJ&*O3zMep5x' );
define( 'NONCE_SALT',       'Dy%2q*QgW,^QVm/n,[E/VMIG==4g8jm12O*;Zc$8>NzKIGnPjg5{Tfz0P5wBT1v ' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
