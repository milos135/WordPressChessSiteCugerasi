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
define('DB_NAME', 'sah3');

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
define('AUTH_KEY',         'X3J^_0uZ<v{@60t<k_4B#Ks7Kf<R&H GPA`?;B|MJcgdNx}PgJH6<,B!KF&Z[ mk');
define('SECURE_AUTH_KEY',  'u;[ORX&`##SRHNdIJ/w6jhl*`y2w8 F>37(IIm(8{y^v{gh/]q nz:?3wN~]1nmo');
define('LOGGED_IN_KEY',    'NkvcM=w]=s}r&DPNwr}zt2%%@<o!eZS4MNq-aNfYr/EX:Q*iyXL.ye-fi`)sWZyr');
define('NONCE_KEY',        'u`.wS{3FGSJGVSxA-]jU90G=;{M_jD8y?)2i;sI2G#CN;9P#t)]f!XMelIhUgdb7');
define('AUTH_SALT',        '!#zU.vyyT2P,k%E/]n`P);Q5,$%}0OU:RXQ;g$Zs4f5ZR&Ghq3ZICwfkG/:<kM_2');
define('SECURE_AUTH_SALT', '#.[kWk*wL%hzh3BQjyMSs}YRC05WVA~a,7@WkX6uXtv0&W`PJ7Y{Q4J.g49[ui(`');
define('LOGGED_IN_SALT',   'uv*tK8&|g1M8hgr+mc`%z[.G~0OG6ozA?O95a@Y]8<<%oSLHHz[y.-4N,`]y9{Di');
define('NONCE_SALT',       'uL>s,X<Vk/#Q)V%#{0Kl%^iP{Y:JE_QT[UI=o/^?~h6GZ~e]uHjtrE9$o<c+3!#3');

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
