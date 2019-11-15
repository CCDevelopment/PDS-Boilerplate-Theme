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
define( 'DB_NAME', 'pdsbplt' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vW!yQ04i1*%BCG}XIQLs>IlNx;6TGWZ~p!d9O[o0zKP*Ss4c>X^a:1>&Ty R8n@0' );
define( 'SECURE_AUTH_KEY',  'sSH%@0AAs]T(9&sl^FkRZ`H#K,n<1a,Y>ZMN]0Noky;]]X[^-Gd^liCQ&[Il&AsW' );
define( 'LOGGED_IN_KEY',    '^u_^H/}w,<TMDsE+?F#z|H]e$AB%+aBRY)9DAzq},.m&e}D%hb0*1!Q `PGf(@Tw' );
define( 'NONCE_KEY',        ':U:<mjvWTu[St.UlQNMF5P`KI-hunrR[2VUe4{;`Axj Z(okLd1/L1|{76C)a*xE' );
define( 'AUTH_SALT',        '[ycPFg!7HNhWs_2#j60=3?-`B_ZDBbxI{G%,6EY_-Qj8y0<y/#<I-#k!`@,$>a!r' );
define( 'SECURE_AUTH_SALT', 's<9Q}ty@qY!*#r,1J3PD:hSP_`LN]xr5U/,qWx#nW> XAI|6kS>v#p QeGjcz]S?' );
define( 'LOGGED_IN_SALT',   'ZVhLke!]._R9:r(b,Q-+)rp/IojQ3Iy}@$biHnLdD6%{z;;o4G#Dz~./d-Gc>pon' );
define( 'NONCE_SALT',       'o@P@gQy$W)vjulfTMpxoa$*F. &`x8<B+eD*ej&!:.HreVC.Zs~P/rH8 _wQlF<]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pdsbplt';

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
/** BEGIN PDS CUSTOMIATIONS **/
			define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/PDSBoilerplate' );

		//Move the Content Directory
			// Set WP_CONTENT_DIR to the full local path of this directory (no trailing slash), e.g.
			define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/content' );
			define( 'WP_CONTENT_URL',  WP_SITEURL .'/content' );

		//Move the Plugins Directory
			//Set WP_PLUGIN_DIR to the full local path of this directory (no trailing slash), e.g.
			define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/content/apps' );
			// Set WP_PLUGIN_URL to the full URI of this directory (no trailing slash), e.g.
			define( 'WP_PLUGIN_URL',  WP_SITEURL .'/content/apps' );
			// If you have compability issues with plugins Set PLUGINDIR to the full local path of this directory (no trailing slash), e.g.
			define( 'PLUGINDIR', dirname(__FILE__) . '/content/apps' );

		// Move the uploads Directory
			define( 'UPLOADS', 'content/uploads' );


/** END PDS CUSTOMIATIONS **/

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
