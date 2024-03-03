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
define( 'DB_NAME', 'check_dbb' );

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
define( 'AUTH_KEY',         'Ri7g!SfAz/P~1HEe#OV15]NHjK=UMT:F@a_b:lir0rRGP?*(&i<7Ag3uRH8NS/lq' );
define( 'SECURE_AUTH_KEY',  '29oZIDHy64+7w7u^9:STDg5|Rd5Uw1UxqGS`K|G*0Oab4bg%Z_0Jpc@0t9E:F$n4' );
define( 'LOGGED_IN_KEY',    '`P]ne!<iJKuiDIiqh1l~F(y<<IX?l80F7hzf`5u|GW{T+dg|4Qk}^b90k:CX#Arq' );
define( 'NONCE_KEY',        'VBFC[,aa7W{_G5sgtIekW6!>TxRVbW19^2dPRY71h*pPEr>@^R:}2|a:n~&2mx3x' );
define( 'AUTH_SALT',        '*ON3ZRBJ04aZ5gO:[)&Pa,iE^jBPM{KjhYnm*C(ok#>h;yVeoWCb:n3@0z sg!fJ' );
define( 'SECURE_AUTH_SALT', '$V-q5mhX;t}w=VGo*=SiNdfHb7)9w)`]0Mz_jtk;#_|{9|uHs[u;}x,)vblg-8$s' );
define( 'LOGGED_IN_SALT',   'P/MMuIND#n=>B>q9zCv(|Cw9wPS~RIU}u#rsDi?V(,6C=O.9vU4=#)/+-whn{WY(' );
define( 'NONCE_SALT',       'iTK+*&KvLjSx.54:-guN6p9{Y(VW`Ii5/7u/0,7A@+#iGa;OPvFJA gs9uexl2fy' );

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
