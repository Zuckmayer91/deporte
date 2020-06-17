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
define( 'DB_NAME', 'deporte' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qo3zxY41jTldKa2RaI1sMJ59BejISyKkWrD150VV1yxy20PuEGaYJDpm5C2U4MTR' );
define( 'SECURE_AUTH_KEY',  'bjoW2NiZv1mm1dIZtbENXytzPX9JRCBrWmXtJaALCObEW4f6fuljVcuSGp47Bll4' );
define( 'LOGGED_IN_KEY',    'EMGGVMX5edQakjjuJZkNPwzixrVxLSr3eTriQJxvcQ0C86MCoEHnVunc6kuaYpjz' );
define( 'NONCE_KEY',        'jd1QdFGqgmGwhIiKGek1zJc0fLoPnliYZl9dkWDXN3f1NHzQaUWipYoEYPFYsOAS' );
define( 'AUTH_SALT',        'ZuG6UbfYmaUu1lwC6TSBtOqR9dEGr1ODah4Ec5VyozRXT6edT1PGMO7t7LrzDWgO' );
define( 'SECURE_AUTH_SALT', '7DEJixIJzvok3OJybS2FDbYuSa19qiI99BDPwx5rbCAU5mmNNvEEnzPy8ZW1FJG8' );
define( 'LOGGED_IN_SALT',   'sSrG8lXsu6rSA3lvs6TQiAoABRDGwIBecglCltAqU7N9ghsvdDUd6C29fQyueaPl' );
define( 'NONCE_SALT',       'UQhe1vGAfo8bAyIuLZ1ntatzBjHkd7BJx3Aakou64KyZSv8mDRmSSTyaZbEURLW6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
