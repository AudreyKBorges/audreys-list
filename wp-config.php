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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define ( 'WP_DEBUG', 'true' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '533zW8VmNB0OxAKKKyB5oj76DRo/OLBbhKU0Cpy4NcKcKWVv1zGfdGamm7lwFuKpjsmb7a+2bo3CpgrpegbHag==');
define('SECURE_AUTH_KEY',  'XSytdu0jPWebU0KQTbx54LtB3zBGkgUBp8hDClfeptIZed098kyoTXuYtcNgf2rRaTidi/gyixVhtldRjIHE+Q==');
define('LOGGED_IN_KEY',    'MaraezeQ8iPoug8WKPbLn3Jwb5WrcKqI1pTPdhMe63lMA/wf0lx213uw7487erMWeDxn1ILvCH52RI4D09UaKw==');
define('NONCE_KEY',        'OLWUVVrgiQWFhpdsED1R4GZYU2TEubJ5sGSI/6N4xR+0RpcJBmRmy3PwRAYaVY8IBuAKafGTgv3JWwSlI3yCtQ==');
define('AUTH_SALT',        'XwDzdDnlS3MxopBxUaLH+9Geis8/8rZ5JmjCBVjur3Z4cL5Mmn1YKRHrMmscupK0wMbUYpLBN9ySXIahNW0YRg==');
define('SECURE_AUTH_SALT', 'eucwwtWGYVVVpdnImkWWrFc5iHWlwruTkp8/UoOFHXepVcJpOankv/WXmxNgVSOntJN1EgwFnbINwT7ftmd9Fw==');
define('LOGGED_IN_SALT',   'yA25ZwgNxq1P6eavfABjAMu8SyT43O9JgqxGMmaVjikkFfWJdOy1kjV9+dbqbJv2vwYjcDTYxZ0vR3tjJTbFDA==');
define('NONCE_SALT',       'IOJA9zzylI5q7gVqvzgN+NgYUThuJhRJbbeeEeRKdyBGO+L4GVNPRtcHuZqBZYkLTbjXQLQyIPVTIMSn5ry52A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
