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
define('DB_NAME', 'sachhay');

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
define('AUTH_KEY',         '#t~W,*5?nbX|HytZ X<((fKdj4rQ1;H**1*@k/hHW;c 8:w,/QnoF4~B&8(6%)Lk');
define('SECURE_AUTH_KEY',  '*MD4HyO0F@dJxkfT;Mg8yQf!{;bYLXt&25:N;E[[O[WcZ%=q4#<`yOUw*fXaJtr2');
define('LOGGED_IN_KEY',    'H$.<L}vt?>P}zC$4{/yaze+Aa,;~UOI0dvhPj*/Lxyn];%Q@.+5|^%5.WytX[p.3');
define('NONCE_KEY',        '(;!aVzFi)yP)-+}dt{*`EAjFGpEaINGCQe0DL=+~gwR`6CzJFbA`DGI[fmUqB8d5');
define('AUTH_SALT',        'J/NN^uthLH+Y,c^a?cpMpG8S!ZKwJLfu@.dkVK0@)l&NT<a9XA{v}q=J!*V`Bka&');
define('SECURE_AUTH_SALT', '<]IK$BMh. 3j;25+(O@tPBeC: E;wY8[K%.%5L`g 3QUIKlEgZdjE,@gfvl7@IlH');
define('LOGGED_IN_SALT',   '|#meue*$@^8d9G2n^e #v2#83=gJOY v^ph)|J_nWk^^#GImcC<}jlnHVrT-L3+w');
define('NONCE_SALT',       'XjPbq<SA(,noxR5h(XwoREU@2dv!$5HcG~LD2An*5qjSkL(dQM3!vH4PXC,cBJz5');

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
