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
define( 'DB_NAME', 'landing' );

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
define( 'AUTH_KEY',         'p>|c7bi$$XX{;{7wJ`h`w~l@1rSF<PT*9GdI/3)W<-mx[`^esaDH.`9$<iL]DXv-' );
define( 'SECURE_AUTH_KEY',  '(@FT4ADJU(%<k3/=qsPR7Chgi<bZs=6UMokd1h?txAq(&jIaY{w5$7pD&1|d@lP1' );
define( 'LOGGED_IN_KEY',    '%Ivs%tb/WJQ6$eE9p;NY@k7IlM{NuLihSEU#+Coj_Y,&Kbilr_BnQxc=Qj*kYt<*' );
define( 'NONCE_KEY',        '}1OptWBP4W]/9@br8i[dP44]yFZ Y/+AbiTvH`p$q)jiXBrvZ.T6OuI}p0?qwqE0' );
define( 'AUTH_SALT',        ',z0;tVd]_ZP]wSilu?X]r?K[,_AZ?oJ7Zo1-x$Zuk/x3(vUBn%*BQOdU$Yy45IkE' );
define( 'SECURE_AUTH_SALT', 'D0>@.kAz5-]ZK/Kkis`t !Z}&7hG@#+i*#3Pi lq6]aeWDQkE&l$cZo@M9UBAhS&' );
define( 'LOGGED_IN_SALT',   'A[i2:8xhT[p4o`z<Qcb9Gp//0V`A^Q(QDY?+]TO2f[T,]K#% 09I*fd@g4LCBJ7]' );
define( 'NONCE_SALT',       'KcqcKJY2?P@ gL<&1$`2X7ze(Ylm^*!;ZI[D}I|#xMi!w@wb.$#Pij~745HG=, 6' );

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
