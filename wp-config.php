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
define( 'DB_NAME', 'blogwebsite' );

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
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         'x){!A`y /P);6R! +AVvp@JJ4vYzICPLOsZ~%4-?2L/`E{5-ZvRRO8y10el7xMhW' );
define( 'SECURE_AUTH_KEY',  'X?MYHJ_DdV>>qP4m|Rfm/r|5W>$GF@C#Zh$>#vQLmh!rL;9#OkOzN#Ro Ogl&woB' );
define( 'LOGGED_IN_KEY',    'Q`d.j?Whpbf~U0nLo_Hx*w.+g]ig~HSB~9ck%81v*,C_>_ncO!LfNv9I!o@ow9J%' );
define( 'NONCE_KEY',        'mij%c#GNt$!y~f:B>U;9k4wVZEdzG+%CRoZwWytLIbX;5V,DA4-O{8h*[2hF|76]' );
define( 'AUTH_SALT',        ',o2RHr*!TpgD)MyyqGT_0.6Nd-14mT{rQNDb[rOXeo,5%V4;!65fW5GUjVgms@dn' );
define( 'SECURE_AUTH_SALT', 'kX1@m6~${%_HFZQtFp]jsqswh12a0~a$WeB#[!_K0PiC~$:Oxm.g>(qeKOa.}~_Y' );
define( 'LOGGED_IN_SALT',   '8kU{nPeM2N|!a}gJW{@HLyR0TEi|H?gPO59sp:mIeilP#v;dS.[*BPfm]YOT2oJr' );
define( 'NONCE_SALT',       'FX[+m7u?7eg*<B^TyW4Z^M_;,plj3_ CMIKyn$]xhLF!`1=S{.Zwy*1;3x[5=B/~' );

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

