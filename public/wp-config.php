<?php

/** Composer autoload */
require __DIR__ . '/../vendor/autoload.php';

/** Load env variables */
$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', getenv('DB_CHARSET') ?: 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('AUTH_KEY'));
define('NONCE_KEY',        getenv('AUTH_KEY'));
define('AUTH_SALT',        getenv('AUTH_KEY'));
define('SECURE_AUTH_SALT', getenv('AUTH_KEY'));
define('LOGGED_IN_SALT',   getenv('AUTH_KEY'));
define('NONCE_SALT',       getenv('AUTH_KEY'));

/**
 * Mail settings
 */
define('SMTP_AUTH',   boolval(getenv('SMTP_AUTH')));                 // Use SMTP authentication (true|false)
define('SMTP_USER',   getenv('SMTP_USER') ?: null);                  // Username to use for SMTP authentication
define('SMTP_PASS',   getenv('SMTP_PASSWORD') ?: null);              // Password to use for SMTP authentication
define('SMTP_HOST',   getenv('SMTP_HOST') ?: 'localhost');           // The hostname of the mail server
define('SMTP_FROM',   getenv('SMTP_FROM') ?: 'no-reply@local.dev)'); // SMTP From email address
define('SMTP_NAME',   getenv('SMTP_NAME') ?: 'John Doe');            // SMTP From name
define('SMTP_PORT',   getenv('SMTP_PORT') ?: '25');                  // SMTP port number - likely to be 25, 465 or 587
define('SMTP_SECURE', getenv('SMTP_SECURE') ?: 'tls');               // Encryption system to use - ssl or tls

/**#@-*/
define('WP_DEFAULT_THEME', getenv('WP_THEME') ?: 'custom');
define('WP_HOME', getenv('WP_URL') ?: 'http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL',getenv('WP_URL') ?: 'http://' . $_SERVER['HTTP_HOST']);
define('DISALLOW_FILE_MODS', true); // disable theme/plugin install/update from admin panel

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_TABLE_PREFIX') ?: 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', boolval(getenv('WP_DEBUG')));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
