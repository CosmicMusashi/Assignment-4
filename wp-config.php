<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.0015614617559900');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.0015614617559900');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','[V*1Q3XE<[*eG5hruOOH(y&8C.ixz17XPFHtfe<r');
define( 'SECURE_AUTH_KEY','fYE>oZI&(TV&&C),vh%K!QFbk.lJ@?FoSQ##6cN8');
define( 'LOGGED_IN_KEY',')^00_w*M#aFgltw5+v]ZcIMaY![.Bx_eW_DS=(U+');
define( 'NONCE_KEY','zeu/1)+lI9)qgj!70+.OowysRP6%PJRrewXb1#u_');
define( 'AUTH_SALT','tv7HnM)E%]Wn5=NeY?*S,<WK7BJGF+j3wo-m](Mp');
define( 'SECURE_AUTH_SALT','JlB.@m*GS-(cvOl(lm+6cg3IyRVnh+5^@hlc/a=6');
define( 'LOGGED_IN_SALT','g*8>ps!ZCM?@(3(_>%6m^?8tu2mG5!?BZf0LpBYT');
define( 'NONCE_SALT','x6-Qhsw98*P+LE[r4-K@=qsP#M(oe73F_G5,Wko,');

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
