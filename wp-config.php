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
define('DB_NAME', 'wp-vi-2-03');

/** MySQL database username */
define('DB_USER', 'wp-vi-2-03');

/** MySQL database password */
define('DB_PASSWORD', '345@@');

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
define('AUTH_KEY',         'j1u?m fYXs#p@O&ziJ}ULkHfkTnV%NjxGD.yX6{e?+r?)MTtLqq0aNffT8~d!!,S');
define('SECURE_AUTH_KEY',  '2WNt,TOS`vEpT]l07Kh-9x+BY^e(8#TTe+`RPA*ryNELWVg8M}ceWs_%mriKmxK`');
define('LOGGED_IN_KEY',    'k 35TS@T]3GM(<brNkGXAgcv3&)TS?n.DT,$99ZnB}ZNqh {POKt|M:02/q&Qum9');
define('NONCE_KEY',        'zcWX_)#qa]+Ga(Kds?I{Yen!BsH[AV6NU7Z(vbR)3^z3$[@0cdF|R2i}V!b=U{v2');
define('AUTH_SALT',        '49$f/}dHi1%Ca9#2,nnb-2r[1>~IQdBOjIPPO{::@Q83VXl) YxQ!&4,z=7#cbpJ');
define('SECURE_AUTH_SALT', '(7Z@[8&iXy&&vgVp<Sx t^f4}F.RF:w[H%r<;<dRfclo9BH6f, e2U*N3)IL i(A');
define('LOGGED_IN_SALT',   'wJ$Q-)#8Nh}l/;_R X5>sb_l/w T1c+p/DtwdyVu.pbs_.sl ]^h6-3| bmi`.&$');
define('NONCE_SALT',       'd1JP]OX|*c)?HmF/o}I98sbZZs^Gp=EreXs^X(v.xoX6c]nx~G6Kz^AsxCq*_tWp');

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
