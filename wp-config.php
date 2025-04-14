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
define( 'DB_NAME', 'moreyeahs-test' );

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
define( 'AUTH_KEY',         '-Mlqb?McQN^+U=,`yL_k!z2Zqv{:tDysn/cseN_|m1NCY2ngjyLkl&}T*YoI{2YW' );
define( 'SECURE_AUTH_KEY',  'm]13E9w#)!!6?C4jtcYGelMx);~4O4$,^).1FPP!q~q,sprEY=9LH#lauJR qPI$' );
define( 'LOGGED_IN_KEY',    'pFwTU^N<DRQn_|up{eIcfj_*]PvyvA*2c$ei0u0mZW0[eJ=cy}#VzG+1y?V#(iut' );
define( 'NONCE_KEY',        '(?svXmYWn;eaC6;;~i+5_wv8@/iJJ nyK`[|q8zm_sTu{:4ZSP;=*?ctveIr kxJ' );
define( 'AUTH_SALT',        '6f[uePXU+7T9`X`[mEf,g__opp;|RkO:W5:NjxDStk5fhO`.RS,5_iXy6*iAtF8W' );
define( 'SECURE_AUTH_SALT', 'yMEr*Qca@kGSNx$,I:;#F-xWz!Mj ( 9[>*3g=H_m]IUD~f ^;?T]}n!XaI`T-sF' );
define( 'LOGGED_IN_SALT',   'A4Gt^&bj*WN]!WQH4[gqv,*0@n<xyZva0*{fJ5+Gb:7K>@YUU}9&<C%q.{a~5d(l' );
define( 'NONCE_SALT',       'QKH{j|g(v+vfo=)W(}@u?2_zA7xMBsh(5{I8:l (a+88@,:f$^M-I!L|xD,XkVj>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
