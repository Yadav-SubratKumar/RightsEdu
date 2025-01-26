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
define( 'DB_NAME', 'RightsEdu' );

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
define( 'AUTH_KEY',         'W`11/Ch =#4K]0u&=.`h5RPz1zjv~ZFYUr(KRxS!+BSi,rFa-0d1biz<7|c~WSp*' );
define( 'SECURE_AUTH_KEY',  'MT#k{Kwno-{4A,$Z]6rR%{KUBvEU&]rGPha`nrfe+?TPAB5#6>i#Fl:L]sJ>&)NE' );
define( 'LOGGED_IN_KEY',    'MP@{hEPK<&m7tH*yP#ASXGQC f68hVD70W7b_g39{8oxe+ZE-#oNq=C+X1HA*:]8' );
define( 'NONCE_KEY',        'IOi.cZ$FM@k|$=MzP)HW1sh%LO*+_pea{yIL=%rNr!P|aZn2,B4MwbjHoGnwM)_L' );
define( 'AUTH_SALT',        'QBZJ[]5AzGhTRVU9xf``tY!|JkCN*;_e^5D.F%bM[tZA./gX3#%_ZJ_@Y+Ay5(1^' );
define( 'SECURE_AUTH_SALT', 'vG&LTRnt,J)4-k[,<ZM8}wN.?e@^H0O$|%8Z9dgHILH8L$(%_##]%K!$$A<oh&6u' );
define( 'LOGGED_IN_SALT',   '2M7Fa-odMS#kPEB]9E2h;B,d?E=Qh)b%qVe%V|gOgqkds0MgnlgJq8{CA.4kSp5p' );
define( 'NONCE_SALT',       '%Jfh?A:lA(F[0K3Qr|v0BGp(|Iy&t/*@j.{8o%EU5owhq8;R.o|tH(tIL6XBtu7.' );

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
