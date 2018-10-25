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

// ** MySQL settings ** //
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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vinpgr+gVcQ0cbXuhMfCvHlgp9qJkAhUwLnmx3xBHwSPCHLDl1I82n9IA/eZ30sleTtCK81d5FHn7UqBReZJ/g==');
define('SECURE_AUTH_KEY',  'k7znOwNLhpnf3Pt33vEbgM/XVJbfGKPuhNJVbBLVqG5neZeJ3ZHh+x+EB1DRQRVVV47ubyMsr5rXes3S7a6Ang==');
define('LOGGED_IN_KEY',    'HJkSvWmJEBca9Ik/9wTWKsbwPr4JVRBR+gLFtUc1SGOmqvKwHmPK7e0KmBT1YDOHrdnMzsfrLs+GW2eR6h4ITA==');
define('NONCE_KEY',        'ZnpmYvjM2Nhq1/0jOSQABCMWsJaEoGA+g/+B6DH28ZMFtjFe8U8mvMObIg4ZRqdTM1mbQe22XmP6SB+H16VQ6w==');
define('AUTH_SALT',        'd2NME77FB+GV+ofBbQh5J7+zSHsFC65sK+t6zi1lAvQx37hDOpJ6ys5KXDkQZcrCmrr9EgIwnRJ64TdalfTiWg==');
define('SECURE_AUTH_SALT', 'Ab25hrkwvV4CPxJEfFqK4Q3wVbiZZ7VFtZnAlX/+0d3g7VjUvB6jhPmKnne3GHX94Rxu/HwqMLBmWrfwogNOhw==');
define('LOGGED_IN_SALT',   'IGK1+Vf9OA2Fz8VpUctyoj8HwCUd5+TXGlkgQGBKQ0Nu5OZWDzjdCUJz031x89FTmdHJsI/EqISBZn41zGxv0w==');
define('NONCE_SALT',       '23b7+iuvgbxY6gJnKT9Y2/fH2n8oscGqwS8xPuMOB+/H1o/rLHdt5CKgqDOLHABha232TDZs0s3OKa/1rosufA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
