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
define( 'DB_NAME', 'wp_theme_one' );

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
define( 'AUTH_KEY',         'J,d~v1q7y-CZ:^o]/7:r^4r>r1=W.-0|5w)!@7j<pY/izFo(d.#DmQ!8Drh>av=w' );
define( 'SECURE_AUTH_KEY',  'tb/N-0y[/WD4).xVcRDjH8X=g;?lx(n.$U!)qhK]d(u#gLC:gQ ~;!oD#Ys=W]=R' );
define( 'LOGGED_IN_KEY',    'VYuvj!:6Ojf|,.J0cy irv8$8`*&U2Ag91-YP2iE.?A,mzdGWYtXSH:eVhglq>g?' );
define( 'NONCE_KEY',        '9DB$Qb8}(kC<F*`p=_B(TpKbPi}2WT,GU~`kXM?2u2MIJjA2/;!g~1&6>q^!5<P[' );
define( 'AUTH_SALT',        '`P-+>!*cy,x{L=t^>!*Z~zq!JstD_<D++)U>cFGr.7279`<;fRT#-DuII$gv+9^-' );
define( 'SECURE_AUTH_SALT', 'Ka5h-K[o=9>h9*<iXNA]lgTr 13ZsLYF O%r6VM; A)Q/J,#M; C(eg%D6_K}]a%' );
define( 'LOGGED_IN_SALT',   ',i`t [h{W13YO6G.N*v$,-Sb(N kEu(+bXPlCPb$[w:+6i2NE<DODypn^}Ensi7E' );
define( 'NONCE_SALT',       '6R5.7uKk?9u0vqZ?eacYn?Y?Uh`MJuk[~5#K)nihV_kF$Ufb+uZMhtd3hKy.Mb8K' );

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
