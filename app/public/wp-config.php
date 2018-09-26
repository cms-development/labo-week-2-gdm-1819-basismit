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
define('AUTH_KEY',         '+M+1PHbe98G+0jD0yTKZLrZDG/wTz3Jm3LTlyhF+QzuEfARAuCfSyVn5JE/0Aku5dNmkK5IIG/QMt1/kpvm9mQ==');
define('SECURE_AUTH_KEY',  'aA+AriubW7Xm+HX/Za5mlpWowZRAlMXuYPcII2K5I5N3i4wxeWIPly29Ow+bT2K2nqkAfe+y5tjjmzNC+YrVBQ==');
define('LOGGED_IN_KEY',    'e11UTctbYv51nuPnqHYxCnMzWjeLAEktSaW80c399qF1dla7vlVPloPHsLHH1ahiNLB4zMxkyKDD7fDIo+Imrw==');
define('NONCE_KEY',        '/cmk9Ex3qldQGdh8SudiToTFZjkXlT6rzHQ/oeJqzjKYIK3qJmecjL8uUZx1AD00wHrNAL6SkfTUL75nmATQmw==');
define('AUTH_SALT',        'fScYgja/MmACPnVXFL2sb7QxE8UnJMpSmJo7cWjcsOMpYRf3aQrA+f3948ko2fOhKR8348yUNHDs26IOjAYy7g==');
define('SECURE_AUTH_SALT', 'CApCbTHDmX5uC8CBNpIaqfrjB1Ay3c7DIqDXQq6nhcG4rwbqJ69IqV89LWSD3/JABb+sIKlLDgAn2UidnRzRGg==');
define('LOGGED_IN_SALT',   'okvcFkbYuz2cVlcwXUbuEx8e6IaL7PwftSWYICtHFa4uYCyKiDn3arh0kt6xQ6++ZXbUk4N3wPhmHrHjncsoPQ==');
define('NONCE_SALT',       '2sDoCLvxGli1ICIdHmm90pqJgw6YzCKjSa9VEfazFfuRhtWeQaxZEA5OQZYSKFKgeK3q9W1csAePfSgTcC5MZw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
