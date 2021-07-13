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
define( 'DB_NAME', 'zpsindhu' );

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
define( 'AUTH_KEY',         '<Op ZZ=ss$ltQm{C,b:$[K{fGp|&uAL8-P}N6%2m;g= {g4A*j[Fp/!*I8a?JS;.' );
define( 'SECURE_AUTH_KEY',  'YTJ5S$,;VApZzS&7_uP{BliHGr&y5wN0 !q(E2nu}I4F8O<9pNuTnxs#A(`Cs,Pa' );
define( 'LOGGED_IN_KEY',    '|x1dFPL2EpW37yFrphP-{{~#+%<ne&ByZ?YO7GrDD-!C$`ZJ=O8a?2-pu5KapRI|' );
define( 'NONCE_KEY',        'Ldl{^7V7S$RuH@Gqqn)YTm#R o44Yjs~bLt@$<>l3w2B`;Qcy_oT/[Gl&V?WmKsy' );
define( 'AUTH_SALT',        'vP3#:@>TNu;V6?Aj.9,?)?ny@&8Tak<Mo(P.Bh<Wjl>{qhU^v@GDQ=$Oc[R>6me7' );
define( 'SECURE_AUTH_SALT', '_IGRqgr)QbU=t|3Kja%PG0D@{%rrN[ha<TWr>e/=Q[C3Tsjz,hy7l$,qA?/BSFga' );
define( 'LOGGED_IN_SALT',   '&1Y&QKbmt{}}~mY]{ !A?n9.]>_Y{_@S^&MT|H!!D_cM2GMt{CG#ln8p#[y69)[b' );
define( 'NONCE_SALT',       '8ZDVK^kXMFiV/plm*mX9},D.CeIAxhfG&x5HZ [`3_8CPr$|]J293=yG;KmhIet=' );

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
