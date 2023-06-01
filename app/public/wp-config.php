<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'usZfPftZ16o8xUCOXam3k658zvUAwU93lmCaBO+mUwLILWCUAlXqxloYdtmmTgpITKESh/ARqqC3sMhIEoIiVQ==');
define('SECURE_AUTH_KEY',  '14jypNs/N/0pzX/M765EchHuNEPhOu94LI0fceu9jnxHthAeyjQDkFuW6XJ+K15Dmuxiy/LbLte2nJQ3jukRdg==');
define('LOGGED_IN_KEY',    'hGJ2Csyg37T1aVjdnocg+YB13vrGcdCIA2ul8eNreur7NyENee3W+s9mKWUz5QsMtyBc4csyvuSbom7OMaDjhQ==');
define('NONCE_KEY',        '9JaMeEyYnwIX0oXdefbo/esi6rtOhAxy8qh2XJ+5wuxjBKpYBrpdA1peCr9CScMuOX6PV9pwNUXIaetSruniwQ==');
define('AUTH_SALT',        'VlLid6lOZR2SOKlXwdtElY4CYUbiAVBfR1BtQQoPUUTAv8Pt0vKkHRrN81e/MNHSuZIMUJZqss/rk/kFCkDDEg==');
define('SECURE_AUTH_SALT', '/5opJHwwwuRlEwdwSgT4bgSw8hC14R6ayq8NSgmTE/78gMJu6lmA7h83PJ7FNMW4gErFu23+R6AhuapwRjOZSA==');
define('LOGGED_IN_SALT',   'ozspXWTH21kqGjhifPnsGO0ZhvQgKNyZVCg24mpazf9uGL/EcoDgUfHs/26izNEWZvVHwZZDeu2YuWWy1Xz/zQ==');
define('NONCE_SALT',       'lCBMLl1z95VNZ1OL7F0DCdj9QVFtO8YgwGgKcbubbRSNLAYnX18qrUm4Dj4svsDaLIKSokz10ejj5Zx7Bc4jgA==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', false ); // Dossier
	define( 'WP_DEBUG_DISPLAY', false ); // Mais on ne les affiche pas à l'écran
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// Nb de révision des articles
define( 'WP_POST_REVISIONS', 5 ); // C'est bien suffisant !
define( 'AUTOSAVE_INTERVAL', 300 ); // 300/60 secondes = 5 minutes

$is_localhost = ($_SERVER['REMOTE_ADDR'] == "127.0.0.1" or $_SERVER['REMOTE_ADDR'] == "::1");

if ( $is_localhost ):
  	define('DB_NAME', 'local');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');

	define('WP_HOME','http://kalamia.local');
	define('WP_SITEURL','http://kalamia.local');
	
	// Activer le debug en local seulement
	define( 'WP_DEBUG', true ); 
else:
	// define('DB_NAME', 'capitaineonline');
	// define('DB_USER', 'capitaineonline');
	// define('DB_PASSWORD', 'AZERTY123');
	// define('DB_HOST', 'mysql.db.52');

	// define('WP_HOME','https://capitainewp.io');
	// define('WP_SITEURL','https://capitainewp.io');
endif;