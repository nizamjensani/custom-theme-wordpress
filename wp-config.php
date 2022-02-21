<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nizam-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']=Ifs,DI/1S~Z#b)fj`9C|+R;Gm<{TDOH.fD%F^^{@|vBA^*m<C@7?_a=:~>ock0' );
define( 'SECURE_AUTH_KEY',  '%?CFKNb.^|sPqE{Y#BZtTzF1qi#BF.evYLH1^->1a*O6I4>(wnG(#7s`#Q+<%}E{' );
define( 'LOGGED_IN_KEY',    '#hF[yU`Cx*1A%VXHeb82x`~*H8oOy~=yYw`q(GIa [XC^9zi#LT[I)F-|K[>j?WI' );
define( 'NONCE_KEY',        'y7hDND9mPz0Ze29ZfdU>m8j]Ir.23Np]([8KDE5Jp3TIE{7>:D^{4~/M.]96g;;_' );
define( 'AUTH_SALT',        ':N702V=Y?!UE&)XT^uWz,)pKs@3pZGtgw9*0zn=9BqoSc7qw@R&.jYwA;a27Cx}t' );
define( 'SECURE_AUTH_SALT', '@(&2=WV0_KON]SpfbZW:9nZSMH(vjA424a0afkXqp9JtN_ 28kA,;@=M:T6yM.s2' );
define( 'LOGGED_IN_SALT',   '0cjB2xn*|Oa_De;lR^KVVBxmW|[(=J@kX[u CH?$!+v6kR]:F9I,:iCqeD;fCfUm' );
define( 'NONCE_SALT',       'gtfd6@8x=7g^kz<oD(*CNMu&(p<N,AfL)WO9j}`N?:%@kyV5#V)w2+sk.{^ww/R2' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
