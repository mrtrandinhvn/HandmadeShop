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
define('DB_NAME', 'handmadeshop');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '70c`}#/^h*$#n@I_l@s~LiHso71YyNLIKwsJg.?zz>o^ $&YR9vg7ODX9UzIZyJ|');
define('SECURE_AUTH_KEY',  'ukZ#%>^h@MXib(8&9ki@>4]gzs+$K C@e[uYRI;ML?(wzSo<`^Kz9(Uu8>r.Yxy|');
define('LOGGED_IN_KEY',    'w!*:H{upc2G{]Elr,R3~yHr<Ra+A2&V7Qep#Qpk%)!3>5cbZ6/1RZ*!r;Bje_a*|');
define('NONCE_KEY',        '_6SCx0`_D+a`S_pXZ@4XkV},! 8(9>cq u|plHV>B?nbI^.8]Jxf!2*:WxcVv%9&');
define('AUTH_SALT',        '&yf.WF7J[x ;Bv*QF)L@wl@-I(GRH:L,LDEbZ~Qz) q{M,<{a[>!qmDv?JvHc2};');
define('SECURE_AUTH_SALT', 'sP=-v)<;5%_4o+tP~(K_O0*^k=>c?A[aBmL+jW2Rd*l18Yw^Wv+{-CPSq#Lrb)m}');
define('LOGGED_IN_SALT',   'f)A$,g>/7v1~f!Lqi@o;yM9[C(mc%l(r=6QAjF5H?3fnwd=X}Y/;j6:`0O~BEKsR');
define('NONCE_SALT',       ' dS8,,b;Yii&A]$#MW)(y2xmetO5C&uKE)b;+b]J)WLUqE[= H.2=AjwuCFYJL*t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'hm';

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
