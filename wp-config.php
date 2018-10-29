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
define('DB_NAME', 'helloweb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5(URz-K;TrRD[u43~29P96#JCb,<nlZ@iB??k[$~*:TswE17_hXKiVqN#JFobU~W');
define('SECURE_AUTH_KEY',  'Ml~h3zmN8$%R{@?4k]uPYF}~upky~0U:pVC; e8!Z1ii]oQH3gqRq$<L;[?xV4R/');
define('LOGGED_IN_KEY',    '25_(WjO~C 8 @.dHDuKYp>L=|b^4FacXr0CxCChBAb>Rb,|L<q8x9gSS#W)Y42do');
define('NONCE_KEY',        '@t?$6axn]MdSqcOlA[#W,.)fl&D*mox~OJP*99N(EpXtRvnoL4Ct[z,IjtW4Y,f3');
define('AUTH_SALT',        'RNnS_-<fV~sbZ{9%@O9/#P9|O:v00WP.IZz c&G~=6|9Z(?l1y1yF>}|NW*5!IPg');
define('SECURE_AUTH_SALT', '__c=l0nD7/#;zngID}/`It4F>1)d7r]_rPY&)[hgu?YVj?eY^8Z|$jkhfL|I3 S{');
define('LOGGED_IN_SALT',   'cD,;^0ZybTAgK@_>pHS>>&9D yw^kEL`J}MmpXY3CVL1(8T-lT!e}%abJM7LkQ{#');
define('NONCE_SALT',       ',Gapj,Oi8lsfM/]OAUqh{2xhHDolm=kgnGIW*O|@vysZ+Rd>~wsz+PJ:epvF[q$e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
