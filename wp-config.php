<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web1_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'c9!hyTKst$2k;P[Tz^/:[HDqLIkL@mK]V^2imnAdHy}-(?;+>chHXd2U=Y;g&-E,' );
define( 'SECURE_AUTH_KEY',  '5U}GtXm{K8/~)s#HThc~uVK9Kusf?P1Xj0<%]d&(YHzU_lkcc9f|9VinZ9Ii3oM3' );
define( 'LOGGED_IN_KEY',    'C~l|ci>URt)=_~LLP@=ls:Tv[c3R];r/hekgQ:sTsCi<R/FAs9#%NpWQ_V;5)V<x' );
define( 'NONCE_KEY',        '{(9&oM!kE/^517k,<k)%`DEG1vn#5yv&ofC^Rc t8[vM *wM~%a$m;!@-x*+khNw' );
define( 'AUTH_SALT',        'V}>%c}K7ZFESarC:.O<.fn/Of{!9@%aIoJ?#ve!:Ov{spYs=tz-(z$PUp@kW+<]R' );
define( 'SECURE_AUTH_SALT', '4L&v`~4O-N04srISK/M1/=Mal4=Tf6`cDTL7 Nx(DC{|py#Cg+(xXA7Q8C8J[-fU' );
define( 'LOGGED_IN_SALT',   '/`.]uXpd5M#Vptu#7%~c[iG#2+Hn}$0cVt6W>OH|D9))h$We{?JNXv_T(A%edv03' );
define( 'NONCE_SALT',       '(NOkuj#jdJp.Qz%fH5(^Z,H_H;4lU!iN*<m/EzhY|JM4g$KnH] u m:$f%<DVjf<' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
