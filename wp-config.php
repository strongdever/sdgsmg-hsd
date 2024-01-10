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
define( 'DB_NAME', 'sdgsmg-hsd' );

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
define( 'AUTH_KEY',         'w)?&Kiac<)4y{GR#z8-4@Fc>;YS* %qEr1X!F|R>(C,,m_ 9<Q1!a@WO%e<ahHX;' );
define( 'SECURE_AUTH_KEY',  ';b(#?-c!E`^f;97D@g,wALC-HZ#/zWa[8,&_XM4c7pt}&nGQ]g%7TR=?qIp)d7JD' );
define( 'LOGGED_IN_KEY',    'tk_fbqf8.|tyHJ 2WYWzNhV/1AE72i9c-?Wa<*f18>6^xX$.M/z7/c`T.Jt3g<S}' );
define( 'NONCE_KEY',        ':ZLJX)bEqyuK)bo L<_QA($/F!HSMod:*O;RVb08wN=Yz_2kycCIkI+*}]2`m%{V' );
define( 'AUTH_SALT',        '>lq0gC@TB}t41/;]{K0B0[)}W8!g-EdB:JCKGN@U>VKx-zpaLX},_~EtVn{,Mz6U' );
define( 'SECURE_AUTH_SALT', '$~h]?6@>Z;R#4k$7PaNdv# %/~V7X_5ZvPzTu,@vyw6E:2J^6R7*-TA5!uy-c4ba' );
define( 'LOGGED_IN_SALT',   'Al:ea{;q|ChVNzmBfB?_iO?&!lU*cHp)c i,JwIiLh2v:=x.j:Nkvy>iQHVwEVB:' );
define( 'NONCE_SALT',       'S4m;-%*u]HpX43H3Y|}N[7ntYJrwU.hH.n2w3)VKfK%jrl:GiqV#wR)=F<+VdpY0' );

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
