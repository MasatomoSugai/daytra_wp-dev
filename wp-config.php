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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4S*& JPmP:?_5W9%8k@%SXrIdLD7T3E/rYcr$Bn+j?];IpIWeU,84ta7`Rd)[JXc' );
define( 'SECURE_AUTH_KEY',  '[)QeAFcu&~HB+FJOLng^vY8mV=df#Z!UE<~.Dt9D(LO8nHIm,BMwO,-j1*>J!4Lf' );
define( 'LOGGED_IN_KEY',    '20Vqu$k7E;t<p_!@=1<K$Xtc)FwY-a/i+>6N7FZMn?GZ[:_5]W&},%_hm89d@ab>' );
define( 'NONCE_KEY',        'KAUE(Qi8AD(~12z9/;bU K?E-X^~ 3D6jNfA!^4`S{*~#EDZ!R8VgLd(a>wfSD0e' );
define( 'AUTH_SALT',        ',RcyZZd#>E-r(3@uq{p|UyY4 u-!l{m)zVotC+*U-RZ!Ys^n+G]qZS22dSV_X5qN' );
define( 'SECURE_AUTH_SALT', 'l2N[m5xdszTf3O1iZqk0rLN^>f/)>D*OzxLurb3/~Xs~8o3$)jK^U|:[~~%w&Fq_' );
define( 'LOGGED_IN_SALT',   'S]]o(`AQ)%Lb5]1N`HxaY-Wv)8Zw}]Ic04z1cIXp#RH.$lnUc%0l=qS tThB0^Tr' );
define( 'NONCE_SALT',       'on]sjU1tZ*0aYy{Sz|7}FYO_}i_w`c2OR?qf%O-EX`[dH::}yM|JZ>Z9P>IwQz:(' );

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
