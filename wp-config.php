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
define( 'DB_NAME', 'wordpress_learning' );

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
define( 'AUTH_KEY',         'hx!ZO I,a0>vO,S}u0)DQ$Jk7FWykQ,@q^r+|4c1 j9M./RB?( 3dU3|>P b.fI{' );
define( 'SECURE_AUTH_KEY',  '{hzA]Z+dL]4S2Nr8Yt,3N%^cnAOFi9sJi2/,Dt6v2da/AEA$0c?Xh0,k3W?=C~Qb' );
define( 'LOGGED_IN_KEY',    '<IAs4hg r%BSSD}LXDu~hyI(0Z)a(]`(oums,UTCdmnSRDWbOq#i(y7AF(*YTq)&' );
define( 'NONCE_KEY',        '?wD+dt@[Y8^KJQzknO|<nwM@ebFxofM67}>D=ssjW~o&y!or]%/6%Kgo%YpH_VPt' );
define( 'AUTH_SALT',        ')/0sg,J/&?*4.v$Q11Jm]sTax|JhxeW|_%D&{,#E7zyrILK7EaV=*R%km8KHJl5o' );
define( 'SECURE_AUTH_SALT', 'x5FmfGPx)gnFhV?Ms$fs/-DTrozL(^6+!}j9fs5Ycp{~Bnskowu&B-{_/8|,$%bw' );
define( 'LOGGED_IN_SALT',   'fbO<ir/FOWJy<v:^b6Y*pos!W<R%VI;i%?&>Q&c5$E[b0_$Z BkJ7HJ5<t%>iZS+' );
define( 'NONCE_SALT',       'WUay.2DrA}eQ^9n=o7-3{Kly&T#^b^|OJC-OlJh%k`(g5{W:j0jEYm]Pmx8JIc~[' );

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
