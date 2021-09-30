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
define( 'DB_NAME', 'wordpress_sunvboy' );

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
define( 'AUTH_KEY',         'peLpY288p`^91F915}ms.6}ylsagl1:fzcaq.3AG<_hPmA57+g%${US,>lxoF+Pu' );
define( 'SECURE_AUTH_KEY',  'L*#S[sofGwkz}aYt5mnF0$jtQjD^GvF5(/yqlQVciFMSLiRdP^S*:+[G$!XJql$v' );
define( 'LOGGED_IN_KEY',    'j;f%o3D(#(fX21S[$hO9{N7?p)]YGx8Ng>/u|>%ys!H<q@*b(.P9-HdnN/8o:azO' );
define( 'NONCE_KEY',        'iiR$?{8jRPw8}16_>]WX[8U)HkI{rghcyoIcqb)hxH|l^:Z39kSUg=_`m>`a[{?E' );
define( 'AUTH_SALT',        '|4Wk|6vB.4D?m_TzvCH Kxm)wvBy4}T-pLRUM++j#Q1AF!Z&$ !,Kl/7T PnM9ZQ' );
define( 'SECURE_AUTH_SALT', 'PRllTc wCEDeGOy063<NQaWU3)JHWKQ|fSTK8NEgFB,b9DuRqe3cOIP+<{{@*3l|' );
define( 'LOGGED_IN_SALT',   'K:VMAo@*g_2f>w 7LYS+m6ux+#^I9EZ|SQL/]xC2-o/DwQRf|v{1g7&*mXT.0-K3' );
define( 'NONCE_SALT',       '8PPV4^UxJP3C,*W[cN=[l39_l1Q:7A=?1f=4fRe,{}d/&Tgy`D)W+EMmnwXF,8~w' );

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
