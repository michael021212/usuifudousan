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
define('AUTH_KEY',         'PENX7XnqAOLMGNJmxAsOwy7rCw/zONHXjssAFRk2zrpnvINa4aehM5ICzYadiEbvSPe31Kp/QgIfybjyhrqYTw==');
define('SECURE_AUTH_KEY',  '0V30XmB8Wi7jvj07H6ZpbWYkezrF9Lrk5FONEjwGe5fKVtEUYyUX/5X/o0cVpxSK3dUql1sRQ+opXJizExGJBw==');
define('LOGGED_IN_KEY',    'vJmlNGR3rike5qUtBDGI2APIFLbtU768WKR021SWwrYp02bFajpJr2RF6EPjhYU9wnHt+TgdkDxEkhEFQyWsoA==');
define('NONCE_KEY',        'hoacxwren9jcMUxarEb7dWZMCIqZSUMSx86utIzOTFjXz1LT7bDskuW1gN9VYrvfrNLHxirCl0jM1KrXNAS8jA==');
define('AUTH_SALT',        'B1yrqFO26tlUg8S9CdkLP+05jqgIpKiFFbQEB9zXKhaEFljrC5PzIh0WO6e00B9tRyfqXQCARfo8JxE/tAlCUQ==');
define('SECURE_AUTH_SALT', 'ZQ18jLF0WcdLRMy3w4HY24MNiHZSrQXSHgZJms4e+23WHPc7tkcDI7KF6vGs+8HWWZ9bWDSH+l8mOPQk0uMAHw==');
define('LOGGED_IN_SALT',   '2vjdVO9avwbrTtm3nA8EsBIKn1TBjY9gp1yFVlJEu/z69wvMsbe800Je98rBv3M4GcnFjm1NomxrM90TSpZtmw==');
define('NONCE_SALT',       'UIyaZem9hClskK4PJ2rcrPnLLEAX603Ahejc2x9JGGokKIZfxifPiZdsg/i1lUX8vuQb/t5jyLhuf3v07XScvQ==');

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
