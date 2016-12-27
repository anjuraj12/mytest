<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', '*****');

/** MySQL database username */
define('DB_USER', '*****');

/** MySQL database password */
define('DB_PASSWORD', '******');

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
define('AUTH_KEY',         ']-eo!dE4A,&/KaF21wU-*4|{JFoa9}+idt~UW{0ODo$S=NFkYER>AqI{Q3v($69`');
define('SECURE_AUTH_KEY',  'NTv9I,mV`@EfM-tY_oHeYlt|dSy^.gGl^#)fnAmJV+}xLtBQH%C(HE-x@X>K%aq~');
define('LOGGED_IN_KEY',    'GpjkA7l?Tz,7C$=FFvr>==D|v2`HYH3kc{KJcSJ8.f_)0?p1:-~LTj>7wk23#T.Y');
define('NONCE_KEY',        ';+ciU=TdxKg/QggQF[$WX0zg{|C]y|cv[Q(X_6deW 98~CXP@ql$Oze`acBDtuyx');
define('AUTH_SALT',        '<n9eLuK%)Sy4Y!e2?c24  -3]XM*M1)*$lh4PdeEx&@N,D28Mr^.|N:KM3e<)|S#');
define('SECURE_AUTH_SALT', 'cW)opHy.$b_N$q<lP`28hsy(R CoSMv^uZm/O+k:<xmW7usrw+U:d!0g-.H,Np5s');
define('LOGGED_IN_SALT',   'i .`6tv,RA*0/Gu<nl<]*u2wfc~<Su2W8%+$+Ar$ ]TplpBEIKgDa4k5!2L+7kPJ');
define('NONCE_SALT',       '+s4-fFqP#>lB}c`03egxW](ZQFqNeL1|Q(Y.=#iUbMc|M4^I+^1A|Lo3X5mHpbfB');

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
