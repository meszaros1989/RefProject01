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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ref_project_1' );

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
define( 'AUTH_KEY',         'uy8HW?WJ)M@JD`5I&{aE-!a6z:v5 ,M+Ctsz,+SWyF#P[->2[S+A$gs(P^1SU3=z' );
define( 'SECURE_AUTH_KEY',  'Kg<=cE3k|y@YLGQ[)&(,$l6TdJQt7O/gBi2e0(T=OM6<1`J~g^*C=(BaUl^>J%) ' );
define( 'LOGGED_IN_KEY',    'E}!5<BTQ)iV[%rhDqR;xp?S0xLE`v*d1A2rNGLS^8G#Jwyg)nW_ x3ZrCRxk6KD+' );
define( 'NONCE_KEY',        '()SE2+Q;mC 09RMA2/Ru&|2lEdmsuuUX}M.:/d)Z`$F}3)`yKARQ&&3z+hi]|MHc' );
define( 'AUTH_SALT',        'K./XrS;;$dYj$ylPW+RWIk-5jmkTOBi%6wpM(cRU5HiqqE>PEU#7_hp7Zl=BnQp4' );
define( 'SECURE_AUTH_SALT', 'W7t^0&oI>8rP0$ODKUr&SqA_47#!D+*=(8W@9sWf)O;;2_:fTT]vRz_#b@LG?v1u' );
define( 'LOGGED_IN_SALT',   '+tf>Ww?b$?6t0Kv^:![U #|CKd!+S1,*2Pj+-!_>ka}UsCCRp6EjP5#kAIFvXiZ@' );
define( 'NONCE_SALT',       'p1j]r1`7Pm_*9ZRH&ZbC]J8$ wRXj&;ba:J9wSqqCZas @2z8xGe+J_ U-rGOUeU' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
