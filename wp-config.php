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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         'znGa !u4Wjb~tBvXZ>a/a:U=$g7{`$Y1]9X#D6T$ks4o !vaQd<,s0ya szNp8Z=');
define('SECURE_AUTH_KEY',  'ft!(b5[6H=9{ C~[+k6cOV6Q{ OZmAgOOU*~CgS%rYc(g!R:X[4142EP[~QF`#x9');
define('LOGGED_IN_KEY',    '[O~[o$ s_ s.fmMNiYF]qc.JwQT*MxIABEpQfn9zxh|Wvdk?xsVeEj3S47SDkmQh');
define('NONCE_KEY',        '[s<<CT}Mr_6?YP1ipSMLZkFV5&}OhS!%@(@slCbb@R{1T_.Q_tk_]`oFw Mbfa-|');
define('AUTH_SALT',        '8F9~SzgqiP Kc,6Uz[r}5zZfXV>TTfm1`9L,E^*+zJ5fvuW9oX4*Ub8&=HkQ#Ec0');
define('SECURE_AUTH_SALT', 'Il$#I6iGtM#ZpDiIbSVzqyL`=qn~az0.rVu?<C}R>,],wyu`|xH$to0-s%P}w~UQ');
define('LOGGED_IN_SALT',   '}0GakDU^bH#IWBL8r4#ma)*fu07zLKWlL%,Kwc8t[6I&jIg_[S~|BB*zwP):KnQE');
define('NONCE_SALT',       'CSEC~(!i_V@004TEuf`R9f/oVXXCU+NJr{dqA]CJ%Kv$Z+H:hYnKaj%:#I2S+I8`');

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
