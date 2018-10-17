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
define('DB_NAME', 'VBJR');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dsYxMf#; rxuZ&];ZWz=;)EO+NzS4Zl2e]p.CuSn}E6y[Fr><u43gEB=i$;{$:{G');
define('SECURE_AUTH_KEY',  'mL`m#l8w^V{[$opFkz}[2 bxct<zzFL<{-UO8?E<`Bjo5aw2AJ$zbeda(uy~v=Yc');
define('LOGGED_IN_KEY',    '6!@$@n&ju1=&kE]CvX1P&22jZ$aF>FfTLVP(YqecH;Jm6F1h1uzA(}/b#K.-6I^n');
define('NONCE_KEY',        ')an?IA~AFE1v]i}MkS=*+-Qje#!mj0HG</dLrp!~JzH$,.a:G)89L<x.e_:%a)*s');
define('AUTH_SALT',        ':.td_id]v$;BeU#d8ZJN<I<HLz:bE,O*+ DHC3FZ0;wO6G2CBU2YQvJ,M>OZt2k?');
define('SECURE_AUTH_SALT', 'nEkLos{B]][}-e)?7)j0Y|dX`XBO.wTtCFKG.aY[YP`&~1HU/5Xaeo2OOL<osp=f');
define('LOGGED_IN_SALT',   '7dd{>i1CpaeUfwk0t--T=bmv!Di}O @bk_/2n_1jwIj|<oY/4`IN#1eagiXsE6n0');
define('NONCE_SALT',       '|<,eA3t_YtAPkT<O}GItH+U$eI0P1RN<*&l$F<SN7A46.aM8 sSNtro#@ZUERFGv');

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
