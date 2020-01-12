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
define( 'DB_NAME', 'bonneville' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DevenirCode1!' );

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
define( 'AUTH_KEY',         'q# O@]?)xu]8?r8/[8`erKegcfr3uBx~O_%.rq3E]:-s%9}zRjAtWyn1TQ4<*UO_' );
define( 'SECURE_AUTH_KEY',  '>2`|iKyAkuC QtO7.:%.<iEBhBo}bYDb$~N}p7m2e)3*_)F,/zh+9m}(DN-6TK5G' );
define( 'LOGGED_IN_KEY',    'K*D>P9CzN.rWourk|%#XsuUT|:[7:rKk+Q>=UXFg]Nf7L{n+3^6=qT4ua7df-sbc' );
define( 'NONCE_KEY',        'Zr|frL|B/GT9@PpvDB`x[ilvfOTB/_c}4S~.7n#{bL*; _9~{)Idq;v;H;_5.u7=' );
define( 'AUTH_SALT',        'FF8gu_#t kKu3lT,N^L8[N(B*)i@9L)@)|%N!+ k(0#9Q}R2&g*unV,XSVj[1d>^' );
define( 'SECURE_AUTH_SALT', 'i3@c#R~b7*YnM@C2@6C[v@T8ql!m V!((0@%!lHlqnuKVd J=]9/8 uZUDf1[Ku+' );
define( 'LOGGED_IN_SALT',   'S&p-9/C3]GK{VF`ia3SX3TOmSl<PKQK%nw&t7m;!]&~ll!IuGLILm/}]JMq`xu2,' );
define( 'NONCE_SALT',       's_!D[~x.WxX3~cKJ_8;dVRKE-oww^dcxyMi[ 1c$pO6}[`&f,c$+,y#u$<qW&NO-' );

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
