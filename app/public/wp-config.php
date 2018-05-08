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
define('AUTH_KEY',         'NCuo+ma6JmoxswehlKJiR0p6SIE3BBgrKVoSZ8p3yRAatTCpP/Yx/O+hwvlxFgA6jybEveUdXcszhtyceqkDyg==');
define('SECURE_AUTH_KEY',  '4dcFT7JaUmiJMDYPP6zRHE4ob0bC12lW5DVsCKNOGOsJ0SlnUatgj5nxEN4oGuWfUXP3LDLJjUHYvf0zut8gsQ==');
define('LOGGED_IN_KEY',    'pv/QmyNUB06pa5MvHsscCaagEnAn0+1V/BFweOwJSDDyNWPRccGm8GyjlqIegoZrxlagBrxKyCEH7/M0fpD3Og==');
define('NONCE_KEY',        'VoJFQCV9m2NTERgn76HsZQCkBtmkEsXG+t9hpnZ0rX79eBkSngha0c7bp+PvucvBRliqR+sy0rnWTuH2fOUpsQ==');
define('AUTH_SALT',        'XxI6qkNavnmMpKdEeIZ+BCJOnEj7OSaoiQjxkbDReHdXJtJVbc7+ghkdKOXhs1QerhAnu31h8C9rqO5aEr6P0g==');
define('SECURE_AUTH_SALT', 'SgPcM7MVK/VVJ9ANaf8Ik/gxQ/WNTF45EBsixg03QC+5be2cwtSbtHZ/sUCCxCXwgoX6vDhsu+G7+bz4Q/z/og==');
define('LOGGED_IN_SALT',   '3C+sWmcV+dG8uQW/fWUM02Owr9L/WrTwWh+dO6VCqRBqrujJkm8UmJ+mP9jk+ocXBwt6dMe5qVqjBfL/IKpoWQ==');
define('NONCE_SALT',       'LhYXZ5SdTleUv9WLq5DyLYxFGPz5rhmWFXmUL04mpbG4fSFtLLndxFzCmtBxhpmVkPHAubFY9i6MQ/LH6oHBZg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
