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
define('AUTH_KEY',         '86FFsZ7SGpIJrX+sDfxnmJELOntD3poERW7cBZr+zJXUDt98t5eX2TmZhHowf/9bquSp8SsMbsMH8FY5hfucqA==');
define('SECURE_AUTH_KEY',  'AdS2pswuWL9ug2+4yLT9mBrTmzqHGVOzL3Q3e2tPZ9uileyRKo2b7AVXUYaWbdUDEn6yrzKe9MiHcBaJaZX2Gw==');
define('LOGGED_IN_KEY',    'akMxWTDwT08pXk0Zepvn1wqEUxldkMWJZpAu1EcuJsNy6wIaRaO/CIvf2a2JhP7LHshkjbmIfoXdXRnJ+TnORQ==');
define('NONCE_KEY',        'kmS9QXPiZFObcCZXT0TVbpTrw6ajNlswaMg5kqADOUQv5drc+RgiYyqAYdKTmpB+6pIThR1kpa75JNltqc4h/Q==');
define('AUTH_SALT',        'BJqfZjzYMn69foB9OiXQElgkJ0VAKpnl6OGksYbxJoe+H4TdBKXG/iaPUQA8Wtoa2Ko87ICdNDwibPzVTvY6lQ==');
define('SECURE_AUTH_SALT', 'D9KLRAl2EZDTccTfMQHoO5D2g5jvBTX2Yz8uhKgGMKAYhW6Fq7O7nEFvoBpOerSSo/+7wnuQVFCIjqtMVX02OQ==');
define('LOGGED_IN_SALT',   'WxOFAxxBE25MK+y1pOWKBOLlmmuKWY8V32bGprGVLBWxAY+CvX8GbstQvLOnwQJY1tQcGSXg4GR0B57wED4lNg==');
define('NONCE_SALT',       'EW8isqiuzAeIx7ENrlhq7A3E8e/VCSbOqyecfRQEx0/fi2oOdxvB8PWLEVo2Zx5drbvz1jspi8P5+vXzJ0LLZw==');

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
