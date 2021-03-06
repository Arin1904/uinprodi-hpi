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

define( 'DB_NAME', "uin-hpi" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'uY!y],ems;$fVlw }Y;.r6g)D,y|boZ<7!{#zs~zn0a&83c3-x3QE%#L:$qBzd)b' );

define( 'SECURE_AUTH_KEY',  '_8 4x4y&=8pEgLx#<@d}AR$`^z1U|%k&=Lcl.b~6yYzI[*Hh`IIouA]Nk]^%A)}$' );

define( 'LOGGED_IN_KEY',    '%~y3l1@[Nps:N5Q_%_q?ZYMu!nfOwb!9KpjDWT9xU V:^AsVB0GK6yobJ@VE;L;V' );

define( 'NONCE_KEY',        '.AS8S d7y;P.2O^:cxiFs6tQBly=.%a$$&$}y0!(kokJxHqgL]BdmKDk TnFh*it' );

define( 'AUTH_SALT',        '?>.qycXT^2G^eyO(&Hu|AtTJP%mP#EE#`29I gmWOVp8X|>(+VY+/r3%+MoM}Tgp' );

define( 'SECURE_AUTH_SALT', 'cl|LGySa35[A4cf@~I-HzM5,!H3h[=B=4mc]qUKQ=>.#@9;^RW^vH%CA/P$`Q,pP' );

define( 'LOGGED_IN_SALT',   '@!Jsba$?R|lw;P]6_903CS%a&fc7ga??0[CrutVABGc:ipCa<*NKl]Vi/e0udos(' );

define( 'NONCE_SALT',       '1Gm-i~-5184DM|/j*F %_,Y?q48|Lq[sb))/~aL[x@caKW6-cxbVVX]2lm0xC~48' );


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

