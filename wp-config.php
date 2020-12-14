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
define( 'DB_NAME', 'balloons_ribbons' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kwX*mDH;Kp+!-M>O%AYpC0{RN4i<Oq$<bkHK%5}w>s+V,Mf*TJ=N91U juMR5,XI' );
define( 'SECURE_AUTH_KEY',  '?LyL~1N(<@06d=.SV#w#59Jo9 ZV}h?L|ibZ[FD2_F]m9h4IpbzC7Ft.+zy;n5L`' );
define( 'LOGGED_IN_KEY',    'UyD.oUaR:&#6-C-jgXN3bT.DTf,CH`O/R.l.5<Pu}#4i(r~b-]gD>,nN?0<[TLr.' );
define( 'NONCE_KEY',        'C]G%Tsdc*vAf/6Ij!t!cU+P7>yF2@Vz=2:hB#@ZL:_lP;A:;I^@,O2Z%E4H|bHVK' );
define( 'AUTH_SALT',        'V4(#Ai>C~.EixlcHK,,>=*gLHciB!~3{K 9sR8Ff[7JAQ.~ i+:A?S_~H_DN|V!J' );
define( 'SECURE_AUTH_SALT', '4py?$Jm8&b~m5=ld1R1|dsQJYO_+Z6h=v8fhe].9X-Z9sFK^xP1~E0*9/+:#^>d(' );
define( 'LOGGED_IN_SALT',   'g*^L$.& dp09%q$GzA7y,UT}9,BCS;ghbSzz-f?6&U[9mCQATLYz{@chT(-^ U@:' );
define( 'NONCE_SALT',       ':QW#D,u?t i9D`_6i@E3hFp JQg}D+:%YiZF)lnHwj^LU{$bhPBxQb2vr,tv(dD)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_balloons_ribbons';

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
