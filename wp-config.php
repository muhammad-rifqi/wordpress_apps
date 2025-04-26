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
define( 'DB_NAME', 'db_school' );

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
define( 'AUTH_KEY',         '54<RxG5adZ_RTj(X RdbPh31e3*P@<7ZcI~ISsA_chB5@{rbg(E00Kfmh s|rT@6' );
define( 'SECURE_AUTH_KEY',  'c:.JA_K(=>5f9/+IoYsQStehd?wM7p1]RE]0F/L]z_FqY1e9o[!g)<5xMeHG2ScZ' );
define( 'LOGGED_IN_KEY',    'm~j%E2(d`j9yn:#Z;94rB1Do~|7hXxJz!7/- a,K?.(3&9d[R6urdB{ts|z ~2eW' );
define( 'NONCE_KEY',        '>(M_Da,4|@Q+b:vwx,,8a&7Sf1b^^~#8nYT55b44[d]meNY7nT.[@]I>jQ5OPU69' );
define( 'AUTH_SALT',        '|A]&Mi!M.X d`sO2<=*nNKSELO^#p(phL<EFn;y]Z{vpX7:z|As>!tkwnBzAO>R2' );
define( 'SECURE_AUTH_SALT', ':S@|r%a9|0ADP&MiJ%uit!zQDGjDQa%itV|L.6gIv4s+`Gqv+l*[]&cYr)jJC0>A' );
define( 'LOGGED_IN_SALT',   'K-vFt{Re3dHm:/RC~{%!Jy(yMrV9nJ-O#vT0]B?p{PsLw37PRcpYUkLz*16D3/80' );
define( 'NONCE_SALT',       'S234(+tG|V1xZCT#[G;0KD9@o-`Blcd2@DcZd&TnImK?er:vzF$Q7]tMI9z{b0;X' );

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
