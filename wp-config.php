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
define('DB_NAME', 'wordpress_unite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '$:dnt@)|{0cr3*81(tjIo1fWPciWrXHFZCyuXbh Ot)Xu+~3a]OFb2i$ka54KpYM');
define('SECURE_AUTH_KEY',  'Y1MoQ3ox+9rf.f7&R9. m|C8(U%PX(;pTr5&_Sx,9/CAf+|E3LPZQDiQ.oc5QQHh');
define('LOGGED_IN_KEY',    'f^/:lL-z *2OClq;9eu1lss^`n4DLleULcu]lT~pwrmhb3tIMm`9xhXvy8NyI:^]');
define('NONCE_KEY',        'f]ZlOJh7|#,|_QXa14S2w|=A(2x8YhTidpP7*sD/svBNzrD)BpWT)l8B&B{=.[84');
define('AUTH_SALT',        'NgdGS%_H&q)l7XRN[t6G0LBO_Pj{:>Sq6rJ~IBPWBwA9=u%UdZVpC>hv^ATew}},');
define('SECURE_AUTH_SALT', 'D7BR=<mtuk,<Kr9?!Pz&8/|!E/4zj/!9Ht af?}*|DNc+/5RQmobNiJi;-?6}Fy:');
define('LOGGED_IN_SALT',   'tN#40p+U+zy7dAnAN8;G*Ee6xaw?Q#sFov,u8(oaM}`1j/~oF2,bby7^$^$afvn,');
define('NONCE_SALT',       '@9y-5Kt|OJj_pbl)$q:{KH.M@Y&}jMy!G0#N`+6Q5S8=K<8Tucqe*1G<-EJ6:8Ut');

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
