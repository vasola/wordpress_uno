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
define('DB_NAME', 'desafio_latam');

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
define('AUTH_KEY',         '{qVM&czc@J1?VL?QJ;HZdF3[rr[:P@~$_-LH7a_P>cLl#+ Yj-=z=NEJFXb5A>a,');
define('SECURE_AUTH_KEY',  'G_GL(,]PUkjBUphrn&a#BK2Qo SsYY*w<6Slt4~!+2#9=j~6$W?RZwyacH2]$[uz');
define('LOGGED_IN_KEY',    '^ ~fV^:[~#,#6M};k@gx?|n&QRWj$4IlUlb!c(XTe] ovF,=7u;&^ .<b(?F5%qm');
define('NONCE_KEY',        'x175JHs9=+6:ni{}bC~O<Y;RW6URwC-@$;P7C.yR)(_`UcJa_UehMW`4-DK=-Kfr');
define('AUTH_SALT',        '`-]l87xiy01-6+IVxZfiFzT3hfn(4O~VBD;GSrIU~tHmxePO$9B;X*9c%>{/Wx%M');
define('SECURE_AUTH_SALT', ',yNrh^%_;h`HEDKq3c8hEDYhVjvi`,%1=QXa{paKl-_x^]BO/V:#exCX]uO;3R=Q');
define('LOGGED_IN_SALT',   '??ILVD&GSDU)2^c@dz2_S)+?2jb8x/[#3w[%xM;l+2$e:0m]HI|y,;7t?~o}6p:?');
define('NONCE_SALT',       ']g~yT0&478F%h*jYDtreM|?;7OSds]F<X5u2$5R?90M0yaVOxWH5~6vYu+-YW 7U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
