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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Oz1A]pd30?OAWJ?:;Tb5nT%1(SO~HZCwNo[U?BbGA!W8dt3qRY/~~2GA8Tbbk>OP' );
define( 'SECURE_AUTH_KEY',   'Vjg~ e>IRa>s0Vcp!A/J~$84}}%pW[v*ZpnC9`.{A{4i^E8%_;6Y&w4ZVXe4l??1' );
define( 'LOGGED_IN_KEY',     '$%%+3<kkOUT9B2TVci&>pP?eho0+ ws`JCE!ex4O1@&Xi2+44(r6|TgZNf=r?3Mn' );
define( 'NONCE_KEY',         'RFyW.hD9<e|8X-9^e7Y8@N0Vr7/&2EwtFXJUItLD9BhaUCVj,#sOI9s&FfuL:l@l' );
define( 'AUTH_SALT',         'Rb3.r3_ZFEQ-*0#r|{i(#,vGmR1Q5?$]oA%)b&Z5subu%k51o5zX;7E$?3,9rX_n' );
define( 'SECURE_AUTH_SALT',  'rZytU,aDbAE#NQkm1i^JTy3l2W%=G@7{11Z!6C*[#Tr*eb^Z2-3*!]4*x,qQywLW' );
define( 'LOGGED_IN_SALT',    '2Tf<Fb%R{$w^.osuP}8D`o^VgJx]Rgk:H#uZhVF!!+Po**yiPw#u|D@}7q!~B@(^' );
define( 'NONCE_SALT',        '@GGquTl_4+)G5{G+|3w4>rj:W;~){U0S@Bb88snrZS>u99ds3o`*4rZ`#.fT*-=x' );
define( 'WP_CACHE_KEY_SALT', 't]zax)A8c31$eiD7kF.cY9~~h+EE<hD3Rf~-r_&g R@f>LW_.D@sA8)+^5}x_xqm' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
