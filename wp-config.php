<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u0618804_forum' );

/** Database username */
define( 'DB_USER', 'u0618_forum' );

/** Database password */
define( 'DB_PASSWORD', '06D#skr20' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'Id/BstRv>AP4/vMn<c@+fxY[8*sbir>~lFP$*Sv9;GM{s1$* %NGU*%nb%14JGwS' );
define( 'SECURE_AUTH_KEY',  '3mG]gWBL7N;r[Z3#jK`C`S;CiPgXS0eHm)3g_1kt,XN#SH^<*)#9EEN|K,SUgJM|' );
define( 'LOGGED_IN_KEY',    ':q2yJj&~v.S1;HG-jCr[)1ury20SL7$pa,K(npb4/TV:.5BQ*cK.tD:vdiUub6OX' );
define( 'NONCE_KEY',        'jzk|L%cI 7$4_VbFc/=~$wBtaA7GJ51xcp$`m_^c#TYp#P#_L?P.+yNW. gtGPAv' );
define( 'AUTH_SALT',        'AAGE,T/A>&e,<#MM^W}$Nc+(%A!rtF/)TL~f{fL5PAv(i%Yak5k[b^CUdWe(45^T' );
define( 'SECURE_AUTH_SALT', 'IYDK8n;QmFG/2rH@ZqzA:+}?ucC[nqAFBX eGey-UhDOqk@9WF`iWGWB8^KME$!j' );
define( 'LOGGED_IN_SALT',   'lPGzwv:DMR!!Af~2s;s](/Jee?v*q-C@@ljG~fa#EEvU{<b4O,2sTPINAPT.H?:<' );
define( 'NONCE_SALT',       '2o;{2Hsyu,>eYMx:a:_%~c[[];Lup,l[oJX/i:^t^E8]k4(.g3t7K8SP`.}AY>s`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
