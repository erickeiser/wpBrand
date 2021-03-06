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
define('DB_NAME', 'brand');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '`D+z].JSXoC>#MpT;sx$)bA%<{7EYvm($ :AKRBIjbykYem]~* P^!)xB^r>Vy0#');
define('SECURE_AUTH_KEY',  'AE/r]%vJ2m|2Tln|>][8[;-Cq2=i=}Wmr/P&TIP>&$seQ~ZuZit)jLe&[H]aq:NJ');
define('LOGGED_IN_KEY',    'GIVK%LF`A4^MO-OMDoLBpV5~kF[/@#@$_m*{,aItuWEJuYp9i7rFjtOQs|(>,]K7');
define('NONCE_KEY',        'AjmaAGmUy50%^$-4EO/f:<>5u5j_3%6A#mQr$7{3(UzFTQtwyU=*Zik[!AQV3.1.');
define('AUTH_SALT',        'f14;tkQVbqC{rd;WOqd;zHEX%X?tk`vBc6cUm6GJZG~IyL1E@2L!8m>_po:$jB&R');
define('SECURE_AUTH_SALT', 'ck52F@C_pON7U5z*Z>Dx0Zrm>VsX{;kYz>^ZrXxkJ8;N@p0*N,t8_d[o^2?aB?nE');
define('LOGGED_IN_SALT',   '$kF`b:G8UR21[#d?Md(YIJ#ayB6mr^jEY$%&;2t/zU<)BJWJ_O]_k*>iOGV:3aT3');
define('NONCE_SALT',       'RXW6? 3ev7THxNd8o>ix(adYnTKoZH$SOhV4uq,X(ig~~~slDdXWzedcB&l; -(Q');

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
