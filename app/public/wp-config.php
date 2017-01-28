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
define('AUTH_KEY',         'piogZh91bbsGVcm/aHujdMxtTWtiF88+njc8lQI9o9/sWG+riEPNxeF0xeQ/09isQrjOCtZjpCBwgRtOex0wjQ==');
define('SECURE_AUTH_KEY',  'M0yMuARMkE8ocBpmeeR3ezhZd3TeYaZHuW2uJV5EoiQM4cC7PxSDpUGv06gWMRTyL9uYoSeJu61Ll2fj5hS8EQ==');
define('LOGGED_IN_KEY',    'Rxh0LMaaTE8/ukHWiSl9OKTpbmoqjrDkZw3hqpJayT6pV5darYw2FN+s+7F32rJVqBDgQcuWTNlT6FKIdAMLCg==');
define('NONCE_KEY',        '/QkP5itU9qEsQ6o8PfrD8AByb3nlPzXj4b36VQ+Sn3lGFjgWkTByQy+Od86wvgnTNAm6kyuEJBg4rt4MYMgD/Q==');
define('AUTH_SALT',        'oLSzULtPaPDknKtmgpiV6XUaWzWzHrjKF3MBT0KvZWSlByoOxrggV4YUqMMQtnn9Y1zpgt6X8+vFyOAJcRZymg==');
define('SECURE_AUTH_SALT', 'yE2Uv2SXOIZNd4BnePkL8yHnZHjSAu2IeEweMZKGAujkp/c7AntqaV8I/0BODl/LkU9S8PXGUiHzy0gPAgrVQA==');
define('LOGGED_IN_SALT',   'yOVM3VySS02fjpOwiAWeyeiuzChiT0cTyZaZpGzvNf3lPY6Bte3J2fa/G6ULgFYMLzwJblCwTYW6JWEk2LGwxA==');
define('NONCE_SALT',       '8Dbtqr+7PCq5e5NTF/3lFLJAmfQTNBGq2jrcO5addHgxC4jmCQ7UPIDjnkSKG4iDf+NjQgwgim7aysLu4SZaIQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
