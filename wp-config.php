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

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define('WP_PROXY_HOST', 'proxy.langara.bc.ca');
define('WP_PROXY_PORT', '8080');
define('WP_PROXY_BYPASS_HOSTS', 'localhost');

define( 'DB_NAME', "divi" );


/** MySQL database username */

define( 'DB_USER', "divvipay" );


/** MySQL database password */

define( 'DB_PASSWORD', "divvipay12#" );


/** MySQL hostname */

define( 'DB_HOST', "hiddengems.wmdd.ca" );


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

define( 'AUTH_KEY',         'DB`! M8z+WXczsNzq&e=B!-N)dI4.!1SNyGjW0JZF7xDiz}g!h.6RT#|N28,`XM2' );

define( 'SECURE_AUTH_KEY',  'WRT%J,LTt$tzY,45wNqy3Bp_!^THGwgw10+UCRyZZ=ZEyXyKB|ento`{Fd6hbsl@' );

define( 'LOGGED_IN_KEY',    'ttj$cLtqa`J$?ahwPcWJsV3;ru=EA1+Wv DE)Zt_x[/xrCNbywfrWU21+Cn%6=V)' );

define( 'NONCE_KEY',        'ZA>u*xSwjpMCV[d(9D.dQ?l+hP%>-,`J{lM~oG&s;7dp/n?/F(1a5@Od9!_}8jwV' );

define( 'AUTH_SALT',        '7dpQ:z!h,8R/9=&aY3SxB20@nKPNT82H-]*2z`}5l,-{bAebURl%U7fWT2Xfr6]a' );

define( 'SECURE_AUTH_SALT', '4ez{%-!`r3e Qmx|nl?M:M63*;<2D}?G?GSImu/5l5#:;J94cUUeaHYyA  41!WA' );

define( 'LOGGED_IN_SALT',   'I`0h5-52ndaYuR+/8<U-$$JzsZ41:lC^n: hvgi]/6i$Fy&9ziM33= wX%|yFKXy' );

define( 'NONCE_SALT',       '^;LvM8HIqByy4m-=n:^Y#M6[C9_]%vfd8gH;:~G/_LNlUZ#9<C]j>_2|o&bA_Q0.' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );
