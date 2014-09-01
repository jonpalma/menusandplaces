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
define('AUTH_KEY',         'rh-lzbeuP9Cb+Lp^4j$bklT(@S3;Ne6L#@N,VID`IRC:0jz@,KSI)npe4,}9Gn-.');
define('SECURE_AUTH_KEY',  '+e[IAE+EbX@LF#`#;AY#AIg_y-z0t>F$-M`$^hn`;G;pgIJ+NB+;D?@9SBfbD}8<');
define('LOGGED_IN_KEY',    '*_+D@)/+6wGxU=Ze-}RxTx^Pt~tzs4B zYe#5kqb&zb!Z&6~H0Hm!fZc[8=Xh|[7');
define('NONCE_KEY',        'AZ%^@YJ33J$OOgc!+UyXGkFG!K-id]wQ[QW=.xe?G2PcK4J^a-Jl|IGUAep~-=iw');
define('AUTH_SALT',        'k{cljFBwVl+Bj>^8eSOvr@Wil]tS-Wtc=:TwcnMYS.J=lAb78LM&l~&4N*%V069/');
define('SECURE_AUTH_SALT', 't+qDZE[qXo:A`Q|#yn4da=kO=GH0v|z466kCaVa2<iZ+^|H&Fmx0`q$A?P+uEwl1');
define('LOGGED_IN_SALT',   '!>bX,D+!/do4^l#3^|]V:&A3R)zvw-r;6qmENK_py1#xith|+|& ceQ&iD!Urvmi');
define('NONCE_SALT',       'pd:l/3`kYK#s&L;Gf5U0O-Aw]5ESFt6152}=qb)@rw@2-7]Q(|5Bkdx:+o<344-5');

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
