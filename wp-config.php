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
define('DB_NAME', '2017!_neelagiri_tea');

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

/* Disable theme plugin updates */
define('DISALLOW_FILE_MODS',true);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`66`B.WM3%Ss8eOBTrRFc/q~(3CbWBD;f};dewPpONzM9l1t7SIXy[<wj=55;{I%');
define('SECURE_AUTH_KEY',  'F<:QT#j-{0%<b^]Hq)5IRMw9|/Caexfa{zj)H[!ogWrS)]MrnT];`#2vE9/#7|q.');
define('LOGGED_IN_KEY',    'mX4ij05v+SazQmAvA%i`KgNrlGFJ#`EefY!AiY9Rqht7VH4q.2){gDfL^.9:%m6a');
define('NONCE_KEY',        'ACJ?uO(YA]cgAMqM!Nv0C4,3hK>w9HU*bIK%btBNC}o9C*ppn[15/,o(,SCec6n ');
define('AUTH_SALT',        'C`2JY[4PlZ+ex0n+-_s-Jg^]2/:)$$PI6,;>|<#82AVZ73fl%?fY=~{.TWGj$#VT');
define('SECURE_AUTH_SALT', 'S~RsD{Q1p2<L:Y_ySjdUQ0m)HxuBUTi~LO1Cs*e0^NLBE[v<)F*uqB~K2NOmY jm');
define('LOGGED_IN_SALT',   'p!8?o/eb&|r^p_mZdd{id3UY,j/5p?^:.RjXIFE&y|n@$&7M-9O5[%&qdN-=hU5j');
define('NONCE_SALT',       ',>*IDXCcK[4A4zq$+a}9<x$`/BP;.k:Ffy=;uZ$X5cPihZQmXjL(!365kJn?6~d4');

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
