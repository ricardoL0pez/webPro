<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_pro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'b.5I4m=XHL86=&7c8)vHe3d#P8~NrC(jSs.H9fUQqWco#!_C*9%Qy0NoBp9fsL(n' );
define( 'SECURE_AUTH_KEY',  '`|4Nw_ ieBmS;,]`k}}o(ofW$Lmee@)OS5b!^^F.&ZW;21nxcHf5ht5;%T#z|ppy' );
define( 'LOGGED_IN_KEY',    'c;o5r<g@s|Riv~/6D!~*T87WkN:?6@39|12*!HrQ8uj)9(QG]BM7gpV18~mFQNN9' );
define( 'NONCE_KEY',        '12oq#uK(!N: zi&,g&/|5EQ1&&|r`f>e~qGX=p:oqyGR2}[e`PxxA*&9z-EHEdRu' );
define( 'AUTH_SALT',        '7}Ucyaid8rE#@ox@|,Z%v|?>WFf{FR.gQ/3WhzNe(v%-7eU3%A&|=OD4~v<*j lI' );
define( 'SECURE_AUTH_SALT', 'pCPJ 3A)O>RPj&(z_(&Cc:xpA^C*I(}ze>d4UrNd8j!#v:+Y6eftTC+Gvazm+v!p' );
define( 'LOGGED_IN_SALT',   'k|whP1uD9.f)&[,)AWe0|#]r3l<?D-H3^-qC#&l%$`oD*WL/|M9qRs.5:v>2tT5a' );
define( 'NONCE_SALT',       'x{HAW>O:ppQf}s.CiMObwyDJ-uYC&-I|sOQ&%vVz| 58cxWKKW{AcwBoQy%iQ#kJ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
