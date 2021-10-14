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
define( 'DB_NAME', 'hostmywe_nani_agro_blog' );

/** MySQL database username */
define( 'DB_USER', 'hostmywe_naniagroblog_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L5f?!p@t~6~s' );

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
define( 'AUTH_KEY',         'Kw>jw<(P=:C{^bX8naKh}HjEA)0zR-*00|[TPLw>t+0IcRuSF)8>3Z(^,73t%KM|' );
define( 'SECURE_AUTH_KEY',  'DlVqIP)^a7T(?m@syq*f]2IFqH]u}K$*a<B00&A:,)sD?2Sab.df?JlZLntwlcZ(' );
define( 'LOGGED_IN_KEY',    ' dh1sl^>8$vAM1*P5fnS3VYZhB*,R5CHA9vI[Y3|yB=-p}1ACWT%nK9$eAP;GkN4' );
define( 'NONCE_KEY',        'E*]a9|yI n]kvn$F]]q~:v=n`A3u^wnZ?JqAYigumz$+jq(;:13G~GCBUUQ-bT`b' );
define( 'AUTH_SALT',        'imj6Qqwz)~l3`j4}ym3$b}6GLWu)Glp83{9P[2A!Ff6Mf`M*H]#Fvy*px1IQ,m@U' );
define( 'SECURE_AUTH_SALT', 'v``V:^O .fE!(p8G4s&wll/->,b|llI%X|r[hG-9qzCz}[f[wL2u<9&zzJhB)B7|' );
define( 'LOGGED_IN_SALT',   '4Ha#)]Uz^&}i2K$|o9GAT.$C6brjc;Ef:-i<>W?G3i!uP#HyvG7Y]>|R:;L=v;#v' );
define( 'NONCE_SALT',       'e/5EYXWyH}R*bf#e;2)2A[ 2yCzCFcFOQVj7IZet=MbSS8=]<sRYpjJ]Qv~~][]:' );

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
