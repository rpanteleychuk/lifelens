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
define( 'DB_NAME', 'prosst' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '05021983' );

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
define( 'AUTH_KEY',         'c78C{d;m~~~)@ZUJ5 aLe6O,^2RZ$?v=Emjb$V9BCx1[a!D`G?t[X5NTu{et?:eQ' );
define( 'SECURE_AUTH_KEY',  'pm+ ;](c(,*^SO3lS=3fQU=#VON<>x,hiO]Ht,[ZASTt,M@W3<M8u&f9P[(dF@kj' );
define( 'LOGGED_IN_KEY',    'W?(qUt]{eA=T|_h@zM,;?qN&p@m5:.[C`X!n~$+zU15y9PWAbb@mpm,YqLn7:`8P' );
define( 'NONCE_KEY',        'O{sdDA-=b3n?_iy< 6L[X=bpH<^orUxCyr~of(|ty^+g6(;;MM[}cLhjK0|]~{q(' );
define( 'AUTH_SALT',        '`u$@Ez$!(G-a7=u^[2xXCJ#/NeUE;}v1bnUDwR3T|=~jl;Ey;Q`lxB0Fb(YiZG`I' );
define( 'SECURE_AUTH_SALT', 'e&r0}^^8e1-]k3F/*KMQ[BrMg8Bh4>{<S||}[M97n$cWfdzHu<w~s_<n7jY|Z2wJ' );
define( 'LOGGED_IN_SALT',   '$RguL]Xey@Yq.^*dGh-5X].RmN%~1U$m|{t~e,Zw*Q?>dU3S,7>3hy?k?R}?v$7a' );
define( 'NONCE_SALT',       'h/ohgfrA>M+Ib~vC]Tp#[)iZWYr,g7Vs6tyah07(<)WlX}i&xNs!Co_*Z0q|,1=>' );

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
