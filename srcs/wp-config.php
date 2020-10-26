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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'hucoulon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user42' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'K^ulV+HLp]#?.~R+b#9Q97G|lU,wOsPD%/2KDCBn&_R+yrpGx>ZAI9]9A]SB|:3@' );
define( 'SECURE_AUTH_KEY',  '4v{?2Xo,Qbu!9qQ|s.y!}7^uW+?H:$<N5M0DLe<s;Px]`Z-[_==?AQ%a-P:{J=Eg' );
define( 'LOGGED_IN_KEY',    '-f#8a+[:pmzkt%{r`kE[mR(T~8zNpvL|ThiK0)q-:6D{[E2WLi&31Hb2ID06pe/s' );
define( 'NONCE_KEY',        '-ogn-o:!P!zc+8g)aOlq~4v1i?NNa$}+dUWpvG|mo{x?|{cKn!ur|@7%k+B7z@pX' );
define( 'AUTH_SALT',        '!.i_Kf[WvG*Lv4D+lv|}r&+)Il+V9(yZaLinj22Ne={gDlFwo`=Dv_AgP4P6(ow|' );
define( 'SECURE_AUTH_SALT', '@XsE$-u?kA]Y#u,DjS,5v)+t3iAB/$n:|IlzV>tW1Hf*;Ib5F^yH$|GT5nMH&hV+' );
define( 'LOGGED_IN_SALT',   'Iz[q*v/D5@+BU+mz7L16>yKUi4_FYlnhTo5sVFGgx+b.(,o).@v6dGkiwC$vjMF?' );
define( 'NONCE_SALT',       'E?.B@BZqqs>[.Uz~u#HQ-R>}x}&ZmXDRH_k>R}YKDxN/8:{dUwSD-yn!H<stbS|i' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
