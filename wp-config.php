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
define( 'DB_NAME', 'Nahed' );

/** Database username */
define( 'DB_USER', 'Nahed' );

/** Database password */
define( 'DB_PASSWORD', 'NDAEy8/Yx]AF.QJy' );

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
define( 'AUTH_KEY',         'E)hv>H=?YFmw3~NuiGr5H`y6 R5!]#e98)H5[9cRc,B |6Xv kdwa|QV/JcRX<|q' );
define( 'SECURE_AUTH_KEY',  'EuPa4/zbqcN;aS*[v<O>4q>Kq1;fs)k;prpAj4KB4F^.R1ELv.v{cN&OrV.pyIPG' );
define( 'LOGGED_IN_KEY',    'H&<}6&jp;kt{RDjMHReY8K`A}nXS c+eht}PZOdAQ63[//L7PSg:![ JtbCpXh[U' );
define( 'NONCE_KEY',        '=1e98:rD8bPUkA=Z%$C.A:lxNK^{ET57!Ql1dmqw3t|r%Co;#o2mr`G<)UEw2bSX' );
define( 'AUTH_SALT',        '{IoJ}Xn.(Brb`hW!&jth_mpO.UK8%rBI.~flyAexEI!ZW<Huzx5b%@ysI#)^u`F$' );
define( 'SECURE_AUTH_SALT', 'uD-%$3Q/!!*(e<e|D.3Su >TPz+B{pg[:i.i@o*x A xe1aoaki^9Rz2EJ:wjM2e' );
define( 'LOGGED_IN_SALT',   '=:mobwg#8p_{R*G alOi{~>3-cCSE6=*H{Z<Ww-3-;UhPG}/-r}eBO`@IVj;7tC:' );
define( 'NONCE_SALT',       'l/l<sftCYHV{P2O+lptIWya5z[$p!fAkk#;=^o4@mYz3yDXC03rw%:N;+mH*lR3D' );

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

define('FS_METHOD' , 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
