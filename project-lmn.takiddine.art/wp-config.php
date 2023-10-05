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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project-lmn' );

/** Database username */
define( 'DB_USER', 'project-lmn' );

/** Database password */
define( 'DB_PASSWORD', 'E7a8tMo9o1KsucBa1xSb' );

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
define( 'AUTH_KEY',         'F=fw=va&#`LN;6iRdO& Dzh7wauDzJQZ)+[?^}GnzkN{g?xsB^i>6KBX+3*DC+&1' );
define( 'SECURE_AUTH_KEY',  'Mhh_75Bs+$2G<$YN>~06J^r}k C{,70o/mr{i#j|/+A:5 >}QLpB,!ABMr[wCN| ' );
define( 'LOGGED_IN_KEY',    'y45_;g;|%qOXR;p[}|lErbJ/Fq[1C]w |QrRLwtdwHL FsN;)*6S,h.2ZiVe#H?N' );
define( 'NONCE_KEY',        'ht[D)j]%$0S?YSkj=p0U&Z7Shy4*th2u|MOtC]5m`d-ZPP(vbo|~3mX%9O3I,dO~' );
define( 'AUTH_SALT',        'nDQL]%/X!# )@rtS,h@tci@5R8Ad<PQ51}{9cgIp<(r6B~jGhoj#QWS&G~#oUWw}' );
define( 'SECURE_AUTH_SALT', 'C-TgS`C?gQKW5=Y(tD5eNsg^#C1(!8,]$kz[oz?5kV,4%;{ZawiPh*$X$0or[qJ_' );
define( 'LOGGED_IN_SALT',   ' ()s&$X/9n :#,W4|tq9)kKiKsAt56P+0xIuGc$a`FA(+R?!61l?NvsZDkz6Sk.b' );
define( 'NONCE_SALT',       'rjHCz9|i=)c O<n:?dqMQxOlwsA]}FO0PaWGlN&96DxtVoMKI{o(b6?QqH>8zrcE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lmnoxp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
