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
define( 'DB_NAME', 'u116616108_CvXpt' );

/** Database username */
define( 'DB_USER', 'u116616108_nxMfw' );

/** Database password */
define( 'DB_PASSWORD', 'ytASSCSNQD' );

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
define( 'AUTH_KEY',          'atqP$[5,h%.u;)olnP&xtI1+-b[s&N[Ug5Q C_$DPG3IFb`)5u%> 4S&NJXGaPTi' );
define( 'SECURE_AUTH_KEY',   '^Y6Jerw}UT=Aro?PM]u^Fu*oK=oiH{y OVq&>?DZvsh.pjb#k$wjhVyo{4Jf5:,w' );
define( 'LOGGED_IN_KEY',     'Sp}hA$2Zmh<5kh9#++}-Fj/GnWZ(Pe}{>Bv_zX(ttQN+&Drw_cN:v-`Md%tG4!f}' );
define( 'NONCE_KEY',         'rAP{Nd+G.dD>^v+MKcgUkfS5TI!m#@_%w$ikPq:PCOjwDyD^01WlM~64?DPi-,B)' );
define( 'AUTH_SALT',         ' {Tn@sFi%w}l_kktw(~y7_(O,Qct3GT]L&27?Yj<,Rcnhx?7mnq/|cg IJ8l<6)0' );
define( 'SECURE_AUTH_SALT',  'F])V8T)8UMo>[A3;$>n9}|~H-t04[F^Hk$uOyh<rm5_*>[x{]=]1fSj6l!fE)gE%' );
define( 'LOGGED_IN_SALT',    'XQp+=%PKy<q+j@mkzwa}5NDRQq`0ivsKN9(w#N=aT1fd_Kj2rDZCHX[-Fs/:sDGE' );
define( 'NONCE_SALT',        'E6@lv$hAq8@6hY~%9RSplA-Q.XW*op4*}:asG:6T&|H~{xTfF*.*R}oAxY&wqULa' );
define( 'WP_CACHE_KEY_SALT', 'ZvPAfpB3GDmET$ 5<$:G6np[^oS`$qQAMn@;R^;rwd34eDFL[Gg2m<5%@W cwec+' );


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
