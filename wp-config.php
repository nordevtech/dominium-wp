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
define( 'DB_NAME', 'u198510482_k9O9U' );

/** Database username */
define( 'DB_USER', 'u198510482_Qo8jP' );

/** Database password */
define( 'DB_PASSWORD', '28jpE2AGBE' );

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
define( 'AUTH_KEY',          '*{rB.@y)6)rmmH)H FjD_v*[[/?D;}?]i:lf8hd*XG9r&5+5 DIH1,luQsFU2UxI' );
define( 'SECURE_AUTH_KEY',   '>H&FSGYO|=J4%yRVaypex7K]g50s&L0a0mgNp]{F!JZRB+ku3QP}RVYjR+Z@8ik*' );
define( 'LOGGED_IN_KEY',     'W1fdtWPq1=:0pyES.oc[K2:sOBTJrHbKx;JGp?p$D!R.QmgE6&|n=b(oek|8*Z53' );
define( 'NONCE_KEY',         ':y%a:w2HxGA{ X=}S(L&/NIQk#MZ{ZQm;u>x?Y5e4x#{WcTdD|PP/(/OUG YyKOH' );
define( 'AUTH_SALT',         'fR+wT{n^~?7~Wne*:]H;S</9o3}l*?D=7(E?ei]Al+dkh!E,4.H2: 1EUSD< J1Z' );
define( 'SECURE_AUTH_SALT',  '}x4k]@E,RR7jV%entG!nq+dfL,P)(E%$#_qIjj`+oos[N#BF0Dx*X%~wBn<i?;j5' );
define( 'LOGGED_IN_SALT',    '6PnLzy?#kK,Ru$4qB<)OywhlUNc.G<g$}IOpfS}w-NL$I~]{a{vjbEVr^{4hh@tg' );
define( 'NONCE_SALT',        '[e$%9*3=1dNmilRHt<%@1^JL=e(*8L^!3VERBQlVL`6<rU)MeKA(J)g<<rnA}v~:' );
define( 'WP_CACHE_KEY_SALT', '(imYMZB(2<lE3gDrzReudjZ)qr_!G``8&^y-A[>`VKly2p@{jSbVeT/BAOB:Nhp]' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
