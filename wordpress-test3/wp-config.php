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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test3' );

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
define( 'AUTH_KEY',         '#f#gE[<4.&|8Qa|Au{5of>Y#)8z&K5|U)<&Pb/cQgC,V6clIPAomsWS{FL<Qh_0c' );
define( 'SECURE_AUTH_KEY',  'ngWno}#(HmskGBPjB}B@QO=23a:mD.w%?a@#nu*Q}ufz(%Me7N@z8`p;MjoITi#(' );
define( 'LOGGED_IN_KEY',    'r28AlJ%V/nmeeHmFYiU2+]z|N@HFQM0o3&#V}1F=~jhr_&IR_Zq,$c8tx%cd7X3k' );
define( 'NONCE_KEY',        '8)Cd#,M>|DF{|7  y4,|$H<rB~w0L-yjbY!BpB;4Vik4@8N1ir6QlQDpxZR5[ZA1' );
define( 'AUTH_SALT',        '&Z _mQw-0&<t7|L]cVJDvTG7JayU_x3[^$)8<}KMX{):wBW6gk:]7X1,!A9aIgKK' );
define( 'SECURE_AUTH_SALT', 'L6JO3PJskwZ7$,.Rx!k8a>Gjhaz3r^oxg[cV8TZ6!*l&ODH5leNg65)$fLJE;/^5' );
define( 'LOGGED_IN_SALT',   '{DXiq( )G}A1MYD5t)iw2|ok8&zOKucSQfB:i_PkHF*62U$C=&0cq.sQTEYdgee,' );
define( 'NONCE_SALT',       'vJPBWEOoe_B9s1?|gHUTurgS(|4;mKZ81Y>W]l8PAJ<:w}/WR6=V@!]O(hcUEXO^' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
