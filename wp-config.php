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
define( 'DB_NAME', 'academiadeingles' );

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
define( 'AUTH_KEY',         'M Xml-GCTJ.nH8 UBS~}S<kFZ:3;hGe$|rO[whm}SB9bn[m|<I:v>HkjG]AOrIUP' );
define( 'SECURE_AUTH_KEY',  'mMEv!FEQ25rAc@)DT17xV3V+)R1fijzFboZ)mMBjU>axU4r5jl.zl5%/bIa0h*[C' );
define( 'LOGGED_IN_KEY',    'k{WDVosi+E4Z+rHIFICQoaJg99(;.`+YjNcCuWrjDho@6$C*9ix5H<=3zl%mQQl0' );
define( 'NONCE_KEY',        '/rjkE@eVaI+i&<Yb/]z4j@_ptXt9c(K,qGZ%p%imSY}>42O98I,?#0:lDtf-A dB' );
define( 'AUTH_SALT',        'UT&@!dPrL2>OZ!J!}yo:2i<-X),}g49CNY:Zq!:En9WvxY@7)2l[:|t2W7.IW 4z' );
define( 'SECURE_AUTH_SALT', 'AU3lks3eADo2g@QqxQkE?RWozr[wl0gs/FJe)k!zO,,SZ,4j5hjzbFYuNQAgIWea' );
define( 'LOGGED_IN_SALT',   'kfx(zjt08<O~NFOq7xh|}k>cn^%g~DA#5C I5RCVrGq8pLNQazCR%L,q9K@Jsg$S' );
define( 'NONCE_SALT',       '&2B{rG:! +|/&t*P($g(omq|WQoj?2sn1J&:_KXf= <E>[yFhqN94- *kgZr!-R0' );

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
