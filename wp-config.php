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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elementor_test_project' );

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
define( 'AUTH_KEY',         'PMJBsy$R1|`Jg si 9KW$O|SdkA|uY-aF]od [oyO+REJ9uGN|NbsX|QNV>UB=D/' );
define( 'SECURE_AUTH_KEY',  '<J;<Ivvw[WpYrnz[f/KOhk=:G&93!FV0PNk2VgpBqKHkwy?:xY1eV5Uej4Yo<LvF' );
define( 'LOGGED_IN_KEY',    '63txC|iMR~Yr@!>(AdlK&HwibU{Cl=&o6%yI0yK5}+2f(O~uESJw#u`.P1OAN_DZ' );
define( 'NONCE_KEY',        'S$$M{B9:{U:x!u$@wf`lJlm<Y_(S(WtDy/3R>swj2O697J(0D)cG?1 QPK]bZot ' );
define( 'AUTH_SALT',        '46{>Js@5v:}`W`c$PCH Sa_v*O/mKjss=b^{rW2r7dA^Gkd ,ZA05!WP#l17i<f&' );
define( 'SECURE_AUTH_SALT', 'Pl=6;^/bv)=DjvqBVI42op{{8xP}T,IAjpV]1y[ILwima7ZetC1HLZdg#@!0x3{y' );
define( 'LOGGED_IN_SALT',   '-$P-LD&(oEq<i R0XREU@s6$Ee:!_Jh4Tsw<TGGrRwim(M`NeBvi&*:H &:yp55X' );
define( 'NONCE_SALT',       ' DTII]F  b_ijfMWVyeFkBl$bqh`h^q4pSPOpBT`~Or0-D*T[z:q-qw@v?c)/USQ' );

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
