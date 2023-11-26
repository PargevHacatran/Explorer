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
define( 'DB_NAME', 'explorer_db' );

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
define( 'AUTH_KEY',         'S 0Hq+Pw=*)T#kHeg%9)r3T#5V,03KZK2o%aO9{IMePYTa !?M7t_Zf399v,>muk' );
define( 'SECURE_AUTH_KEY',  '}D%t>i^=eXC7ahE6OtviM$o?`:$1K2})xTIyU|.fjzp}*P5w2(4FoQHwynMNM:.U' );
define( 'LOGGED_IN_KEY',    'VLT62:74|<I2h@`aI ^tpbOPmks&Ry,Upsf:6_7qh9rcQ/XfpR9b(3F TA#EpO&X' );
define( 'NONCE_KEY',        'o!8O=7c~Zlk6&<4iHe5dO9_L3+ssZ;n3t)/s4a:i(rgOn3vgQ;sikJ Sy(Ag^;zj' );
define( 'AUTH_SALT',        '7Xcowk<m}9>w9^Q<lJ%(Z=3L 9B4)Kc/IMXoy{%hsU2gs)<O_l$kK2MC&iGTsSa:' );
define( 'SECURE_AUTH_SALT', '~ryQR`*T/ +g&%:mnTcJg(3OAhBrf<*<bC~(r)M`mRQ/(*v!FGV0mIMG?:!@&?.:' );
define( 'LOGGED_IN_SALT',   'A]q;}!JuLk4z]de~|=3YX4G9@V&Eb<%lU:p1MB^N#B|!N`u,%P;2SP}A`T{6T%57' );
define( 'NONCE_SALT',       '`xS.9>&I*HpN,BheX73GM+A.l;wSAsLf+FO.}:B`u(}Po$xfw#mE:a<Wqdg2WfLq' );

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
