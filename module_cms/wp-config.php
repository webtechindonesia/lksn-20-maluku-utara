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
define( 'DB_NAME', 'malukuutara' );

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
define( 'AUTH_KEY',         '|3$HjjF1!Hpl)Nnd*~eZYELEy}&8@zMWee:YVd5 <<|O>0E?1h?,*v!/29%emk=G' );
define( 'SECURE_AUTH_KEY',  '=PI9#a)=IBx,M!c*oF&2H/,2SoLt-.yv3n]o,2hJ-%tCh(S>)V1S*`;#vo|H~j/6' );
define( 'LOGGED_IN_KEY',    'n>vUGqe1DV~aB+QuY$Fu;|S,6nYb<7K>w%0Tp0)[(cHsPEXc5wz>NA6)lcRzrR.v' );
define( 'NONCE_KEY',        'P8j6!]T+v,4>*sF2lZTt`R#,O#b;}d$Evw:cJz WboKtl{(?Ik_+}CCD>j$a91WT' );
define( 'AUTH_SALT',        'bB($CFP,(m83V{#XVwY4=+kAP*z}`5iB#_8Dm Ju@6q|`5b#T#3c~Mc`ocXt3h,z' );
define( 'SECURE_AUTH_SALT', 'D&f`[1v&m$K.s#v2jL0&ClS<mETQ;xBf*LM* H7b)YC`LN/T=k4jTfy;{|4NmDJi' );
define( 'LOGGED_IN_SALT',   'x p07[ tZ~i$RhEVVAl5Q-AJ3/L<*j+. eSfP<2 CgH;o/yA}M]D^1gU+_<m;KH)' );
define( 'NONCE_SALT',       '.9yOY6J[g`<yNacB3/faQ{u:rE=|FkY%Nwugqwa1~<;eT^#;]3Emr_x3s`=Vhe]X' );

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
