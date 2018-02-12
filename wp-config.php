<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mywordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'tF~<$#XPwfcnL5%WE?LU/AMu<V:8PD7R^850_,Y)#^_- c,M9:BB{y|v21sEb$AB');
define('SECURE_AUTH_KEY',  'Ab%J@/21>mnC58XT6vUBeg!_7UqO-*9Y(;moH7+q4{O7fU/;;/4~g*BeEHo1P.]Z');
define('LOGGED_IN_KEY',    ']PK>S!4>5#gOHciGiTE2tFaD1b^Is{#dJ{HB+OJ%RL!Y!^[*aLu]$n3?cDOCgint');
define('NONCE_KEY',        'c*6B~@bJ<aJ(Q-Vl4o>.dS~d(}ve~vSv$0dg !auClk{bl,8@CAX_,nt@RiI${fW');
define('AUTH_SALT',        'mIwc&DdRkIhfDQ gXZSABZm/5Md7VXa3MH?_tSgQr#5GzWXVo74,=N7PBADsFLC>');
define('SECURE_AUTH_SALT', '50+w-HOHaHWQL&{H}%05e&VL{vF$<o0o]1X=kZ!ccMk aZ<R/M(hBhPO#4}w=yCi');
define('LOGGED_IN_SALT',   'g4Jom+V:G<6MWQ39x|Ih^-g`}lG2SiF.*A3D%pwY5LE:,gv-p8pL#+=I9|T(fAg[');
define('NONCE_SALT',       '}xDD|-r{8:8PX2kWeeX4%g aC3E0}[/u#?0M@:@6,u6]$9S~X~F&~ ^9V87%eXby');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
