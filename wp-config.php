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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4{quW; {04ve&LXg4bq~rhX< =W%tZtj*_B)*8[B`H*@6tHHlt[6 q`@.drOP&y+' );
define( 'SECURE_AUTH_KEY',  '&BPxl`V_rt}LA/N|ev!u0k~b8gG g||pxrBr6L .p<|*F.T/0rR8f91I{j,iwm<q' );
define( 'LOGGED_IN_KEY',    'bbe5F=cvS|}zo~vsI~:)GRZg+It0N5JP.U9#LQE4)E&QJY^O*8yzx3[(jnZq>,Yb' );
define( 'NONCE_KEY',        'GI_[X4r$P!%2mMl-n3G[?/[33JSz_)X&A;PO!fyfQd_|~s8/fyNuE-}O~3wBGx4N' );
define( 'AUTH_SALT',        ',WSm! <qR_2E 7FbcT.P4,J>40Mac`znq4o*7~gVr-LuY8wC65 jx|YwiKv27=8M' );
define( 'SECURE_AUTH_SALT', '7MOuB@. !$8vxBx1C5E&KCBf}K^m8?^tyd(X||e.3lgQELyYop@L;^)E#=|8M{=w' );
define( 'LOGGED_IN_SALT',   'y]hv8HDomuMp@h~s;^5t|X8*C<!<4?9wHKdF(7>16$2 n>FkK;a#R*7$M=kk)iTl' );
define( 'NONCE_SALT',       '08 ^KlB!r;Nq.t:CcJ3M?o6kj>3q;0K;&07}T1QI >;&B4xNoJ?C=~eC<dA=#BA]' );

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
