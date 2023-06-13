<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'gryxFC5j6Dl5saAQZGp95jSmJhmw0q58cWnzxkaOUgDlr4UbWbzBoVT3uK5ZgdehXGjMnbEHAwOgijulkWNa2Q==');
define('SECURE_AUTH_KEY',  'JQnN23Fox0qzZzLOmqeB6YtYssJEATBmyuxi5+KsOFTmshsVcUM9X++DDaR6LPtNRNizH58IdtyIUCnMbhJaNQ==');
define('LOGGED_IN_KEY',    '3cA74bPzTltEUpT7M52BCZJhVNxjqI1exLDVSp4k2bzcAOE7Y+qyNa206K59tlharPtyblVN0BjUC8CUUDT9fA==');
define('NONCE_KEY',        'P+zi1iTQ+pIVca6fs/2qRHlKwj2pXObylrJmthMAl0kPkVxifsZbT0KYEq6YFksCc5f/ib7/0KTEF8dIeihZCA==');
define('AUTH_SALT',        'vEjVRwxubyg31zARr460ccep/8EmUKpCa/Au8rm0ZEfC12LgbOh2VnxqeWSSOHoPtLEKSpaO/EM1prMcC+5tpQ==');
define('SECURE_AUTH_SALT', 'iu/VGn6Rxx9V9LS3kYqOfp+awdFTXUaAcAZ/u6F+MLvoMAflzl/JTV6Yo/69IJqIu77WaxCXfMAmAhz8RvT+hw==');
define('LOGGED_IN_SALT',   'oO2wEr3/SknI8FPyqrZRU4cRpeZQGAhvKNFJ93aK1lYXtvwaN3pk1ojCLPUb64w8JRCJgcMDzU5ioYjtMLeQ8g==');
define('NONCE_SALT',       '/s38VDysn1EYiAkb0G8KYJu8js6GkV2U9w0fbmqwqjAzSchWHRttkthrfz+EQLQvCmFVlZgKtfwzj/s3L3jlQA==');