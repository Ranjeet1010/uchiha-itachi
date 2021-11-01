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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0i2VOwZ#]r?c~6`_O.Sn0fNJLPQ{sIAx#,s;x148ejNY8NVoGi+yX^f<bpx.R-Rk' );
define( 'SECURE_AUTH_KEY',  'yOY*7}3Lf`}Q^l[o7MiRG-qaYq>+}C8x[r2(Qn~%>]5bDT4R2oCj$mD/!_of=?Ve' );
define( 'LOGGED_IN_KEY',    'U$sySAIgjn`kX7ham=t?ZT6OJDIPq j_eM @2JN/g={V.n?FCOVUDPSAQ&P<O3p1' );
define( 'NONCE_KEY',        'BpB:>Pubp5taOH.M>oG7m&e> ;%|g25|%fnL&#EXvuiXu<#`hOM7&9&GUUDmY@39' );
define( 'AUTH_SALT',        '-76Tl#2U* :q(8XH5(x*pU5yumI+;PTwDS+i$cx!xnkEJ<PR#g0x@T^70d):A-(0' );
define( 'SECURE_AUTH_SALT', '`yW$-Lx`N1Or-3YuV|%X,qzqk)ASr*0io%O_qt*.)b@V5li%i8>eL? un$,o|r0>' );
define( 'LOGGED_IN_SALT',   'e$Nm@I%2%%RRlN00:TS,bC#fp#:S,!Fr|&)W3g-U$n3pbef$tPRZ49%Ar)H$gR9N' );
define( 'NONCE_SALT',       'Z/I(h+ITx|Paj%g`(kHlp!L`T}HXfGn_aG<kb3=1E!DCxAC W<RhK6:eD=U8WXK ' );

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
