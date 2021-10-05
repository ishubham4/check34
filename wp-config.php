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
define( 'DB_NAME', 'check34' );

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
define( 'AUTH_KEY',         '`O1]Y!E|i#Iyn5%Cp_.&:B7W8souSC_{n8)eg<(Z3K0-5P~:Ix,R@],OOoD;i.|)' );
define( 'SECURE_AUTH_KEY',  'gAPVmRlRl|B{o@nRgCYM9`48K#k9[;}v41`$l70|bIm(&_j@3{UovKsH7H4?7 au' );
define( 'LOGGED_IN_KEY',    '+VmFGm0F65=(n[!^+9]>X) =n:n,z0TFE=F;Z56@usR!dM4*QP`*R}&p3b#sL%v$' );
define( 'NONCE_KEY',        '-ciia p$:Z}S9Bu)%kxQPyqv@)v+D1^`B#W&`j!V`/AC?nv]PIyIg{`2]i7r}BT&' );
define( 'AUTH_SALT',        ':bKel7.;T_%5_KTaD2 $2XtWfzPv/+kuUsx?cw{?LR~?HP={vQPI+QmgnRjctv3X' );
define( 'SECURE_AUTH_SALT', 'hUCLc`][W&xo4SWK.sPrE{V-&mFy;TIy6s4bHv;95iVb7$]!THJE<g;~:4(b$J_<' );
define( 'LOGGED_IN_SALT',   'P9(P]CIa2h(&/_$7bY,PGOtk(a2~Bc4=phX`f|jPF2ww+q&CJqk=x<#0B`k1~;G{' );
define( 'NONCE_SALT',       'k;HEIn6jLZ)6=ypxh8gPZuh^wg m.V`wfK5JljA6UbxPr$zy/+^X2k/t@^_[):=9' );

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
