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
define('DB_NAME', 'ewfkggschosting_tayta_db');

/** MySQL database username */
define('DB_USER', 'ewfkggschosting_root');

/** MySQL database password */
define('DB_PASSWORD', '6{uC.~xAk){W^tX@');

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
define('AUTH_KEY',         '>p<rQC!wN}~y2K;tL:@W45%FyNvg;H@c&YVOA^H t>4vCf#A+?:AR?z6cIz)-n?%');
define('SECURE_AUTH_KEY',  '}?D1YT9`;,+sA;Yxq@QyyZxxpD2&Dd7/sAH~o|`n]{URz>p^m)d :9yZ!]eY9Db`');
define('LOGGED_IN_KEY',    'nmo;s9uucw$++99gdq!y7Upz2N3Y-Dri*Vu+{Qh~+@cZp-?V.P&zU~%~iz!n;$>a');
define('NONCE_KEY',        '<gKAI}aX$YrwXKYjn|ALo+//XZ8gc=0uM.-XQ^{d/YS||v+K?@RzO)#:Ju1x|eXl');
define('AUTH_SALT',        ']@a_AS]goSKgf+FV9,@?%h^Vo%AN9,Ai}-Pn@81$[Z6.6O-}ia_#O^l-z%{gpYSD');
define('SECURE_AUTH_SALT', '~F:4+%`@~yg[t)c`!)@A_f~Wy7lJBX=il^ *veUf]?-;|y;I3`amw03[$I!uW&9D');
define('LOGGED_IN_SALT',   '<9O<ha|t%$]qbUA5XBr]!+`}R7y58|?:]chhvQWrlf]bG:l@}TTq`5@-PN -Qr=k');
define('NONCE_SALT',       '(623o4`_ar@XLo0fb|lUO8 iinK@gMw,cDtt8T;>S{UKuq5IH=yrGkP0|D_2)8@+');

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
