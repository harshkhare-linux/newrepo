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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '/C6d@ebp,<PR,f]>_kbwB{`jNU#mS>f=*U<I]v1NpQ$9BONl*<!MiH.oG&WR3SIX' );
define( 'SECURE_AUTH_KEY',  'R]wZ _d-]=416oR*+Mb$#SmrX:Jz<SPgzBdV7}ea9Pk9tLt9RK]C]N[RF}x}R,t$' );
define( 'LOGGED_IN_KEY',    '7A9~A<_UykN4ihD<Ee%zmj2){(@PeTU-kZ/`bM rYq9J4BwF57J!%6tgNQP7WS}/' );
define( 'NONCE_KEY',        '8szlTV)PA qf0I$?|nf<`UZZV2FOt@(fAR.s0Pb==Ng,r:^A%</lm!i7Kih`*IQ[' );
define( 'AUTH_SALT',        '$x_6y!9}ck$ h{kW5fxG/:gM0zmHhH12;-IL%9@zlt>#M[eh)]0$]TqRYcz6aR#8' );
define( 'SECURE_AUTH_SALT', '.*G5^3kB,H;~^J.OB>thJeU3lMC#!A54D5j2ilj*qaii~v#}w#xnNTv{^@+!B`U!' );
define( 'LOGGED_IN_SALT',   'iT3w:=yLO{1gl[6`j^l!Mi:BH4Oo0Y1Q}=>jluD4;DD9Zwu+vP,<OA@5|`)jAGJB' );
define( 'NONCE_SALT',       'JNO,~$x<6o&VA=dR6qfX#*W1owgz<2l!zM;bMOo<6w2@2_l{w$,p-l/no{jn.AI(' );

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
