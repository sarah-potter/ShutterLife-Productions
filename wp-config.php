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
define('DB_NAME', 'shutterlife');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sw1vm=b6P@1p:%M]!#<8zGSyU3R^jH|/G/2w+7Xic ;Ll~WHIA^](sl=q[_tnB`7');
define('SECURE_AUTH_KEY',  'h*l]zC?64Es%5:r[t#5$rsU-fVoa7F7wbe[*nchC1r,-zWlbG=tjx72qz1q.87{j');
define('LOGGED_IN_KEY',    'f_U}4GrNp$z-D!S,*F4W]]?2kUOBnB|qQt9ez9.r4-D ;GdGA3l?5dT3- )MgH,U');
define('NONCE_KEY',        '57DhF-Y$!R?|bv85PokBdu|zI:%C]rvlW2-]`oNuSzkn9Da~)%P?^*y#pfvxsyEc');
define('AUTH_SALT',        '^67><9Ene<N+GibS`B6e:a3H+X0@uQq (( +OIcswDw;6D63(.gE7T-Pd^uSVXYw');
define('SECURE_AUTH_SALT', '?WZ2 (8%rYrXuwUD{@ 3?_JK]&8KlLLXeg!/-[)ap8H{S_4%sKvSUt5n51[t5RO>');
define('LOGGED_IN_SALT',   'Aw+J6*go>l/uF1=q^T+U8wt,8(y@^Y;jlmXH3yX-dbW<)!n9b&qucCZ npA%KI+B');
define('NONCE_SALT',       '(W{FKywkVs)?`FNNDOCr=_;E]h|+HAs;RbiKZy))R<O@gbzkJyp;$r{.Z`,Iu|G>');

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
