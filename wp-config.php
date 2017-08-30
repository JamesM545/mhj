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
define('DB_NAME', 'mhj');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'jimbob11');

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
define('AUTH_KEY',         'o9+v)*[Hohz(a5@F~O?$?D}3AbEbWx GV[}6!dKH-}S#]R)7ycY;i4xsEj^^f``)');
define('SECURE_AUTH_KEY',  '!9_|c`M.XKv7L/OKs4B{vBz%A.rJs@5H}iYw:(8*K5Q8?KdJOo*ES)tzS-ZCp6wf');
define('LOGGED_IN_KEY',    '!;@FKw7Bt5@SL>w+4oj-vz6,,F,(#Z]}Xv/.pS;8#}%k$]O_,SCQ}9eHmHdZfx%M');
define('NONCE_KEY',        ';+FMurOYP!pM[LEc4i[.q u/@&I8(x8+;5!^j#d0]sTJY7cEyFz<eXCQfDnxCjy5');
define('AUTH_SALT',        '?10}l}^M_%g(d-sjs=9LtEF(/4Z5[{T$3(Bo~^{$:()j+D7Wi }s?;1.O@ _~=G:');
define('SECURE_AUTH_SALT', ',^[V6y$Ap96zHN=BEjbvhH3=#[%z{}0ks1UIwGw9y++mMeS{UC1)@Fe/NOg/1-O5');
define('LOGGED_IN_SALT',   'FN({y=q3DtA]+ms,K_YDp)qnAXqP^`%fP eSU%@|?n3E,M`Hm:B,,h*]k]8*B{Jd');
define('NONCE_SALT',       'B@*.H}2o7629Iw_Xh8/%d@%LwBedn6[o1Kgi/8@Jigt{3Rrom;&L6f.-r24I`^(r');

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
