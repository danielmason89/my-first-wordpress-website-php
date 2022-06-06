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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '}U9Y_z$#WV7FmJ;a&:?zhzy7~0P;)?=%gSq-&tR#j>KM9<}i/rTdK$o2)_EU(~Ok' );
define( 'SECURE_AUTH_KEY',  '=mw$1gvu6r{zGv(G8`l36AO=`7~VMdt{Okn9q%Z6bBqm`Udk>I^(jJNvQ7<uKeTx' );
define( 'LOGGED_IN_KEY',    'AZriLV>w-!w/01CyTk6kFhr^sv7aJbq)}*OaapeZ@%lSppMZ Xhaeh|{cj3LxrAL' );
define( 'NONCE_KEY',        '4`.?e%iDqFU6O+e{Doo6LwiBn.,YAF_HU+GA41Tn/{~Ltk)a1SA)4t>ZnH7)[SrW' );
define( 'AUTH_SALT',        'syT2y;P!W/&=x4J| 7dhD[:R71C~X}NH`-} J~zbv)F(YJg*%4lr!W-}vf9]uYm/' );
define( 'SECURE_AUTH_SALT', '}IPZwBe>NLuO[S_snIKp8z=p7B#`IZTU}5n!v:c1I(=o.|`yuSryjL4](tF~Y=-y' );
define( 'LOGGED_IN_SALT',   'W:L*J_Ei%;ik :.qEfq8yla^sBI,dul2+ 0I50[*y~a2[k1cPMK}(z6gF{I=KxWh' );
define( 'NONCE_SALT',       '2I]H!;[S[C0+k+O6sySTQ[@_n)uDM3t&j>x^f|pR2m3D55qy{u!K(}CwwlzlA$As' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
