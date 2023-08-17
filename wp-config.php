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
define( 'AUTH_KEY',         '&wTwcO;46 }xryhP`GyqR)f!]_&?+!8*xAjh.F<~&/vW7;6%ERSJ}fsnHw`6W5]0' );
define( 'SECURE_AUTH_KEY',  'ySE[5FYa->rgi_I=xJ{N(z&U)qmtCC0~}b4hRgU}P$S}ao(fS!_d4he}L=X=i&7-' );
define( 'LOGGED_IN_KEY',    'O_Bgp=o2)I+pf>mQt$ueV{!1r+O;rg,iPsr~Ln{0}.H3NHAC:)N2teVAl7l-O/YA' );
define( 'NONCE_KEY',        'N_Mr|76:G]!|_b(Ju37[[_?m,g!!rTBer&kT50YBaN/n*d,+FVrk7v53q}2Qwg7:' );
define( 'AUTH_SALT',        'Ldu:/lf)%6LN;8K$z(7N8d{8Y-g7y%9?gf*Kx2CY7w(&tvJJF<py3$Tl`BkUV=q^' );
define( 'SECURE_AUTH_SALT', '%!d^Vj2sm (_$Rj.MbBJ sA0l4.s-5rS?mZYx@ey<H 0?b :q@yIe0$|hF*-JSCN' );
define( 'LOGGED_IN_SALT',   'E19/_jGRm}^aac$9x`&p;`p:n&g%4o?w#4-2:/}(5xIN ppNoSgEn4}rt7^QNj(?' );
define( 'NONCE_SALT',       'wae?-?VK5!x*c3P/{bbN[!5@N+9M,|=;$8m*hsQ:Y):yq_e(HC[A*%mF,zpac~uw' );

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
