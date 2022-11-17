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
define( 'DB_NAME', 'audreyslist_wp_hsnmz' );

/** MySQL database username */
define( 'DB_USER', 'audreyslist_wp_ocnd7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ojngOMHwC!7O2F5%' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '0q2aW9!7H4YCThB%c!);&5W&~A*rYQ#/48[)8vBt*8J5h1@4FhZ6NA0/4tRY@-03');
define('SECURE_AUTH_KEY', 'w*2*9I_PElT6aPzPot@J!-d*rPW0~2O2g6RhE&1KX!906n~VH_B6*2AR28@PVI!#');
define('LOGGED_IN_KEY', 't06+j9i]f6Kgu7PA)&2-x4_dyb2/Vkc3~rhvh+NC5U%9&U(U[#7c--6r%53D:*(8');
define('NONCE_KEY', 'EH0X69ez(Aa!w92UY#bTO8VFjBBsCaMGnC&1)nq#GCxYk)GIxLgyJ@8Ek42A3&1[');
define('AUTH_SALT', '1IJ7h][X@85Cu065K!o9W|u:|1isD!3B[+xUx8rqJ2j8q@s9aukCu#V888AdE]py');
define('SECURE_AUTH_SALT', 'YA+Bvf61Q!M7M_ig#fo20ss)51iJ~gzdg)95W02*5s|hk[7EsXO94!S@pD4j-%zW');
define('LOGGED_IN_SALT', 'CdJw9~f1/[A1G;/(v09*WK|Wlb37p9O_2-)1Q/0RV%3M5XG1hGxX*p29Vt/KtIr9');
define('NONCE_SALT', '%-xUWLr%1I:*10sXcF~g&(-u|3!J]S%#wAGMz7xsLo+yQC!A7dnTYDm0%%v%0[71');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QpTcsOVG_';


define('WP_ALLOW_MULTISITE', true);
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
