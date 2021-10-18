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
define( 'DB_NAME', 'tiendawp' );

/** MySQL database username */
define( 'DB_USER', 'rootwp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootwp' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'SYnVSmgFgkOSWe@tsh- VxS8$d.[]P%W0a^!yAj0;*]+!|A/Qbfbt<%-@j;lI.A8' );
define( 'SECURE_AUTH_KEY',  '^iSYWs{:wPkB[8#MAGC@)B$S[x!iLU(:#@OU)(F]L6,{veCWc)04TL&(Zshk5W~{' );
define( 'LOGGED_IN_KEY',    'oru+L`72]v|?D-cbe<ip.i1<z5oi <xz)ZUE_&u{SNC*bc4GqnY.`f3@{w1mx*En' );
define( 'NONCE_KEY',        'yOk~KK[t~vvjO^5i&e4=0{GG}kT9Mzz(5.iw@m=&:iFhzMU1bOd&BVfScgf@8aU9' );
define( 'AUTH_SALT',        'H0X8>1p1))D{NP[mkqS*}v+1i(x|[wg&(ioF.&^B5q] oytGR+tyTN&xkLOg`}^>' );
define( 'SECURE_AUTH_SALT', 'YYy!b_ l7s7$_RH*_LJ--Rk;OR6WUp_,UWUS~2tWnM|49I7=RoqEABy/q[w~O<AK' );
define( 'LOGGED_IN_SALT',   'cGREy{Vy.I#[ xz6yuj4 #L?<!9W]M 7V.1$?c2G8Z~Kz$r3(^R(7p<PS4LF?UPf' );
define( 'NONCE_SALT',       'T]#86K&,DmC4H9hIKR2Gmy8zXQq=U(Y!q{hg.;&?m+sT}`kzABO@!+(s7t1cHh)u' );

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
