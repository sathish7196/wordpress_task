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
define('DB_NAME', 'doodleblue_task_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Adm1n@123');

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
define('AUTH_KEY',         '*r=2gBf{2(DH4@oNJd7)/*IaR3le|@eG+Ar56z`0pHh.(rb[wUC{nkt]}(vT3_,!');
define('SECURE_AUTH_KEY',  '!6F7wi^p,]]4)>KHu,^+uIimfe~ XCN^#*Yc`P>67X}EkP[=||4+pcC4+4H|M)t8');
define('LOGGED_IN_KEY',    '{WD(70F*P,bvdgc|D%HxX2X3d![&jQ;!KE?:Acv7@kr+0NgO<~i0RlY8`HB,o^)R');
define('NONCE_KEY',        'tPp(?nsFC=`)&~Adw4ObuI$A].qd0:qp:pT|@}i.%_IKAwNL5OI<u5B$^7u<Z^74');
define('AUTH_SALT',        'Yy&P};2@cC:CI:PB-yePh2LJ/qDRCp$D?NQ_2D?/7_k|0$e=AU9=7FQ2$u:;Np92');
define('SECURE_AUTH_SALT', 'FFa-c|3JA@I~I3s|pB5{`g|o5n?[ wH-a<b5~5u}8_S2/yYQV7?3Zm?IUY&_J~TQ');
define('LOGGED_IN_SALT',   'f5xD$9qNYCaC:TS>w2BN&k3i)W$U 3Or[sy.tA)6P(=xA&9z0G*o8hqYu1o;HitS');
define('NONCE_SALT',       '1L,O&u>TOuAo.yt5wF[yBp}2x[bb,3H8uAD*%<LAs4k^w@4Mm%;UV&NMn`/m?${4');

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
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'harish@23' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
