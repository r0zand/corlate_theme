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
define( 'DB_NAME', 'corlateneww' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':2_0}_K{] A0Oj[Z(lG6Np~Na&S;m -2dg1y3EsUK^@3# PP<VKdyQ@0,3J_MXJR' );
define( 'SECURE_AUTH_KEY',  'pWl>kS5if&g;jn6>U]*a9~#{Q~8N`q2IH|{!G5d#K%2gJPKba{+Eb?IbKF3mQ|h3' );
define( 'LOGGED_IN_KEY',    'iB~.2WzjWKoZB8MVP#9vpn[4 hGBu.vj<iHQz0yF#E;r?1G`PzMPF:8TLDM@l_bw' );
define( 'NONCE_KEY',        '|!W=!c3zSYb|awfuwy`-V8,[,{<Pe+V(XhPhY1Eq%Y7:(qDuh;6DIvD[uXi4>n ?' );
define( 'AUTH_SALT',        'lC0e7(V*/IW`KV2-Y;vTUZ$g !|>$ER/atCD6p@On<tt}h<!~OIpxtI&.HYas#Ak' );
define( 'SECURE_AUTH_SALT', '~zXLBitXIXj.c~s%+6j2dL}yVYmqA3X iX>gP,]0Q.gnkK[AEI>38H4UVIcSu0R+' );
define( 'LOGGED_IN_SALT',   'NN97xO[<c>APV1&JIs1AOBg}(5uwlde.y!D7F0[SG~ZDK;_BEI9u*Zmpb(XYUFIO' );
define( 'NONCE_SALT',       'FVR,1Mv*vxgM0Q#?Z^&.%6*[c{:fb_}E/ <^=3ZQf`KLAj4~Cg6<<g2G66q`V;HL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cnn_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
