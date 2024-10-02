<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo2' );

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
define( 'AUTH_KEY',         'KO~b>j~[%]|p#g-%,8<VLL$yUm=GFap7%/<Bd&J9;m$5-kzUS%F0I{Z{rH/]&d J' );
define( 'SECURE_AUTH_KEY',  'h:v9;Z(:J2~ul1,HY8N8 IZ?-Z=;I?D6Z<yn4N[iV?;&1J+*hS^CtPc}{l!UQ`CI' );
define( 'LOGGED_IN_KEY',    '0M[4AUGH[c$UrTT1$8<3knhI6M-/j1/[9!%y/4K;fAv[cCkyA!m(veoAE|:O2nlk' );
define( 'NONCE_KEY',        'Gd*IPGQIb@Wnz=qiw|8- qU[6&9/aMeQItx =oCj17=Ep7iCrXC(*Lp+@.+^Ze9I' );
define( 'AUTH_SALT',        '^iqsj{fxT$;:$;%,YX#09T2Y?IG0l|N)[w?~;hRWtm(>%mOE_@ hrr|3Erz6;y_w' );
define( 'SECURE_AUTH_SALT', 'b XE}qv#UNKi^cA{OO1&<jK)X%Qbxk%ej{kIiOS;O%zwp4d=OL<+yZD#=a;dr*mR' );
define( 'LOGGED_IN_SALT',   'db(qmiVF}mpFXoEUg3ny1!1/K;SQ&/VKCl%n^fz_+P4CH)Zf&R<cTvp|N{|3-IT@' );
define( 'NONCE_SALT',       'J_4cG![:@AgMB4n=$Db#+69`oT/sVy,@lPo_}s^exo^FH!Brff#ynzZmGHYcce]#' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
