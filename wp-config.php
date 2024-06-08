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
define( 'DB_NAME', 'multitec' );

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
define( 'AUTH_KEY',         '[`Bk/1%)#D4IgX[C[V5RE=WqqxWZlRz-Mp!7$b%_8TW8bfrt-j6:5Y+K$rcmo9Z`' );
define( 'SECURE_AUTH_KEY',  'J JmuH3WYnBqs#fm<Xwz~g4iGR.!--^j+s-R#oZH&>EYsoq6z_.Xox><&; -TCz.' );
define( 'LOGGED_IN_KEY',    'UXHjbqgww+LM:_%Pp~)>5foVD,+zNd2*v`^T}8S[Z:4wN;(aus!^rP<1(0pIM|&F' );
define( 'NONCE_KEY',        'h$_qx5~:>6E1Jg=2!x9Qjocm(v%9VQ_p>lZODIkx:~$,TlrBZ[o$6fd*Q,xmw8wt' );
define( 'AUTH_SALT',        'Us[Yj-B)X-2o&cM9.(^-tRjEI<E(RAe~7Wa!c7v[3P3a#ZZD >$ycaJw/K3wRo$b' );
define( 'SECURE_AUTH_SALT', 'I:kb+!5&-r%|:Y6E=1OSfiaL79>wYm-p!ysmXFxDhC(wbDG0(mQaO`B>9Qf8)]!(' );
define( 'LOGGED_IN_SALT',   'p7wQPhX2zdJ&aAxCz2m&Q|q{5>,aWdP<LzQd[f:1Ng>p5%7evXagO|4tZ8V*933=' );
define( 'NONCE_SALT',       'qsm{{FZ-0H v!J5rF+pD(yESk._5^Vn7AP2Qe@fe`25y0yin^V?$%^{(|/D<i,un' );

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
