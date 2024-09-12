<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u784093343_bmxDN' );

/** Database username */
define( 'DB_USER', 'u784093343_txDZY' );

/** Database password */
define( 'DB_PASSWORD', 'dRFv29O3A8' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#5n8k?PS~0z.1y`Y}ikW4p?IKvCDI5!vxkAR9lwQG2m<p5|=^f,_,5+5aj)>sq<F' );
define( 'SECURE_AUTH_KEY',   'qWkY]xYc!m:x.DofAl,;8!<%FTV=,] oxS0]<B%Oq&@E}!9]_I)oaDk;u&unn9|}' );
define( 'LOGGED_IN_KEY',     'V*L-7<)AVM[wTuoa&b/%3+Fai<MvzMMF0/O %@h$c%N7r6mXLZ2<Y_A}D>0o7-3N' );
define( 'NONCE_KEY',         'wy}SC[SW@0)qi`A<<gyFQJ.qfy)[uw-|o^if0y&V3vuy{ULmpaj/4}fN2h8GP4,F' );
define( 'AUTH_SALT',         ' aC?2w!HZrD~ BL&hlTi}pX8q<7#1b=[Y74:{q| [niwu>MW2[Z1NwwHD/Z~r|,_' );
define( 'SECURE_AUTH_SALT',  '/l~{P|_lLEDf !w$#i%}d?_a7.`5if8mD<|n?;xP:PDrAra}=y3P!08zCxmRlA)h' );
define( 'LOGGED_IN_SALT',    '9h=dMFoC+*NU?O0{wFnTJ*br9eOhq7TkQ;.sMm$f?[3A}v=z<@^|5|+V}AN0&8|t' );
define( 'NONCE_SALT',        'b@1ZP*#4Uh1_LJTwY11Pv~byGak~>)GSn*#r/r#0#^v7|BW1hP?f,oooi*0cT9Uw' );
define( 'WP_CACHE_KEY_SALT', ':9^t*))|&u vgMSMeCF+^vy@];fYMz`iWNSZqW}nw*/v@wmmVuq!jM3*)7(nKMz-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
