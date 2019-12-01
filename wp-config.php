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
define( 'DB_NAME', 'wp-blog-2019-2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '03a4765c6ac29b7520cb491b6f7461aac054d4fb5012d3b5' );

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
define( 'AUTH_KEY',         'D?{3~q*1P$vaY6xf^h)|TB&`V!vX_:Akor>P$/%rdz~1R}yKZLyVG!B6n2W@Th?R' );
define( 'SECURE_AUTH_KEY',  '46Ee]Hw7l-|m|3=$m_Ir ZdPw6nuB#j221<(e;qTlG6E}2Z/aU$lt}<scq2b+Wj:' );
define( 'LOGGED_IN_KEY',    'Dh5V.6ehN)?P2p,oco/c9+:C}x*>v{;dUvIpXyOTlHO.>Tdm5]Ee<oVqa%8)(.`N' );
define( 'NONCE_KEY',        '}yxbMME>96 g#AaK=ucQNp>Wz|d:RS#ca=q]g5}9ZYSUImwih5,I$B:n;(]:Z5K8' );
define( 'AUTH_SALT',        'qB:nl>e:Tk ~79p#}W}MehUcBTnx?vilz]!WOSR*o.hhi_bW(mQS%H}}c,#4{u)k' );
define( 'SECURE_AUTH_SALT', 'bz9.O]bslYiTeG@VKX?N=5OEs=br8wpjmHy%sE)8paj_~B$Y6x|?i|Ox+/n#VszG' );
define( 'LOGGED_IN_SALT',   'X}6N}=xk b=L;&CWzqSFCNipvQzCp?RC$luIh<6vf+Ufuri[K1.;mvS-lxi:QRb|' );
define( 'NONCE_SALT',       'H)u4cD91oQyd1,N/va90@$:}##{@>i_gSGjaJB728!m}]r3<FYL6-sP~!O=Zb$15' );

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
