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
define('DB_NAME', 'wp_travelovation');

/** MySQL database username */
define('DB_USER', 'travelovation');

/** MySQL database password */
define('DB_PASSWORD', 'tncSdtG6WRKMBr1qZ0do');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'C+9V98--G@Z{laQV;trQP-xhL_w73p0S4}a,il#K?jT9oG@soa#/S-vy%>KSy~e*');
define('SECURE_AUTH_KEY',  'C%j8|OgKZKMk9gI&Z!?pPj<bWNvF;|>&@PwGZMT5Ym[xXfb[Fb=L9<Xvwy!_$mA#');
define('LOGGED_IN_KEY',    '/O.6<AQmTFO*iuACp5q.Ow0,*$U`QAt+[U2r071&NuPx5?u{x}ZY>bFc(|#X=9LO');
define('NONCE_KEY',        'tD~6CjW3w2UFIs5qqxmJdr!W$a*Gt|KY7r8j(w4ktE1{|iW4Te.W5lmUBorIpSx4');
define('AUTH_SALT',        '`VCqx?0gwFz#vUT+:u>|NvF9Lvq7._Q&v;}b*Q=!>bJP9i}StZ*hvE/L5GLn;~8#');
define('SECURE_AUTH_SALT', '`4Q+wuJ&Cn3_BxIO+|^Yoer-3l 0)YlE*m9h[VM<c@Erh*4_#^3q.?T@Rm<k(=r^');
define('LOGGED_IN_SALT',   'Qnq$bxz-99jn6ftW:coOB0$xAXw <E$;vF6I();q7VOX*~~iT6lFm1>>a3_Y1pET');
define('NONCE_SALT',       '^VdEc m;jMt!:ZK$h;in`Sf3E}]~i[G/LV4@g8#]z<Fqw;- b8b~goS%Fdxzrw=_');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
