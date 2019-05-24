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
define( 'DB_NAME', 'CatLeap_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Kb@A0sQ~IH6L*Z|:=+zWx]RH!fB)zJ7v5SAS:Jb_6/?GA|94u5JmrTC31ftY6[K)' );
define( 'SECURE_AUTH_KEY',  '/h*`/D%uFkgxr)ShGXI`?tR+|)/x~#}GD#^rZ7-iQNGf>:SySc2/>j>Oh)W:EO2 ' );
define( 'LOGGED_IN_KEY',    ':E]Q}I.JY8LC4dVe,R@m_mAWP^jgjw&9QV}(Vv+;EvhXY8#?#f /%Nspp#5;nv(B' );
define( 'NONCE_KEY',        'x5A=Tt;u|:@!b>Nur9}N`ZST;Hvm&Hszgs.49)94aK8p.7/~LgZ2J@xK=jH(>1PJ' );
define( 'AUTH_SALT',        'zfe*a&G#$AXsTr~=}Cndu$G=8Y.ZXzg1Js*4$G?L_8_Be&6;rda0jOFu+,}*J{Y*' );
define( 'SECURE_AUTH_SALT', 'p&hyAp99|:IkL|X>,70+i4?@O0cal_.pt54C_YOPFoLZDW[,FXE+srH}T*<Djdut' );
define( 'LOGGED_IN_SALT',   '.yO3uH2?Jzt]Rn).0h2 7YU<3X%xeK]!eWLkM6cO6D!jfDEEH(UcNu86Dcdf1c}s' );
define( 'NONCE_SALT',       '-P E{EX{iRYHmGON1zvwIB`*FcCu+a]fsV_{o&KhNM sPS<lU6nW&>|A0)4rX*Z,' );

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
