<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5~~[UGvS{5R0ll{&)sJ}R<9%X+wh!,I%J$}(8B-K~TN:R%uU3^FLVV0R6*x]eq`]');
define('SECURE_AUTH_KEY',  'X[f+G9n?Dm~Qb1eRq#mpMa 7d;f#o:qv:u1}yg(,|`h.+?TeAPh#aH-0h$~b~:Ly');
define('LOGGED_IN_KEY',    '9%lUX;f!f0 Na=pnNS/.fLD$ggA}IO2PoyA)XA((,WE(2:I:p4QDPR/h_yV:{i(_');
define('NONCE_KEY',        ']JiuQJPx);</s&1.h!pSoVMe ?LI5D.|,HkI/=(9vSt_{SE%@dPhP0A*o[Xwy`I&');
define('AUTH_SALT',        'A-Llc~l?A*<)e9V7e/nrx;{<L )~n78Fh? =Im%&$}.qU^x]k.,.l9Y/^9,6H]S1');
define('SECURE_AUTH_SALT', 'mQB)C4Zv[@&)m9Os[02rA$GZ5VTP,Q&c<q0cG&hnU4hUTff<}>NOQ.?3vYepkR%$');
define('LOGGED_IN_SALT',   'XZHQD>!)fmyB%HK5cRd2r@[lI3ywt1|S/-yzNY0j0RB34VmmYBY8[.A %AE7P9mN');
define('NONCE_SALT',       'guF!-ioJdLVOts=|%<%o_##0VageDY_{^Xbm9@dkm9Zp)y|Xk UwszStpm18}2fC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
