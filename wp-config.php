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
define( 'DB_NAME', 'ieeessitvit_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ')Ob+Ug0aSSb9b5yO$J%-r#/10pc;b{fM<!T$?^>@=(,.NQUm5=/DE<}9=[qSbsgV' );
define( 'SECURE_AUTH_KEY',  'A;4rn$>cAH(?%c#vd#<T7) MnfzO.C)#u}tK,C.~u)AlpfY+<7<#wK5[oJ.(Q;) ' );
define( 'LOGGED_IN_KEY',    'Yx]cMRSI({;CJ&/<!ES;W)Z,)x+SBW4huG!q=sL5d(h^xqCVrZTPM/HF`=2!?Q&b' );
define( 'NONCE_KEY',        'IU0mEK 0>GRE]=l<5-.iu_WZWAQtS|K(f_Tm.n:z+=OaWkC=X#hDKLJT<R$1wMs@' );
define( 'AUTH_SALT',        '9I>+`4CPZNgolCXp?@UmOvV-+c|KV/yK<i:z$6dqC1s4$r~#N}e~$@Oz:;Vbsquq' );
define( 'SECURE_AUTH_SALT', 'TqPi>@HoGW#Fr~qZb2v7{ys3F1?h@d&<X56u1X*LKMUclIB<hs8|OqvOva_Bu*p%' );
define( 'LOGGED_IN_SALT',   '5%J,/zOU>s>V8t4I&6}lGVWfxq!DmiQ0U<wCTM%{qGfP<{Jv: h;b#Axl Her]PV' );
define( 'NONCE_SALT',       '90Kc);%9jllwlP$oB7l22W{!UE,W}ibQ^6_2,71dq4D.Jp$fSeJIQUwdJ}`>rP{`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
