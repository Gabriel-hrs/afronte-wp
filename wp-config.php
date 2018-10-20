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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'afronte-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@0@u!MFr1>P~ra>{(wiY#=V7FGtWoIwfqqK@OcD];:N{8e$GDw:)9o2qFe-o$pu-' );
define( 'SECURE_AUTH_KEY',  '+4Rxj}RAd?-`jR;35N^`WpX$4#1e5C^^iYYi_JuF,2lsnJXi~%~#.fES+oC/|e,c' );
define( 'LOGGED_IN_KEY',    'keS_hFB.8b4O+d[%17RaDB=ar&c SnJy 4JzHSw(aQp4<~rM3_fbhtdhiHH(Qu9b' );
define( 'NONCE_KEY',        'Rv~$o]Vo)1Gj+GL@5ys?t{e307VY9_+@j4;S8fi1_akngeB;N/p/ODDD+!fvXJz_' );
define( 'AUTH_SALT',        'Ag5x.$&Xh{]rF_Iss`eWHS  IP%`_p/y*)_2r2]hJgc+AB`?444mrMe7Y<!t<%-w' );
define( 'SECURE_AUTH_SALT', 'K1!Iz&kFha6$yF5x4mn2CqAFdm{9G*9H=i#FKqC;<J0RAs#{#k;y3S3@fYoq{ie<' );
define( 'LOGGED_IN_SALT',   'eXH83d:L#~s1GZ>p4[t<!)Od9.^*5JnmJY}[f/{^ASf!`5.5Tm)/&XzHb>_9[d~I' );
define( 'NONCE_SALT',       'G@jdn{57h;TNtkXE!76s&MrJ.d}m7#ffa|w[Jm @=(iX[B/}M:{Br*K4CX[+u<&l' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
