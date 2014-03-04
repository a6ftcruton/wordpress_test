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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'p4gtFm@,R9(?HP#O~2&FV,a5@%O-_Q =I-q>wR;Y*4~2[F1pp<})Oht8v$,_dCiW');
define('SECURE_AUTH_KEY',  'y@||Fq8/1xH5DQM+FYisO2J,>JX}5u.]/bb#LcEg+nMZ_E?J l._rTDpu-a6zb=2');
define('LOGGED_IN_KEY',    '}b_$&`-2l7~jkJvIt+cviaq]AkfHJA4,|Nc),|?cnj#k~-?cD|/;zuS0$=TxuAX4');
define('NONCE_KEY',        ' *TGG({@rtLU/tbY1lk@@e_{5cQoB e];`+|`ribV)RJ9:n LcSGfoz@rbi+Oa//');
define('AUTH_SALT',        'C0J)#iRM$lC7!KQYHo7[eeG=5h%905LL3ayeDzo_y1NPUPfNBy!c+C0klAY=*s#o');
define('SECURE_AUTH_SALT', '}]pgI;zo2XGT-c:SKM)ON@ByED<r=|.v3y(%qaj~_P!l^pSj+T6D+@@+qDpm`#H4');
define('LOGGED_IN_SALT',   '&2y~DM4:JKd|Hrfd~aSyrTsh?Hu;5.tO8Bp*|~+).($MpXaPx,GtkmqS9|-JY(HD');
define('NONCE_SALT',       '_o63o1;P+|IbO36RPk0Ek^[>]xHRo1qolGAN4|3;6]yYr=y@0Z__kJPSU]K P9d&');

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
