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
define('DB_NAME', 'jpj_distribution');

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
define('AUTH_KEY',         'Tq:{RMy#IeQVP5t.C3V:MAwO8rw94(TyrtU3}d=EF8l_G4bVD5O}#zvkOT3K/L_7');
define('SECURE_AUTH_KEY',  'xzCId8!m)|kVi_5A[+S<@R0B;KM{yy3*TFmYv.s)9T<Jqr/|Chodljo/i7hB+KP@');
define('LOGGED_IN_KEY',    'upvzz:&N|lX?W,E!Mv4wmY|>DnAlC{rremz_!JF,LEnJg9!O0&0!G30T axGA%mz');
define('NONCE_KEY',        'C]%+<o6Fc,I]VSu7]})CUZo.U4Cx+A!]b,ekFSOdoOY4uEt{z)|&-<-zMCC3ZP5x');
define('AUTH_SALT',        '/t9H^0.6ciN8w>CK3KacF6u8+=pCO!U73R{#S.w1=C.XRfy rjmQh^ dI9nZy>,}');
define('SECURE_AUTH_SALT', '! <;p](1M_nD?FvybQQ=/P5|3!{g7x*&k.fJ ixL(ZffHp%G4vGShQiNa74<JjI9');
define('LOGGED_IN_SALT',   'MS3C[|z![xT!?R(x^f]/QSsKvv`A2;GLPf*~$^^44<8$Hd#w{OR:=w:?=W,w~Z1n');
define('NONCE_SALT',       'nn2OtvW_^~d~1I@YY^}N7zV]R?2<,+CGXnNdpl.7EA*53sa>sG^GK4G.;;*qW}Oq');

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
