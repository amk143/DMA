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
define( 'DB_NAME', 'dma_db' );

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
define( 'AUTH_KEY',         '&~/psRujbL%KD49xwm,%w?M84lR7A;-yLu+pbe(Ps~L(bV)BAhu.ESwOkK-RhQ]X' );
define( 'SECURE_AUTH_KEY',  '5<qyC`g:Gt7sX;7l>+ftD=[;.!lN#{C?N_0)tRR*h=h8_M@L#s<h4ajqBip<^E~#' );
define( 'LOGGED_IN_KEY',    'L}`5~I:Aq >#CW,hUK+6@mQc1ZeaaKaU% Y@,a~yYlAW3i(#~*E|-Jn1n1C .?8N' );
define( 'NONCE_KEY',        'JFQlD=p]2hpm~ilB_t(r;_VOi]l=EV7w%&puu~J?H;!#4JD*MmFZ=+7<mgHt`z_I' );
define( 'AUTH_SALT',        '+)j5(*asVwZ;0^0{fc/^bH]3jB%uqCJt4d8cT#f}}8c<Am]J`CIX~pCi5%b%DS^H' );
define( 'SECURE_AUTH_SALT', 'f#7sO]&w`amIi7W{i|FT+-Z<m+z9eU~aSnA{t1/K^W0,dOv`%qz-0mKxK6bsflV:' );
define( 'LOGGED_IN_SALT',   'fxd{KKlEsdm7j3^xi/iy#GDK~%-*V}m[0!_b>b|@gpY^(ei<^/>+kM[Kt_GnhZ<O' );
define( 'NONCE_SALT',       '&^#lM-8A`wh(TpX|eL0TybSoeH%rMXSrW_:6aoVCCW4-G3SOv g8~QqSrY|1fhr}' );

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

/** Wp Mail SMTP **/


define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'Pakistan1438' );
