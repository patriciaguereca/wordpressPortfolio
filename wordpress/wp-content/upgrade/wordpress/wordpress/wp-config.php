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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@FAbX3@r(+SB/rT{)2]}*W/cdvJy:&%riLrOwW`0A1QnL-B)(McE,O]RNcbzHe,;');
define('SECURE_AUTH_KEY',  's+5)ke>+Sxm(XMv;[$N473YVOq!-^0v,E{>/hc0u,x*Q(pBW7)M3p;-:OlpOWeFV');
define('LOGGED_IN_KEY',    'H+F!DHy6?ZOlhawSK=`/:w<`b!0Tl9y05IRP/HMM@8F3F >9Y|@=rvNsIjrA.%X/');
define('NONCE_KEY',        'aYEt5e./mZaRl >?s{;tnZ#0uIJw5K&sNQCF[[*pK@XyZyV<Dm-uvv?hv^[}pSK/');
define('AUTH_SALT',        '63Mnpln1fv]F0Sa?eKhp ztq~S(Xl)%HEq`UO8;>V?->Z!M~!dKcAb[^_jY@=FI0');
define('SECURE_AUTH_SALT', 'yA%WU|dxa$E3O0k_yp-Ab:WFxF!)R8xey|meln@$)7tZ-H(/9;?-W<5F`&2[rh/!');
define('LOGGED_IN_SALT',   'iLo4#K;@G4w=.PECNG+p5d~in9X7a14dBzOB5b09lqSLXCaN^uIvQC@Du3$ZM8])');
define('NONCE_SALT',       'btPMAZIcS4D6<,{m~7$ZD?tG?5N}x/W[`jJm5sSau].aT#KAntF]<d$}MU $]7=P');

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
