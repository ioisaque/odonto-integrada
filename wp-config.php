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
define('DB_NAME', 'odontointegrada');

/** MySQL database username */
define('DB_USER', 'odontointegrada');

/** MySQL database password */
define('DB_PASSWORD', 'teste');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'g4Cq5W/$!*L~Vt0;QU:]kE.;ew&o[_!${|)&bKoCZ/$FfT=XA^c/.gPoH)jZ2go-');
define('SECURE_AUTH_KEY',  '3<@X,Ez}Yrm6CX27D>;.Me HOC+=##wRzj+-NH]),(J/+Tr3*.^+x04[hs-%29FH');
define('LOGGED_IN_KEY',    'k7A)b#bxl=kLzcfz1q;:zX]9n=q bEO{aw e]T=^lX@/st(j?jpuhUW`7z;z}PXh');
define('NONCE_KEY',        'M a/~SC$Y]VWI]aPJrY&fic$@6sJ-9 w:I2pJ<=V??wWH*PC[Kd70|kAeEK*~rNw');
define('AUTH_SALT',        'Er/U0nDM?XM,=%ht*GNUC@)|509ndp0L.g)I14V4d(LJQ!)(oP.id.w%T9EV]Y]t');
define('SECURE_AUTH_SALT', '>3q{E]qH( D gD|2r?S[t]L6bV7bb-PZ7SEjKU<17#&4+ j7L:{SbMNTV,`FGn;%');
define('LOGGED_IN_SALT',   '4,4-+=6~XG;7VXox55+Blh|to93MB$%;EuV-Q)?1p}I~k7M^E3<F$lxHoiimwOLK');
define('NONCE_SALT',       '>q50F?H4Sja&VH0BWEe+B7t@~U+k+/)QqG*>d5xiFN]%]5nKG]9Ah5tT!?7-BdYf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
