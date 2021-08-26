<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'graphics_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'M2M$A%Rd4y6#%idm_)`f[FR$l+30L]T?9#g{`,[`c]M;yPU?qOAc|rf~4onF9;?W' );
define( 'SECURE_AUTH_KEY',  ' F({t)7R;McIbK-1QMqNBT_!9|2EAUBTz<x-TZC=dq2e(rSxT`xW_`j$z4jCQsa=' );
define( 'LOGGED_IN_KEY',    'K/fApf4<m;e8 ^<pb;4@bEm}x<H?xLQvs1N_3 |w<])h77J7a@&v95ezx%Wf$ous' );
define( 'NONCE_KEY',        'kU#+A|d%s1*q%vsqq-$Y TQe>BdRdq2OM?{QHRa%vqhO/ff-PJ`#:GV{0@lZ/rMW' );
define( 'AUTH_SALT',        'D:2A{Ul4DXz>8RNSlwp H-:+{)wL$h@0A(|82ZHFUH?|ge^*^yL),LBwDi+.m?W4' );
define( 'SECURE_AUTH_SALT', 'XTm`{;+Yc]?[0(=3ug`>K*WM#vN(:=g]:pP*[yZ7._!C#uW~=&&>606|R-,Lm>KZ' );
define( 'LOGGED_IN_SALT',   's?QltUw+B<4BB(W3$H?zHh<m9/6u8mXo-zZzs[=&w`WCIe9p(3U))jEo:&GZqpEo' );
define( 'NONCE_SALT',       'PCC7M]k=t2?tO4trp$&zx[lUud&(0zRu:E^}`W<P9rpRpAiPBmdOJysa;J~M6D;o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
