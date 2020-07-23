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
define( 'DB_NAME', 'kiswa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bt9TmEHdvi;xN0N8?)/H c9s2[DAD.<u&G]lz&e>3a#Kt/UfPSZcW_y>P B)FY@?' );
define( 'SECURE_AUTH_KEY',  'WK}rw4+SONw![uQ=`:j05hZ|U5N(UiytVzUrV-JnyngE,Ve.uGKjJd>0RU)TQzk4' );
define( 'LOGGED_IN_KEY',    '#]z9:N!0=+e2%hgoOQCA-+~#!An Tr8r-&9/k#n[Y=e?7f%INCJj6~$6Jc&kiXY)' );
define( 'NONCE_KEY',        'HRY#6{)Apd|S[D4O~a7?+CKG<1G[fZxA}Vs;M$b)sP1/ANe%TrP=/(NZX0a0*TWM' );
define( 'AUTH_SALT',        'LyR?HSv%[0<7:$(x- mXtw<weUyzUp83y;9=:8cehh28lOf4LG@Q@&o~w.stv7j?' );
define( 'SECURE_AUTH_SALT', '/=ohT8%I-qKqPt<@t=jCu~v7XA~E. Kat*DM%gnsjwZ#}QT>pky3 ,,prDtg?~gJ' );
define( 'LOGGED_IN_SALT',   'U^3G>+C#U5j_SO{=R6E$oCwD :F%sgwUiigO06T)ffKaL2;;[R@HZ.o=`sh|d1u7' );
define( 'NONCE_SALT',       '?qCt0[14@eM4_E&*1qXE=>]28eq3,llJ?9;C`.o.uG*J:eLn8_)CUEVkM5GxPvS?' );

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
