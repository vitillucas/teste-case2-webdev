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
define( 'DB_NAME', 'webdev_case2' );

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
define( 'AUTH_KEY',         'O@3b&L_^)SeNdXz)$s=bNoW sQVgU@}U]jrNHH]hu=_BMARi&Rsm<Z8>7#/B*hL:' );
define( 'SECURE_AUTH_KEY',  'ds_)8P?-%(Zd3rA#8RAJO3U:|,x`x0-7?V);6@{3G_FDI~T2G/_t4x%12DP*`(Tq' );
define( 'LOGGED_IN_KEY',    'XrshErv0Bajy%-`J+NM5;Hu[#C3x%L:v5RNih0,8*&C#%<9vgx7O0)K-4.Rh, UM' );
define( 'NONCE_KEY',        '$.5z MP;xK(%)qXddBL=0ike$HKpxxIFil{P})[?hpyvDV2o(k+h_v%r*g]H(l1d' );
define( 'AUTH_SALT',        'kEaGMGG3v9P.&1tmB3n7diHmGUT[:Lc-ObOFboz%Pg>Q;pBDxa@r3=mq,K~)ZJ%9' );
define( 'SECURE_AUTH_SALT', '$JRfyPtIE.l>N3W!=yJmT`d$jYo=nP9||f9Ys/53-098C|(%_ILt><;;pVr,dp^A' );
define( 'LOGGED_IN_SALT',   'G<@mdgTk}!I89eYl+nkN5hn^|l52eF/bRI!H<=4bF=|ZW( D:7P>`fF9Z#-}z-~0' );
define( 'NONCE_SALT',       'a^nKR:RZ]_u>x`h}oLdk({7in/&p$#X}[b%Ifn&+-uMsq.&j>5{D?:{Q;qhg3nYt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
