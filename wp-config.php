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
define( 'DB_NAME', 'daytra_wp-dev' );

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
define( 'AUTH_KEY',         'Zrx46&vnQ9*CQJsP1VAM3^Kb}!#,>_~v={tmH~V$PE~sC1-#./$;D%t8`33M1Qgt' );
define( 'SECURE_AUTH_KEY',  'KfH(wsEUxU](u}ic ,lKq.p7fvAUF(y70=&_{;K@3F,s,WvsTI.i#<5[}Q8p()xr' );
define( 'LOGGED_IN_KEY',    'jP@{JDW;puL9},pfJ_R?G5DFI#V:%EEehTZGt5e+ftXe#1;cmr3q-C+>jhJ$eHd,' );
define( 'NONCE_KEY',        'F)T#%Y)CgcThxb`, HE,x{Z}p[n. 0K;4mHY]oT%&uz3bQ_>_6|bx)}|_..%W<pa' );
define( 'AUTH_SALT',        'wO|)fx 78|Z*]0_Ntu3VKS&:|vUSNi-L1w=4CA+0 Cs9H%=X:Q)`t=STzab]gBu(' );
define( 'SECURE_AUTH_SALT', 'J4UiWPwIJ6 XuNl,bP]%qY=[C=eCE~.FbrVl G&&u7`K`$!=c8/3un_:g4^sy4x$' );
define( 'LOGGED_IN_SALT',   'QvD;(|fDw{n>ngn`OKb3&` +m}]gzf;.|96hBmXoef1z_6ak.W$~ko<GS$fJyjYw' );
define( 'NONCE_SALT',       'C5(G: h`sgGd902+`_rR.yEIX():Jx9`3bZQr@>EH{V?-m)EOQ_2gbJy~Y9yYV`|' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
