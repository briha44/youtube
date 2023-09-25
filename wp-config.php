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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         '#axq9D|>T:1jjY0NF#XwlvV4^J?YQh:%!BSvn9L *+*)(}J)@+@TP<>/*c_fGQw=' );
define( 'SECURE_AUTH_KEY',  'eAx#eKPMb?r+4F/vUXooaRQ/(vBxP<:qJK|3K(mj%ibmd/D&##QZvtW2,)Bib]Ro' );
define( 'LOGGED_IN_KEY',    'C~tDlxp2w2`-_1NTO)}|u4/)iFo4Jo<K-K+d0CwPpX U]DJ,?o>zaOZ(%]KZs1N(' );
define( 'NONCE_KEY',        '[FIn?XcL-rnN3_!QS#~Exc#rh[,;53YP(,q{Lu7~w=M[)%/ G4`xuL,t>T&XD7ax' );
define( 'AUTH_SALT',        'LVX|RK{fN6CxB[ZQqAI<suU0naCn~`AamGw;SZN ]n/0LT?gt!-vJAXc0;<?,XG`' );
define( 'SECURE_AUTH_SALT', '**.4P7S*ZA{vgJn lw`JxzJ/aa|%O;Yz#FaLqg7Dyz8?$]MA)yyZ&FA#F9x!Zs|n' );
define( 'LOGGED_IN_SALT',   'DSKZ+QN>q_u=b_=N$piq!c.uQ~qnaAm*ECvU1Ti15ps XpbPS+Piwj[J0]Bse?9F' );
define( 'NONCE_SALT',       'L7{rE9jyrJ#NBEpEv+|{E-q.(N!ghYo6rCk<6Dy1D&z1(%X?uQ]]J(g@/({PIcIS' );

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
