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
define('AUTH_KEY',         '(VDyv7r4k?j% sH#o/jAyS6cjelqe|0c{GtvbTTKz5}^#Jb%!B%v%676d1S0@,Xm');
define('SECURE_AUTH_KEY',  '(6^_wRK$AI%P)_I>UNU30c%>6);Q[#>;zV=cVZK(?L^wKiz)C_b+%:SHC?:Rwm<$');
define('LOGGED_IN_KEY',    'hxRdU |+-SJ;n-$N 1;)k`8ix65an(];-,u3flztNu*7-AHy<9{Xu=pd^V@0Dtec');
define('NONCE_KEY',        'D<2PjL.vK0_Yi)vu8HA(<wBkb[3kSQVIs^b;TlxxgeR2l/!|&;A xau7s|LnHfP`');
define('AUTH_SALT',        '0h1:0&b959jyi91DAu%OSd=j%08$$F$@Bc] K[J!oa@&ajWb(v55+|Jj>H#6O2T.');
define('SECURE_AUTH_SALT', 'V018Lh*;&/2Z~jra>~C)z=Z^#n NCBZ^i9xxwjei]<j)A1vKa%23odx?l*1bI;=[');
define('LOGGED_IN_SALT',   'A=(U4^<kj2i=|XEC ;eaL5T}6N[~ZB;gnA&0LTNe`pT;<C):+wG{3i@J;<}Hx]ww');
define('NONCE_SALT',       '{$-5o|;n+Ad,1*<*#z1hANIfNjutQ]Arx#XX_@X;-#e$B2J7q23{2I3U%<p-S|%=');

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
