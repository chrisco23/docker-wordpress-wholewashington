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
define('DB_NAME', 'robfenwick_wholewa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'soe`.v~q6Yq2(zFF+{2C{cD^}Qud$Tz;7?eXcAb::9$2v-lpN}28{2lvq2gJIpxN');
define('SECURE_AUTH_KEY',  'LA?j$e*G7`V.`PMYOh]d~yfX#t#)>t4MCc`Qa%**U^;/+LWzU`i-Z32ni;L3k)]R');
define('LOGGED_IN_KEY',    '{[:aX}/0@@?,,-vZ#n?8Jf_#[Ipw^5d)mIwMMGk)(XW^WfC.)<fKoX@; i9E@J7N');
define('NONCE_KEY',        'BQ}1M83M0[fX)ltIXq/`ys^C/$KcNQg(Yi5Z^~f2AM_O?gZR^R@?-a((7E:Z[MT$');
define('AUTH_SALT',        'xn(qLg%3/zvyR!8,!$7%`1MJ^1*akTavn{5bU[inPl> 1G77bAw2g2/E0VT)}auL');
define('SECURE_AUTH_SALT', ')wR&_lyQ%j_X/M$M4aY9yGI3nU(*[Sj:FG T;$W1!l<nj,5(>Z>3P~(DH;R1sSfv');
define('LOGGED_IN_SALT',   '[i R:K=6<yKR/y7IaMHgN`4J_PjvQJBopakoT/jG45*H3)de<9E%d]%Z:yPe5:TT');
define('NONCE_SALT',       'pIb0D}I:dD,@T`m-s<1F:@5Uwye`25xZZ*Xd?;U%Rus3!-dq*|nj/Kz98]FiwTNT');

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
