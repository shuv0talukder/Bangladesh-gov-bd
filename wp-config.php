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
define( 'DB_NAME', 'exam' );

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
define( 'AUTH_KEY',         'u^uAKo+,OTZ[x@lJN`d_:y>i/T,n/(OF|;fic_D}nTNg.}}LcS(^}]([:#}CT3mk' );
define( 'SECURE_AUTH_KEY',  '~J!I`*}JPgHOkOwkt] =akb+XOx bYtVa$w1lWUG/6~-ojT$%trwOl0L_,.JqY/6' );
define( 'LOGGED_IN_KEY',    'yzlIW^k{E~5(.1G3R(6],njA0S7}DL<+LBX Nn3tr9J?UlD!W]4? >Qm;#Gg3Pof' );
define( 'NONCE_KEY',        '2=~ZX#HF{$)mS~^xW>D5B;&aw0S@N#nw6vW:qqsj;B0!~jo%LdqU[dWEJ5zK#Yny' );
define( 'AUTH_SALT',        'c q(g$,k-ODOYyQd=I[.odEzSEf08/(+Jsz{9Z<Tab^U&>Wvv]u[sA1D%svEu7R&' );
define( 'SECURE_AUTH_SALT', 'i7;rrVFJ+W[dHu ,K?5!]js{3+q2<:$XE5$B5  e4Slou*IohG7=z]JJA6a<c~Y5' );
define( 'LOGGED_IN_SALT',   'ajvC[J<Wz^(`V/!^X[Dd9GP]LFm)o7NR{,Fd*F?[FGvL>l}2pa14M>4 Ni<3psyp' );
define( 'NONCE_SALT',       '1LXO-Y}0%lw1a?xA(6*m<)|;f@*NcG8x@gE]hh.VVG:#[5p#[insz|V#kmf@NFVw' );

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
