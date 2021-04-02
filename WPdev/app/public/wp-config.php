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
define('AUTH_KEY',         'Cdu7KJmHvwzF7/fN68vWtdOcE4zIOlKezrc5Zn0yoRmUOo92vvXSV9eSzxNscilWZcLQnFOad5Kb8mYGDNhAkA==');
define('SECURE_AUTH_KEY',  'QjUPpRD3gjKWn0nCunCQdW2CX+TJwZndE2nKQCWra/HjqZfep6BLTtriqlDC85/U7rTlWoT5uIDrAQsYZJ9QLQ==');
define('LOGGED_IN_KEY',    '72Z56r8OXfZoIy3IxwV+RF4/d9bXvsiJUiJp5ADu/ajfX3Y7mMqPvu+nGSK1zJwV4nbHGKfa0VKaUpfW+vDoxw==');
define('NONCE_KEY',        'l8kUN+bvtqGEaPoECtTI+FVL1ZxPvVCHz57Souchjhp6PkrT1YqaMHYQcLnfQ268OayzmyLjUxdSpM6RwSGzjg==');
define('AUTH_SALT',        'MsJrS5VejBQCHHCPo6k24MDxKLqrxGKR6cLHojO5I0S+lTOGslmKSVcuAZdEuc3q/1LWGWcBpoxTiA2jlqAw2w==');
define('SECURE_AUTH_SALT', '5p6GSMQJihfqmEJr4mMzbzx2pQBsRAPtBJPKYRNaBKmncpB/yl0tPsaHHtPUZE/1AscMJ1dMvYfrRVVPC5H7Pg==');
define('LOGGED_IN_SALT',   'lV69m686tawb82Ng6hjD/VY4edMy1XdmDnLWJaJTxXr4zCw8je4+hdzp/B2RyEWhPZ1ogc6linLe8uQ5qXnXXQ==');
define('NONCE_SALT',       'pOaXlzaQBzlZFZKKJe175h+19+HD3WK2V8Xne/mzJkffxvA+8lXJmVxnJUjA5baGHUKYC1Ac1uFSm3NTZw9oFg==');

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
