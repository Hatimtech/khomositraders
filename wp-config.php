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
define( 'DB_NAME', 'khomosi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nASbc2cuj2ze' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

define('FS_METHOD', 'direct');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define(‘WP_MEMORY_LIMIT’, ‘256M’);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%m>K*4~|.;3Go]FMEn8+lwk4_|JW=))i-K|9NVC+{h9P%j%sQA|@~|&9lC=JDC|l' );
define( 'SECURE_AUTH_KEY',  'D?q7<uO+YJ-OHhWzN:l-^5/DFt<;?L2;Fl~_5r*4LlzeldfEO0h{Hn){DwDUf3x4' );
define( 'LOGGED_IN_KEY',    '*8KEoFg|<:HP-?nX&fY8PT-khI0<JMni]M[}nK5yAf:Fg4*TVh@lD~_AyF7>2;^q' );
define( 'NONCE_KEY',        'Z*;GG;>3H2ebnLH &v0v+jh&AUh: #h)*,TYsdGtIBcVh`xOH s()lPql4(y;hE^' );
define( 'AUTH_SALT',        '8YqaGX-f1Pged2E&ePU%Bq|+Rp`K|<t=|A5$BvcB8JkxuxD~,NX)bpr<G%~ZBR#m' );
define( 'SECURE_AUTH_SALT', 'sE+SuY>8;+}N0LXfR*n~p{o?:Ex]{j+Aw>=Z)+<|J&|f}f?_F2]d}t&p3Yy&-}TO' );
define( 'LOGGED_IN_SALT',   '9kYqgp5-=`(.MY-7-wr^oCbaQPZwt5e*>0};y>@>z|y@$agf]C?c@=Cf^ _qAweu' );
define( 'NONCE_SALT',       '+zuQZ?43A4@K1;<:z(/CLm%z}.8=dscLy<#-^<;Q:Nf`919YduY[)5E/7;OQ+Z3O' );

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

@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '15M');
@ini_set( 'memory_limit', '19M' );

define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
