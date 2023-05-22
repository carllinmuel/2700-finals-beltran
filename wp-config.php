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
define( 'DB_NAME', 'finals-beltran' );

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
define( 'AUTH_KEY',         '~.coSX~H?g ~(^A<o7[i)p<fl05nh4YbSd2Y2]%EQ*9ryp:cPD*`G.U_%O9wa{>6' );
define( 'SECURE_AUTH_KEY',  '/%].2dYQ6cq; j}ZXW1dc!P3yoF=X407Pm`x2lgT!499#[|R)oi%siEd2S/#:OGq' );
define( 'LOGGED_IN_KEY',    'RE4xhq?J]bxU9J!NAZ1Ie-U(/t42,+x%%GX:|s8=d_oS3Vte@F{[j3a[4;`ZICMR' );
define( 'NONCE_KEY',        'b-)DS`Dyrc>;XX=L}Hzk+#p}gnB0l*0zTbBjQ2C8vM,]~qi2UvunC2hk:qy|3)gG' );
define( 'AUTH_SALT',        'qYKspD7lrmE1tgGwu0Ij*`k7W1z#2^)|5TT^4uePenr4p$y^!-qf=5-3e0~/+&4}' );
define( 'SECURE_AUTH_SALT', 'uVBdhm~>YUe;=Eojcpk}`>Fnq-H@<^fLp>|KtTJ|A6K:c:; RM|/}0zv|%pq&oe,' );
define( 'LOGGED_IN_SALT',   'jf%^P9u)wc^*ZXgDG nA02rIu%!X+wm[B^wq&h;u%GkfGd30We^dJ`=U1nU<s|w>' );
define( 'NONCE_SALT',       '.`ucW0@Of80Vl]*~`H5fw|x|[k%{bRg/K2DFI,|`-(Pwb}f[ |?uan}B!0w&qgqM' );

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
