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
define( 'DB_NAME', 'bealys' );

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
define( 'AUTH_KEY',         'cy@lr[(?[zru2,?r#>p<LEv-@Z$zq`r ~v3{ED2NY%|`>_#sTC,o:^9:+n:pyKP5' );
define( 'SECURE_AUTH_KEY',  'Fqh_xu.d~gn5?AC+*yA:MAwQ+N}vQ:3ycY9RUx+s]|TI#9b*`D]ShQ5AasEO8tbj' );
define( 'LOGGED_IN_KEY',    '7$,cff 1}iR%L|v|~Bz;PeX0HQy({^b>vY>b>Ov$@q;m]n3S4<8fj@rFK5:P/D>o' );
define( 'NONCE_KEY',        '?u|!XX>vM)uOm opDF^vyVNtQ!jiNO3zVP 6d4<dRtmr[YUH*R,Ss{`leWA ~z,&' );
define( 'AUTH_SALT',        '(dRfj.$l~|L.h{IC/}4nxz-fr<N$3kKUg^52r+3`,>W-bJF/(+d]kmEywYM[uk# ' );
define( 'SECURE_AUTH_SALT', 'X,,tpO<EO8f %@~tJie}V}PE}E7vkSIY5L~V2,~I%8]y/ _,7he7(:>A<v][7Lr%' );
define( 'LOGGED_IN_SALT',   '67t@;q3`LXbS#RdpJehlhE*}|,^`%FL/*I+ 52aga1T{8,l6Dr?Y~:^Y62I^m*kk' );
define( 'NONCE_SALT',       ',$3f:b I:Qi_-K/b#INID|b`Ep+fps1X~dY20@Fmkbs6b  9dS)-#KZSf%8K%b}]' );

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
