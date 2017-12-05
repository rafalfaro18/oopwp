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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'database');

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
define('AUTH_KEY',         '3 JCy?i3*sU-u-7Fp4Sf@m<D}ATt=1>: $&6XB{jy(FK4~ju7jUy P%u!Emlsmq&');
define('SECURE_AUTH_KEY',  '%kQ,vO_kVJ.U_]{4ckWIs.1Mj^%M%F%rM F}tFUr*b`$l@1W,81.(q_a2: ~~SXU');
define('LOGGED_IN_KEY',    'x3?GiwgH+e4jEfg&aC]t[Fn~W4]-u)=8q<(3okaZ^7.+F%P/hegc~V: JmcZy65w');
define('NONCE_KEY',        '2Rd)o{|G*XOB!QSn3; HhoRzFR:#>MV6!~PES`FCOKjbamY}-JI0W0)I+JF|jv2)');
define('AUTH_SALT',        'C04qDgtigD7F&!#ql64siD>nf`+m;RhwDf=q)xHs{O5xa5yU`t=E.LEV2,S|06vK');
define('SECURE_AUTH_SALT', 'uj{xwsqX, CZ<w^ nSp[<lWq)SJr8`{Y {+Uk$YX!2Y-u hcug1Mq_>%gou:z*dA');
define('LOGGED_IN_SALT',   'Vty[5$J|glo5!,K_5<laI=.-IgG*Dp~wv-_Cj*d g)@! |{_EL^I_J9lcMC[iMTn');
define('NONCE_SALT',       'RR+!-_]8^rfiOZ$<yrq}1V^g1p!o6%8,!W?3x)IBIu}Yl,[hQS*jt,qqnNI!S&>[');

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
