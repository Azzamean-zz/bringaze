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
define( 'DB_NAME', 'local_db' );

/** MySQL database username */
define( 'DB_USER', 'local_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aa2388tk421' );

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
define( 'AUTH_KEY',         'Lw(H[pJ1urqQAnkQ%1L<Fm.fbaZ}f0xEjV5-&TpN!7EC[-eC-G;`g=iTU0FC#gW0' );
define( 'SECURE_AUTH_KEY',  'vuEo;]kc>DI;}}B7w}o{]27~HZ} B24V#7E^>?@<)Jhha]]vrL@rq~`V0g>z<9{V' );
define( 'LOGGED_IN_KEY',    's=/a<RhJlmyb,kfC?e|9p?:FP@oc.?=5yC%YXBwi6#b`;.#X80cK0u|nyavBK_`,' );
define( 'NONCE_KEY',        '-FT4B.zx.4=[F#a,jQAO;4j_ou*XK/IZb%x=@3&6(iR_v+Ymv2`sP._YeC_7u`N.' );
define( 'AUTH_SALT',        'Ac5_6Z.(>&&2B0lb.*,9vUCkUdxOa ~)^RMV,.B#w*[cxW7F*($GX7>s&on335-)' );
define( 'SECURE_AUTH_SALT', ';vb_s^j/W)zzfwpiS(ZeiI)]9!46+/HS&wzv|,.S/QpY7@!t/86(Fj<~L}!_HeTI' );
define( 'LOGGED_IN_SALT',   'X|b<>|7,6aeH4v(-n_jw_A+-t&u*f^fHGFl{0:sF4~+w^+MeK860l0)46btA.mju' );
define( 'NONCE_SALT',       'D.Y>FV%$6i45PT$B>qLwPCq?mL-ll`V[WFt5qEQ[`zuF9jlD7V?JQHLT{9*uhAHX' );

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
