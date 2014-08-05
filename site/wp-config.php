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
define('DB_NAME', 'menusandplaces');

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
define('AUTH_KEY',         '|xns+fk V`*rXSc;1%73}^juKsPN5.w&Gj3EMbCar4]^5S!e b*JqP/l#i {Qt$H');
define('SECURE_AUTH_KEY',  ' =])jH|#lH$/`,OdS6?9d2?Tlt,d^KW43jWS?_<3%/XpyZmH~2-YEi#+OAV|lIN@');
define('LOGGED_IN_KEY',    'zSO.bEWUweuY25EY/m;O%.CzIU;Q}+mRh*wh/UYhAFGUIf|FeKN/ryAI&BnRFD%7');
define('NONCE_KEY',        '@F?2eg9u+{1X:oz${n<n5YGE[@X(]x-#C[qQ8WjrI{;_MN*0c)Go],v,.UBdK9{-');
define('AUTH_SALT',        'm]sn%|PyGli#Y7w fp;#4)ye_1Wj%7_;-,(B(S[CiwIMX.y[ _}9Ka)ba2`WH7]]');
define('SECURE_AUTH_SALT', 'k}|lP!t_hx:MspVav]8SL>-R[X}A-3LrnL|2#tj2ho&i0qg)*Bj+W>N9|P+QtzN{');
define('LOGGED_IN_SALT',   '|cf+w*c7X;)Y4k|NOHgc!=d5Fb5y4B%WZu!^Nk&+}n*kme^L=TnjbLB:pOY5SYIv');
define('NONCE_SALT',       '3oY;j(T=:4w6SiFCBqL;Wh);+cLR5t=0WK}wPOrVj5zC056~T=,7M>E+szz E&ef');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_menus';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
