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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'wordpress.c1esgsh243lh.ap-south-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '%bn+-+RZ^bUU)bJb=1BA@AA~HwJ*#M}4ud%m`+k0yT[;fA?2GMH6qkU,edsx2k?3');
define('SECURE_AUTH_KEY',  'tO3qI%8(k+4|-#|_uv@7)Y<Y5a$d_8_{YAve`QWTO3T44SeseLoaPujjIG~hCG?x');
define('LOGGED_IN_KEY',    '-]kL]Lu`c25?w`{G@-tezk^;uS0O|R<MP=jS 4rwQ9-tc?68C0|< 5Ha>MwuOk<i');
define('NONCE_KEY',        'hBSgvn#TW#(d3B|,xf@3!0z IS07|9]=rMYj6PnWiex^wb#|$F+fk;b/=09{zCag');
define('AUTH_SALT',        'BtfsV3@<-#w[po](jsoY2f]hRxCCG%Oy)Ywk%RMd,6}nl>n%;cu_3O9Ms5K-=+!O');
define('SECURE_AUTH_SALT', '2Ljm?;~Xtlq,{7jv[]+Y3Re{gp`P`~.r%e/C$9v9Qw>TP%Kl`Y/w}j7uIrrOq/m-');
define('LOGGED_IN_SALT',   '=ESSdvlejD^4c}0Gn1jG<BcPen`Px$E%bk<Jc~)/hJ5|Kzrd1zYR`T3S|w;800P?');
define('NONCE_SALT',       '?btcdmWmFB+47bBZ3=_XUY-Ma,q_Kh9@(:I@KxR.j>g=y|LnUDi+:Jz$Hn@1Bm|)');

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

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0705 & ~ umask()));
define('FS_CHMOD_FILE', (0604 & ~ umask()));
define('UPLOADS', '/mnt/wp-content/uploads');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
