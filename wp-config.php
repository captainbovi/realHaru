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
define( 'DB_NAME', 'haru' );

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
define( 'AUTH_KEY',         'Hp.S)!;S&^E>gXL[>e_mYSbp)nrx.r^mvTO3CDCK@(&U5tVyo-5#V%7:oG_;lop*' );
define( 'SECURE_AUTH_KEY',  'j9Z%_35ejEOLGtU>7xn3g&2y2YizX/*Gq7?Z}X8n0[@,S3WE^wN!$/v2].{IRS?]' );
define( 'LOGGED_IN_KEY',    'ql=LI!J<}>5R HKUe6QvO3*s$d_E&S5~#HI{wX!3T=]5kk-(_S4=9;!?k6cE@WDT' );
define( 'NONCE_KEY',        '~B%DGJ0I7#Dr?GNmIbcj&f.@wT0M|=l)3(2ZTHyqom-YjNOPc.r+%B7IXPbPST30' );
define( 'AUTH_SALT',        'rQA~{Ew:j6uxuAw4dtHvn%v7+Lz4_C/%l7VH Ck4oGs5r2/I,Sx$j3((@C8b{? 9' );
define( 'SECURE_AUTH_SALT', 'C_1x8^w*P;m8s=Zp&Jo4l%_Z RgpG|>aAe))z^<BKvU+Wh/|6;vdhg6Z&I8s+t=p' );
define( 'LOGGED_IN_SALT',   'z*YNJq$z7MsSY8&tv@<)(=TYhSf0VW_Q;!@/GF[D4JgbvJ,=XPln<DtC|S2HpDX9' );
define( 'NONCE_SALT',       'Y2_=t!$whS Dr~oTK_+le:U$?k?E*8G+_X<[:5v0)xsXClcB3 T-H|g3-g.et9z-' );

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
