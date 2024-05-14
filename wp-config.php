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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Hospital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '!]EkP:;,PT,-0o/7c!``H5g(e;D)!RMxczm_JYi]R+ich]sK;FozNSDz |&D|poL' );
define( 'SECURE_AUTH_KEY',  'OL$S`<f!-oa{VZF&?-]6m:-j4Bd9e09qan[a[UGYStgC]JLetFU$&Ha!jpl&L(ky' );
define( 'LOGGED_IN_KEY',    'fCI^>pK0K=db8{frX>pp(kDo)p3H97I,d($P%EE, nzGFT*ej1Z~UQMX;*aO%x#{' );
define( 'NONCE_KEY',        '{@srKh=0])>I$1vU|MCP+6&n<96E$_!k;H%AwKn`#j}aG+G+ V2n4V+}^dlHgNxf' );
define( 'AUTH_SALT',        '(:9z_Soe4pcRewsW:.IdniTHIm{WL1YA_r@p.fjlv-j2gzrv1QzdeVGrb<idFke?' );
define( 'SECURE_AUTH_SALT', '- i1Z?c]^PtUmvzuLt3>tfn68nk=hGGiBV;(Bql8/=FACRq,Im{ ,QMC`hkvIL%>' );
define( 'LOGGED_IN_SALT',   'U=/HcX*3$n:$Fbo[$A=i^P1?;EU$XA0w9I[eXY9_Imf9cVj{)KE3xKZzc]GZrCPm' );
define( 'NONCE_SALT',       'Adylll rswP7yZ1<b 0%wl1_Vs-O5Tc2V5}Vo/p_IrM8h,z[Lnzmh2&8qBcK,V.D' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
