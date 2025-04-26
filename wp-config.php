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
define( 'DB_NAME', 'busbooking' );

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
define( 'AUTH_KEY',         'mJElLD5rGCHh_;.lHJ?6AV|IF$Csd$+hLABh8nL_or3_a-m*N,.w..`gD,<8HAN!' );
define( 'SECURE_AUTH_KEY',  'N)ecNk;c4tT8Eyh:YV`T;L%a()tz4tM_q AN,V<XmR5Is&3_7cp*Wb[PBJ[GbU K' );
define( 'LOGGED_IN_KEY',    '8MCr3)qy<faL<i8p{Cc^M9ZOThs]NEzps+qjO3y~!tzZPWyZ!l?mO@Y6@qt5[S7d' );
define( 'NONCE_KEY',        '>SR,D8zU~gs2mCF_W4-e/2`GX5xS{sq~aW6bhrroJ@5hy)JI*fH#<.@/%As+$j&{' );
define( 'AUTH_SALT',        '#ztx<V?q6nPY+zM&x.#V*HBeVStf#(1^K`[4.q6ab._ U18AV{{@2_yKFIxiA|16' );
define( 'SECURE_AUTH_SALT', '{1aroJVf} 8}~<V.C.0Z&`CRdfKKlp1kWes1IdD:#HO(#X3+_UE,Nky>Qg4Mspfm' );
define( 'LOGGED_IN_SALT',   '+L{5CG)iO7z+0hA.Czwh/}{Oe)K?(m]cRF^NJ daa^HjAAJzkrrQHNJRU.b*hzw;' );
define( 'NONCE_SALT',       '5GG9k;g%/_a.8r:1Pz/r/$d@5vp.XPak#a@1e+)t.JmON$~T|A<S`QMN>Ky8Nj4?' );

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
