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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bidzedge' );

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
define( 'AUTH_KEY',         'fa37 V!!4J+?fsA#|KD_QH* b>%P{hLqbgA}zC)hj|1F Tb%~2LH6ZoX+yo* 6LT' );
define( 'SECURE_AUTH_KEY',  '7s<MGcgJdDY^O^%S$%bzEd?a/Y1E$Fcei<=`B7#;I5?,EwNWh8s:5RJGJ8{.&cNP' );
define( 'LOGGED_IN_KEY',    '+yV.g(x}oD5u[j&jx5)?1$iVD]W(c]yOC)* Uv/!T:f1AHq`yPru39`Hd0-$diq?' );
define( 'NONCE_KEY',        '$$:qop(I3VA,8540fCJ@oX7nL%dY^@MCF_X83)=/eLbr5Y#zM1zMjlh*e|oL] 9s' );
define( 'AUTH_SALT',        '66?=jh^ *y$/6#K:25v([Pe!qc~U=B!flyuc[ZCOeDEDcn0}GT@Uy_Cs>tWWWk]u' );
define( 'SECURE_AUTH_SALT', 'NgDl^{Q~HO$]i.2-)*)Or=UQ:Fm%lq UAHFP3p?3eP_$2Lha<Osl0Ekh:e>XlEn(' );
define( 'LOGGED_IN_SALT',   '_36QDk]4]?,PeaI tY.7PeYw_,|qLgw,0Rwz8X06Yq=%mDGepu!%F`J4?<n^S)A/' );
define( 'NONCE_SALT',       'ck*<1:<FZwo~_s}!0OI%s4!HGpvb-_Y(DLgf}@#=?PTFB9l$Pi}3j*V)o=uK&uTG' );

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
