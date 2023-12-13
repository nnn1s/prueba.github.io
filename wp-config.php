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
define( 'DB_NAME', 'killiam' );

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
define( 'AUTH_KEY',         'F-4r5X)_yGE$?/S ?7SfZ|yXm[WpK!FLO-$TI$$Oj*[ CO6AL-6 jPU]&nN&Wr*^' );
define( 'SECURE_AUTH_KEY',  'E-v[@Ve *^TQO|ROch5]q/L!gi%||H&SmJ]XR$XIwk< bp9]KX@@DLKsU.jZWR,]' );
define( 'LOGGED_IN_KEY',    'U>CaMlYiQwb5F#:EP]c?288A3}tRC:|Ss[)p2j^xQR$8_fqxFq)_bMdz*}S[VPC;' );
define( 'NONCE_KEY',        'V|H27*:gobYECvFE!FP2uAI.!o>|6=Fdl~THvwz3vcL>h@ekp(4jM~C)3w:IK@?x' );
define( 'AUTH_SALT',        'dsp#ibmTMc,o!ddZksFTZR~0>1m=?mMq-zXf6 .^-Lt-k6E79/8?cG5.t#D,ykWi' );
define( 'SECURE_AUTH_SALT', 'TIk,tMO^#hC[{P96wS8yMNdcw[X)Lpi2$mjZzM(k@[dP]Y< )gnt;E.(4n;BnX@9' );
define( 'LOGGED_IN_SALT',   'p0]bH;IH} ^_;tN3DEKiv{#V;(HrE,:i+NN}R%FB }B8ZM)A7aT@dnydV6+G#x*^' );
define( 'NONCE_SALT',       'D4f+aCE#cn3+nu4D{QSs)z/0`}U,|p9}%/]]hK8/f D_M=>G8hiREEMtWA:m:fxY' );

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
