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
define('DB_NAME', 'rhodeswp');

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
define('AUTH_KEY',         '>%&<d)D[kp;>cZ-q:IC93O7uGGx{FdG1=kI12PQ1J-5|]1j/OQY^_$Y}Q6asxS`Y');
define('SECURE_AUTH_KEY',  'faY_LTnKo8{EY:9#jd8E14kquo4O;8Ihi5o-Wk56$MSdd-|0.Lj=24fY]x__hyMY');
define('LOGGED_IN_KEY',    'J5%gOZW,AZ(|<@xK;(x+/Z!Z~BF~e1-$ume k2XJsm]V(]FqBN2(C(8u`;- n2 0');
define('NONCE_KEY',        'gdqc0Y/!@[]gXUydb_`jMPrH`K<%e+/fQ2eJ+DL*$hH-:}*8%;U^M97~~+3,kJ^7');
define('AUTH_SALT',        'DSI2/$|,hr4E+aW,`~M,|FP&5_]:{C>0;SUvfZ>DZ7Vn5![/|&2W1S`+epQY)ru2');
define('SECURE_AUTH_SALT', 'HjM?nEfepU.|s)TEFQ-J{b1uG*-u+/*?c9RvL2jQPP~SU,c)eZmqp{gnjt9N@*XZ');
define('LOGGED_IN_SALT',   '?5[>-YGCO~>M%4WE1 A{[{1wv=+P2vu:39$hnvam2J@S4;VL:k>6)1fR9?[#DK7m');
define('NONCE_SALT',       'z 0L+-MH|/jt,1]EQ>/+p8FQZ(xIo|]oJ+Bp+&y/_|%?[b0c:_3/T|2ryRyLux%d');

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
