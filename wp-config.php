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
define('DB_NAME', 'db1207451_db');

/** MySQL database username */
define('DB_USER', 'u1207451_user');

/** MySQL database password */
define('DB_PASSWORD', 'B5YMhCaNaR');

/** MySQL hostname */
define('DB_HOST', 'mysql846.login.ccccloud.com');

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
define('AUTH_KEY',         '4BA$rpqOqtk.=P_MV?TVZE_,r.S71{p1@*s zPp6@Au^iBl3dDfIdD:acmb#19Ur');
define('SECURE_AUTH_KEY',  'FTwbM7~r-*Z3:WERR8*>|eR %08MK3T$,IzAM`P03c!q*FgfK7R<{ jRW/<JTi13');
define('LOGGED_IN_KEY',    '4a,[6@.ILArB#F<(M#+=(B6Tcrn(pz8A`SzO1?@?25M&/Kx?#4)G|V4Q(WO=h=vb');
define('NONCE_KEY',        'j{=P-#BcM#=F!<q3P3Qe7oVAlSDdh:aB?|p,&ygI8+G|5Fz^h1ut=n+H%=6}OFA_');
define('AUTH_SALT',        'MrQc.P? bK1urg}Y@P![i:zpfE8YM,{0Iuc.g|~DjUBs+N &`4cF~6gUG{<)#xP+');
define('SECURE_AUTH_SALT', 's,DfWM!0uHG/&*5(2YCZDK|z[&p% b0T>E{k8gaTza{|Yb`/{)5]FF$`3Ch1tQ5E');
define('LOGGED_IN_SALT',   '@<-JdKm.|^hX11u}[#D|&dhb~Ij=-<i+u|27lIQ+<kyt=r+lHw8I5WI>z3])@Occ');
define('NONCE_SALT',       '<|z1uY|a/(9no#>|,Na^,]gI}qr!x~vfB)kpaGFHk3P`+4lQt8ctK7Mo0etqE#-0');

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
define('WP_DEBUG', true);

define('WP_MEMORY_LIMIT', '512M');

define( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
