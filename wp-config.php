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
define('AUTH_KEY',         '&)LM$&-/l>#>>q$n^BPtKVk>&#$/BGzV?klV<#U;-,=-grdnIjv3Q^2U?S>Qr/%`');
define('SECURE_AUTH_KEY',  '&Q-l*,_tV4C~vBO!I-SHehR6E^GHd>m:4,QlC*,3jJ_[Z+2fSCk+b-RsIk7=4n%u');
define('LOGGED_IN_KEY',    '=&|05]Ad6a#lZ+$,qVtt<_H?jH!K<dQ&+rZ+(e3r` Y}.0b1apG]@L65NIs|V38r');
define('NONCE_KEY',        'RZa88Ap9!K!Cat,N;Y#8#z#;7j`P1}5gl,J%T-,u,I|pnq5yHc nFM|h+;|8K9&[');
define('AUTH_SALT',        'D1{+l<4Nb][{n Ct?=Fm|2}O=Co|]P/{[kV{))R(wwNgSi?0q^|Z4KiYDB(w8RfU');
define('SECURE_AUTH_SALT', '*]H|N%t9ex3SmD}dhKrJ`qj7^.kF;OyAtM..eLoR^r#O;(6d E.9anP@-7PUzE:5');
define('LOGGED_IN_SALT',   '>H%)6+Dp;g&zT`-sL-WGx}i*^A0-l{r,}L}3I&N-!y)#fDT5|Cor+SUvkI+q/g64');
define('NONCE_SALT',       'UfCzGs#D=eEy6<UfK:k?S7$+[zq>{%opj3x-K,W%1.vCE<m?p[+LK{&!OQLAb_HM');

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
