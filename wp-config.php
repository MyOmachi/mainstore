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
define( 'DB_NAME', 'mainstore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '.*1ItjOxn^OFh/pmeNSoJzZO`)xca$C`QMWQ4:CsD{gx)qBKf6?;z#G<& bCk2;o' );
define( 'SECURE_AUTH_KEY',  '5n2ajExzTS@oNe>I^-;|e3N4`n%@#}b6Y|+wK-UO[R<cl_CkY&(F:NBYIalP`;%)' );
define( 'LOGGED_IN_KEY',    'ZWsr,%lk}Gf7#I4B.PPd#J}{=Y$-uZXI3QD<J9G%{=9aRcCjrOrAjy>dsl}v%8,&' );
define( 'NONCE_KEY',        '9uguNF[8xNs,^m|qY[1EAsTP$zr }1pIh@eb$2vyk|c$#V~1h]8B|y|V.%R5(>r;' );
define( 'AUTH_SALT',        '<(Smhlt_B+!))o,`HmCFQw8a3@0EjV37&MBbw[K+sDPDS=e#,paXLZljSd{#H>D0' );
define( 'SECURE_AUTH_SALT', ':B9StI<4>RD{pT#WY>qIqbV?UT8)L^7LO+c4wQ56,{+vWgt)*`B2Bu7bS3T4BE|S' );
define( 'LOGGED_IN_SALT',   'ab9d01>*6yHp6l%zATiI@=,hEHZ=[Jf9P5]i=:6ir0i0lN4q:^D95.Mvlg3$OFiL' );
define( 'NONCE_SALT',       '_%,e^u,$uHs$H,_}G6bU8K~uMnAPS!82S?wz?&T?`V/.Bq]@l|3gva8(^i_m^?4:' );

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
