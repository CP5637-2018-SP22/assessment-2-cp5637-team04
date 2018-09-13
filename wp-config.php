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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'zsi34aiVeYZ~HmJg~,wAPg|atiQT^:}MGB|2@^O{2NMA&UosG+Wnqu4`J(D/2)C.');
define('SECURE_AUTH_KEY',  '@*6pL=A6n=}_|8Uv[L:LkYN2mRy&5Oh|iSKW`KWZG%l]wl,tG= 5iBIx%tQ]>Zp(');
define('LOGGED_IN_KEY',    'cBFSXX=`/z:~=%No1stRp6c=}:/y;Ec;gx0}Vf7;9~BJ4!ME`VnM-@=`~zmaGx[8');
define('NONCE_KEY',        '}rldS(0L-4wy,*QD3o1H&:05<)t1mg,aIY}8/* dax?YX2qvVGEV-b~s)hb ^to.');
define('AUTH_SALT',        '$a^U;(<d,`$]hW7n]4rglg4g3|*Ikn6 gBYZtz[|!?~Tj#CE,vyCIx#-EdpsH*hy');
define('SECURE_AUTH_SALT', '@5`!Ag!)bFFV 7ROHrzA:@#avSD]h!Tw9L-dNVF06hNe#`!]zlbf6740pmf /RN ');
define('LOGGED_IN_SALT',   'J6Q!w*d Gz^3Kj2;)wy(GAw=kAgTAn2e8E$:CFD-h%[>jYfYqg!%K*GDC]xQ?L#b');
define('NONCE_SALT',       'cB/D%]M:`V-AZvXpCfiVZlZ]wP+f^;?b8ZIeG4S09Hc:Sh9azizFrx$Gh(!zm!_-');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
