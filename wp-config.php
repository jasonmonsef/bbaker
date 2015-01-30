<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bbaker');

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
define('AUTH_KEY',         'on:O;Tze[L^e$cU|yg4BCvg,p+^T&VEGzzpV<Q_jc9EcTv-HIn-%@nQB{?G}j#UK');
define('SECURE_AUTH_KEY',  '(Uj_w6js0A$rX.-xNRA.+k[h)=&JcWa,Oamh8#!ghl.i__}*_!ZP;DE8<<I0{0Vq');
define('LOGGED_IN_KEY',    'eS>F(|7*8!)[V{U%F8(>~P(j,6EwHZ[f#]V@arT!m|PpF1Tl0GM=d=-@j]Gt+X-8');
define('NONCE_KEY',        'l-DbW4S+ZOb,&?l9LFLWKG*dC|5&8/Wf.X&p-Slksahd2 TQgJ`FZ.}QO;[+_{gH');
define('AUTH_SALT',        '^}cO0Pb.8Q,0M|z.ZiAci_2V51m)N {f:H3%FjkkUtQH(xl;JSwP2Dc.XgUfS.@D');
define('SECURE_AUTH_SALT', '8G!.q*+KDPG(@ac^cvuf#:z3b}uUPE.lbFi`Xge,;r$ZjN[XLYUs$po;-Q^Rl.[)');
define('LOGGED_IN_SALT',   '2W+-(wfQO>VtJ)6U57sv?rlwwUK-F1AH(wod-sE]l5GDEb,0Y94+{P=Zr/Z]DaPO');
define('NONCE_SALT',       '`R.n*0nof,=PfXTkhX$-luJ,s<lU-$NQB)f$)E7@b.WFBZoV_APFIT<r-@~-TzB3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
