<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'casino' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yOrICJU1%;scxKK1Z/!*dBi,3^!U.XP_of<hTRY;BgIb/mAb)dO{F%q&s=YH-n6L' );
define( 'SECURE_AUTH_KEY',  'i9q_A*D$V{X*}<9<A[usT-zn6Vx5H5G/aLZ<Mml&hS8{>|2}*FesuDVs5Rk-R?@;' );
define( 'LOGGED_IN_KEY',    'x;TLz$/ ,!cF-nS?ox-EZV}jp3:@rn=jcbFnqqHy{X( gR}NF=m;39x6T1>*QaO@' );
define( 'NONCE_KEY',        ')sM3}CV-E6H/P;E(oel8.Z*`tso.6Qn3oZ(z_xwhUH1{^GcZ+7w-/:.Lss$]qkJ)' );
define( 'AUTH_SALT',        '~ 0`1g9MAd>L8$J!cDN}lMC|<:(y_VPuGq;9,c+:JKU{8@?id.!_R]Hh|hW0~DVu' );
define( 'SECURE_AUTH_SALT', '5j?gag=!3-QHW!/LAif>r$i<@fG=)~`[sYPyo)f.8]NEyxYJi_6vO}y&1cD_DQTV' );
define( 'LOGGED_IN_SALT',   '@X--v|B.u-GE)Kf>o!g4p:G)${pC$xxauAVP^(Hw$u&i5].ceb1~ {Z*c?vX5LGI' );
define( 'NONCE_SALT',       'ABHy5NYV{r,b;SJJ!C0PKP$ht{J25q5c~MV[6e{{y]zE~[Xh|JG[|?*:>cdP]:RX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'csn_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
