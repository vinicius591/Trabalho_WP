<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressMV' );

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
define( 'AUTH_KEY',         'SwlyjzQS45|nk>_8}zS8}BSY~RFMJ#]P7Fd4$.NSP2S7}~*aHZI]HcuB6/1$b@dX' );
define( 'SECURE_AUTH_KEY',  'Ws<A:3N*obp(19]cS]=^j=?tDmcY?M):N;fC%n[wl-W.mw_)weDtf2=mmQn?x=A-' );
define( 'LOGGED_IN_KEY',    'R`(FkPj9=)Sqx$*y6,8imdQJJD5*tUH~vD,V9tb]%Aw5#hkAQF:/U]zN]AKa@7^F' );
define( 'NONCE_KEY',        'hgm6O`i4K1DsWvioh`jh2|;j<J3>pp7qrmvR{NyD*k2k#<9a1}3WTi*uTH#aoJjz' );
define( 'AUTH_SALT',        'g(pDF)K Vw3,7=s<,qa8.Tx0YD^yE#V6:qE3EHvkpo7d5<z%GB;e->zXiS|3]bkH' );
define( 'SECURE_AUTH_SALT', '>9L(8g#c)YLussVX0]Y:L~*Q^ /eGH1x/Pgxn@en*Z@;W~$7c2+4S_dvC%t_eB4*' );
define( 'LOGGED_IN_SALT',   'gclRC]~2oAV]((0VGfGpsb@q=.t(]:B?+me0=GROc(Y[G[A5[FK^k{atO3~mk69~' );
define( 'NONCE_SALT',       'X>h`c]Fg,Mr_4$]yD+U-W ^g3ymMM{QM<UI)A45nGW=A[4z@* %z3jY`;#cS4-f5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
