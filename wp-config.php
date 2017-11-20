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
define('DB_NAME', 'wp4.9');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-@@qz0I2)nAqv~24j8nwJ@Y^yy|9/2 g C~I3VnuklQ[u&0H>RqI^VS<dm!uUi.e');
define('SECURE_AUTH_KEY',  '{@Xgg`SL9,]G?fas0mTTDo_<QG$O//KJUhIoI}p!0E[gp5gW[3XzS<Lzz!<^wDpr');
define('LOGGED_IN_KEY',    'nMqYL<+G,~B5wPMAHC q,,l W{PsXGCw)S!*SR/s!kspg+.y=~F/t&k;+=$@?,Gh');
define('NONCE_KEY',        'tWK^Mqv`!z@zq=_{LjXFax+BXlUdpdHnj|lE(BXp1aA{TRR,9km|KP5f/`mN5I%L');
define('AUTH_SALT',        'l~FK2F)v,>[L[Nen&>4}~(,YoBn<W[bK$auYzLEI0z]GzD):~LgezK3y7G|t@uCr');
define('SECURE_AUTH_SALT', 'yB!W~:4@X2+2>UBtLc5AfqVE*mZjPlA4`J*;=`dz-f/s#e1AU~oKK7zwTYQSC^0v');
define('LOGGED_IN_SALT',   '0YGY}!n_k(&MrRVR]2:L~{,-]|HZ2$SOQ/8+N[PSs`wkdHi-!V|s_RWe_A/mD;.i');
define('NONCE_SALT',       '^jpobrZ;P03:e1!,g|T)GWl:u]lBwh^Q?jz)v+8V5^LH+p4LL&l^976NE~-%ES2i');

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
