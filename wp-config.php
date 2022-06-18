<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u213337140_AEF1z' );

/** Database username */
define( 'DB_USER', 'u213337140_Wvtz0' );

/** Database password */
define( 'DB_PASSWORD', '7esiogE4T2' );

/** Database hostname */
define( 'DB_HOST', 'sql801.main-hosting.eu' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']_i1=Y+!ht505SL,VFjYovWR zl.QrEIL_KrUA7=ePs?.F#e&d7*OfK!dbshNfe3' );
define( 'SECURE_AUTH_KEY',   'K#5V<NF6,:uFnu*R~Qr^)ti/j.PjJ`5.XQ[F(!46So^:151v.~^`6~V1cL4yskxO' );
define( 'LOGGED_IN_KEY',     '>]pC5/u!V1_y5K}`~g13LbZy@XZ5+[l!|}cgfz_10;!g:hM~Psf)bVa!(P]Rx;/3' );
define( 'NONCE_KEY',         '51JyZ::o>$;~Lm0O1OKh(qdpqSHT<1L>!4:|Hs^n-,znDU9j&B~5}:1i{{ljoDp4' );
define( 'AUTH_SALT',         'wDT0X.k-qDdq5vuR?xlFm1e_5F&&nKU%/QwEHY/?M)E+Aa?q7/-gEOW&A G/sfJZ' );
define( 'SECURE_AUTH_SALT',  '9F%K}3*bKbP@,[GZ9>H3>9LOpa#PC#Qa6lDvSo.]=;VC3)UN%Vn_*@Sbjr<S0%p}' );
define( 'LOGGED_IN_SALT',    '-8u,JXk#fTq@GP|XZ7~yhU#@+Q2Pcr:9 O=v#0-5*C`fo.X.ssA^; G9.RSd%9+u' );
define( 'NONCE_SALT',        'K&28,9@L9I.GwiZVysk!)6TE&-#&C givX<9`@/6aP&O,it,q[fl{yE51wk)6wB*' );
define( 'WP_CACHE_KEY_SALT', '@).^wtN{LryB.`o^9MY_g%qvTl:Dd4e@zpyem2^(g-OXaG!d#;>K p^qpx<inL:}' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
