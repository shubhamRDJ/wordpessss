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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'U[Xufv?2JIJviln{<{2m8g&(/iD9e[If<jjmX/FbD+NRCk-#${0tu__ ,#(lh}b1' );
define( 'SECURE_AUTH_KEY',  'X!?t-SH:=%RCXEF3~-p6v=mE707oYDL9^N3Qm`D%$N&a kLrVDs&1.5:U!6+)BN^' );
define( 'LOGGED_IN_KEY',    'E>,rUi(DM(9Vl Q}<PT5~BVn:UvTTtZxwP2D%Z<=}9^+<yj5a=:=Ov-o^%!s)).:' );
define( 'NONCE_KEY',        '=xsn!$Dy.=AUJD@]@+;}3u:zrsKUzERYT4^;68twRnT=x2FWz:[=ZO;rvTRn7wa;' );
define( 'AUTH_SALT',        '>V,9zoekT7QU.EBUP+^w/O2oR)f#dgBN<qA?%>W]ANY<f.wo__[wPTu=W.1dwTH]' );
define( 'SECURE_AUTH_SALT', 'Nn%k3q]}>NZY5hj:=E&Z4a=TwZkE^`/y^Q0+GZ-*QL73LMS$1a8 _%xD8<0`0CCi' );
define( 'LOGGED_IN_SALT',   '|Wyh2JR(1SmR/DVDiMp4c#:0XG,PJMN(So9[Dw, `$cgC++KQf,W<gf7y<<*zI7O' );
define( 'NONCE_SALT',       '/`6?xSd4+BJNoDxQB;{ez{E.wVzK&mFT6o+-)sU(2vx}4E/RPJbCOxYu^8V+A7l,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
