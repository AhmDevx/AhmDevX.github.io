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
define( 'DB_NAME', 'ahmGithub_db' );

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
define( 'AUTH_KEY',         '*sQ(B;q}*hY(_%p/`xFevKMv/BtJjR7c:1EUQa1?W6hP2ZTs!k<=o+TR0%vNj$33' );
define( 'SECURE_AUTH_KEY',  'FjDyI~Uoe?/#N|T;4Ne]n.*cip_gg~EL# BCL)4(}zW+$Ir9_yv=lo@gUx9]x9@k' );
define( 'LOGGED_IN_KEY',    '=zUpJcT%TkyPY J~3v+q^6rk@vqgZ-)ygst6vV)a7 QXJ?A[k_4L[6&?5s6hpUTs' );
define( 'NONCE_KEY',        'Ui(DQUK3eZH;zx2>o$]&Bm8W9V]+~r We5W[?clmL%+br?@)-w Tx+v`Yb{Y]GFb' );
define( 'AUTH_SALT',        'Q2qgai0@-1.zd;Xjv!0O_T<ymx V.1+RKg)~OsWJIhi}|j@~wGYtcQgtd2ZZcwl$' );
define( 'SECURE_AUTH_SALT', '@P~_DsQ=R%nP=T4o#%ec7FGTQ;D.{kcT(IgWk4w(D5{iwoND(</PvL??q?~:PH!R' );
define( 'LOGGED_IN_SALT',   'G2`}tH>|[R<`lz y@9TUlaYQ}3<F{L)qKz3wE`=e3!)XqX11|#cxoGwKWEwk]Ef,' );
define( 'NONCE_SALT',       'EZ1 mkHj,^f)!x9|;>}Mc4*T5d^|R~q,m8mae&NmEY6^JsAc/Y4DX~xkqH0%3U&r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
