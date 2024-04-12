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
define( 'DB_NAME', 'cv' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Ali@61101' );

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
define( 'AUTH_KEY',         '%&wKYcH$4J+Exd1AeQ_ cl$oLWSLG>yx.]_S!OU(MR+g/E`BlLxNaD6P5lWwz>3Y' );
define( 'SECURE_AUTH_KEY',  '6ug!?f]sYJw,&M|uy]ReGNN$]{<|)ey1Q1v+hx@39D1|I0L{<YtgKgovTKBZL~A&' );
define( 'LOGGED_IN_KEY',    'jz(^_W iz#)j=8I>Lp},|z<5<$&pL~bag`Yqgs@cLYrO ))jECrUn%iLN(UzR=hW' );
define( 'NONCE_KEY',        '[HoFSWLcrn|WL$ehTViBNwpFd;haQgi4>!giWvp8&?]z}i3W|_Of:=n3:e&#(cd#' );
define( 'AUTH_SALT',        '?&lWuS;q7cjf!}b.$I_i7H  7r(Ggfis?q68z9]0z 9,$+C: oi*$[836.xx&3>!' );
define( 'SECURE_AUTH_SALT', 'R|D%?RaZ|{OolMwr/$n|=C8?&.vGdc.WEd+!W;_].wOs:6eeSBY#L/YH=C61xIN~' );
define( 'LOGGED_IN_SALT',   'Plhzg5y%v8~PPGRa(C&E,Zk:vQgO0ne=RXmrV74|bE1S_{rmZ!3<rdBdqPM)8udK' );
define( 'NONCE_SALT',       ')l3ER.D3Yw;T?=8L 6aqU)46BIS>t-Ct{tX,`V6=HjYtb|[4@wB_iBa>|E@lt=Z=' );

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
