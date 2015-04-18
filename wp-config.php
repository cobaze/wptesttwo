<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wptesttwo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '0E(Rk{pw0*yIc-SG2q,)&7vSar+k5!;PreBJ-<c/<$0oXH+f(9jgG9u=z-9^V{VQ');
define('SECURE_AUTH_KEY',  'r{-N:m`G)7VSr~Mk!du`)w8[Pw<#*|iwq|=Og2.|5C3GE~sb&OnIJE>mJZ%A)=8B');
define('LOGGED_IN_KEY',    'j hfdU}}:&@SF.N2;$>HArOo7wVK}`ed.E[EQH1# d6Q<}N]t(v]Br7@|JxW_[+y');
define('NONCE_KEY',        '7i(o0fT:Xl*^sp.gV|AH##Z,6|js,y;{]|EqR6]^nu^T >-/-t<gnT[6:N;5&|l&');
define('AUTH_SALT',        'ZM-Yb Hxr]LF9,EPhLXXCBU(v2E<*#~wo/GC:c+KLf^(ooI<eK8dqjGL22Vhavu$');
define('SECURE_AUTH_SALT', '($G5FP*cf&3o<[JRBI{zoq-=w_)+)cF5<A*>gzj-y{=!S/Bk=Ofw~5PD rZ{3%-+');
define('LOGGED_IN_SALT',   'uH7c+<&FoPQ J1 ^YUV+lX*A~ou84@8}|U5}C]>cnPARa4tPvUEtuYNL1SXOu+=j');
define('NONCE_SALT',       'J$uW*ICe8zwfFv/:$FiK Xr_v,>n~]?BR6A)[A`MI5t0l>:Rh/s-|vXP}~bWJexh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
