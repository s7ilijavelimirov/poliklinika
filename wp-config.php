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
define( 'DB_NAME', 'poliklinika' );

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
define( 'AUTH_KEY',         'H+KBal.*P]m!Xp1xTWT6ckbF*TwQEo*R,dzr>86d+PFS1DgPHGj@oGr39FnW0jDr' );
define( 'SECURE_AUTH_KEY',  '_ 3KfSU,D3hj@ yKjXcCWs&1Hifk>0AT+kyv1Y58Kr1Hr)O;U@2)uF`q)dTh:uq9' );
define( 'LOGGED_IN_KEY',    '7T}nO*[rLUTbYL%d{@7gZMHNf/`=*1t4MK4vvq{vg(F-H`XX{:D 8QlH{l{!EJ2b' );
define( 'NONCE_KEY',        ')8S4c5dG@ A#.<:nbb,TSK^<M56{Q}r4V-B?#2l1B}Zf.IBf#Ar`L_n,[?]OqS,5' );
define( 'AUTH_SALT',        'M*U4*-C!.7<IYun|E/AH$H,CNQc]o1|(5e~NI^Hr6]M` =#iJ1?uB}5PNDytL2o*' );
define( 'SECURE_AUTH_SALT', '9M`e-62]!~mVPLL9@Cq$}Q3Q}L &h%zmel<=*_K*t=^DZ5#k=-bf%TF;Q4JDK>A$' );
define( 'LOGGED_IN_SALT',   '*r3; !wCf6!v>^E3Eulnqh6~S(=Ew .z:*+1Sl? r(:]rrD1U}SV(>$xG@9mv ]6' );
define( 'NONCE_SALT',       'h0)Xn~N[L#-#U@Lgkf{Ws}RmWcO*! [(8! ejU:LB/45`W{#E>%OkNW^;:bj?@>J' );

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
