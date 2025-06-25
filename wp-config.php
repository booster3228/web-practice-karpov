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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(r<Ws!wq14@v]/tD+7iNxYC}.h)}n$z[:40hjnC&0%:_ou/L<b@9 #Gsjxv22pJs' );
define( 'SECURE_AUTH_KEY',  'Cl#a(hG]V=*+TxXb}IN/Hg6)kUk|]Ie)U*uCU=U-CbVuO5Gtk>a0lC!|R?A[1r)k' );
define( 'LOGGED_IN_KEY',    's+5?P6t{u{It|o@u a/XoH~i[]ujl/d{T?G-z-C}3Qb>SGA.f|#$j]VeWBbVf:Av' );
define( 'NONCE_KEY',        'S@HYHB&)@{A=5OZAO5,#q>hd}X>;nD>y$ZV01Mw$!V&V)2nC$AqQbWw{$9|`9D1D' );
define( 'AUTH_SALT',        '5>LVq9>?(vG{7X:]ucfS6r~q.8]et<mUeX*q% Z(}rY|@xGaD?POtNN_r;1+^Q!h' );
define( 'SECURE_AUTH_SALT', 'bDe/Cm-{?{bDaR+ltg;Op$h:bIx+:& aZjFbJOvrz2:+fu1el4/a:(BJX,x$[z7_' );
define( 'LOGGED_IN_SALT',   ' lcC)I&(tb?VzK[MJ]RG^ni,K9lpoe=3/m>>zy C&1fa|RY{4t-+cPHS{@;,bbM*' );
define( 'NONCE_SALT',       ' DXP7ScY2&:->K/>:OxsCG4a:>TOaXg9te}qtL;.Hj;/%XXuN1PCTYOEelnnf8X?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
