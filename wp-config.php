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
define( 'DB_NAME', 'purple_buzz_db2021' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define('AUTH_KEY',         ',--C,:)Rg+?(!mdPv1Pe7:G$FPadV>ix0<GA_=0VELKUdI_%XNm3.-D.y;cd%$3]');
define('SECURE_AUTH_KEY',  '-q>{RQz-@dTSHuh}6~kbvx)M2qde=NKmpc<(2Yln@oB&l/L;pEwXwE5yCLMHZJ|P');
define('LOGGED_IN_KEY',    'ESU|9R-ziaT_[p]|Y0^ zD>KN7^*,: w>9`+=+k-7_0Kxta|(+`.9-~%t`z]]n=^');
define('NONCE_KEY',        '#]$s~@G#Cw)q<*6*4:9{C+*31]?8d,ggGyoS>O[g/x!;LNa*} Mo*a}(/e|:0jMg');
define('AUTH_SALT',        'fy-;Ve$!dRVht2++he~Trl`]Wx%c)}E_-QQA2g7R,#xO`]t1T.5|c6+(AygPD>4M');
define('SECURE_AUTH_SALT', '-HgajCU/W#Fa&y2%6DyaTko1FqWqB~33,N&{6aJw;7r;e7B-#I|LOvQ8Ve[NTD];');
define('LOGGED_IN_SALT',   '%w4DMM?wv89_7qU)Y`qe>v!,aF$[^t~d.-aDCI+,L)U$#@kE5p_qBkP*!El>JePX');
define('NONCE_SALT',       'CT4xsNc|uZ;f<gj,#r;`)+I*rq;hwdY!m:%hdW|uC,$W=]=}=#u.M-0U-!kE<g*M');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pb123_';

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
