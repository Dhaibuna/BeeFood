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
define( 'DB_NAME', 'UyJ3wtjQpL' );

/** MySQL database username */
define( 'DB_USER', 'UyJ3wtjQpL' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RGXZryBEKM' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** For installing plugins on linux */

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C-PQR5Y38B50i%RI6EKT1jN_58BT{1ih*]MSDvj#dknhZw^:I_qD%}q?8K0fCNY?' );
define( 'SECURE_AUTH_KEY',  'r A-Om-9^-1o:%8X`2H?O`|=N9@CaRR}PhGY<x#RIB2:}2>n8W!Qsv_0K78|,!,n' );
define( 'LOGGED_IN_KEY',    'Q9yjw]ku~6F]<O344-8i7rZ*Zdb1{&J~_;xwy_Nxst$Rnyk5? lY&z$xcy-ernJP' );
define( 'NONCE_KEY',        'p=X;M_.*kZgIhD,W]v9UX:keCyqttP}Qm9buY5A*nx0)qs~^PRkHptU^0_mbojSl' );
define( 'AUTH_SALT',        '?[ah&SU31E}A[x;GQ4nsIsPk}eFV]0.UQ=S.-qi<|S[xf.yxzPg3Sf7Jx]@gJOJe' );
define( 'SECURE_AUTH_SALT', '$4}{LIO/TVMY/U}%b42;JzDmP($1+HZ2U5nOBHgm,I*ikX8+cDk[m1Alx;a(9yS.' );
define( 'LOGGED_IN_SALT',   '?b%,zAdj]4q,d%cEgwy:ek{]=(3_mm.h=Pz9Y]rE%#-~/A |5;$T}h!mFz=>r,Rq' );
define( 'NONCE_SALT',       '+o)=#JQ~DDHWe@4Y_$F*055h}~o_YK}?[/rmHa0gGR@rJFZ?2IFK?Ik_CzEICXZn' );

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
