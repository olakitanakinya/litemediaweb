<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'litemed1_wp686' );

/** MySQL database username */
define( 'DB_USER', 'litemed1_wp686' );

/** MySQL database password */
define( 'DB_PASSWORD', '.d2Y9!p.98Z(S.K7' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ii8gbb6bnzkpavac8tuthacuesy5uptqjtbjsxl1pwnycg0d4ufv2klqpo7qlcnc' );
define( 'SECURE_AUTH_KEY',  'nhmo9bxrdbmcf6vywazwqzuyl18gljpzm7y4l80heq4jrvotjjyoknlreuatttoo' );
define( 'LOGGED_IN_KEY',    'k7p61dkyyzyjd2ut0xrgrryqo7vavj8kfd4kexjo9870wy0w4go2j6zghg7pf19u' );
define( 'NONCE_KEY',        'bahmklqrlr5flajfoydpqqotj1xn0cuejrpjqg77lldkryuonetyjzhsrnvjbdwa' );
define( 'AUTH_SALT',        'stj1x3dxmoud5okir2lzk9f5qe43vhrve9xq6baufqwrkyoc79lglxvhz0gvwnvz' );
define( 'SECURE_AUTH_SALT', 'kb6y5q0p3tgtbdny88goeoghnezpe2szmjaxu8gaeghbhzylzwktbzclacfheowa' );
define( 'LOGGED_IN_SALT',   'yd8ltwhngfr19kuwbenuk7lvydf0nhvkhuvbjnax6rblrsgrd6limfzasbklwfbi' );
define( 'NONCE_SALT',       'eib7ftbwf5mmcs3hyui2y7mnnadqlsapm6p7txyqmh8kffncth6tajsbickxseeu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpe6_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
