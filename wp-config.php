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
define('DB_NAME', 'CRUD');

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
define('AUTH_KEY',         'V$<TD&S+,E~3`S+1{#KT+dtH&r-BEbhjRT)J^)Te^~#4QdVS$qr86WqDr1qbFJSr');
define('SECURE_AUTH_KEY',  'u~|v.||,pF+yzF1e9mo+R[~dS|tyVi*6NG,5]aL)]:-;3 1[b$^!oG(V-YZUu.[m');
define('LOGGED_IN_KEY',    't<c7CXEw9v*7;%_c,kGm*aNII&uR{?-)|Qcv,1Z]IL|Y,#~drrc#7W`E~,+D0-CP');
define('NONCE_KEY',        '[?N+@sU;w}+W9 %a@OgI!r|H#^YK:YUaT4^W+N?LYjP$%G,%(Fx1HaYy+)H[C4L{');
define('AUTH_SALT',        '?`)H:YY@({o=|vr|u&RprsGTj[qzpt]E8^]pP H+y]+OP!L0GTE=N Z.`.4=+P?b');
define('SECURE_AUTH_SALT', 'jAV8lJoM0<k]:m/gFihrhL?DN9UU-Ah,,.!:3cbv)xVrtn(>{y9s*[,1K_Qe/>O0');
define('LOGGED_IN_SALT',   ':!>06Lc|i-P-zmTsFa:|t==stQEzqH+dc55|8>|})}b]a!P4|Ua^OR:|e.S-=:M.');
define('NONCE_SALT',       ';w.tK||8+xQrobPsb*+,!w*;vCiI_#MrXsh@T(K-czs2dyA%HLAcl=]PN}ghH]nX');

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
