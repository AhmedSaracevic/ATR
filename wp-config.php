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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atrdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';GM.N+y(=_Di|MTS!gOv~hzzW|oJ5jq!n_qne9!tA/G1>eBW#!9]s|.X^LgU IHJ' );
define( 'SECURE_AUTH_KEY',   'yAYE<XgBf=-^xO!MQ 87V=v?]w-jFU<x?SV{`u[Tjav}Ds/Y=x=b7W%Ejg>$XzDG' );
define( 'LOGGED_IN_KEY',     '*4%Ax~IO-zP/n5-k*Y(HI3lqf*zN.j1fv*il2X!DB8c[?rE#9qI:t7/.6jf577MT' );
define( 'NONCE_KEY',         'dC24*8db{m4.4$Q67)|#878vuf-Wq3gaukish:]EfNFt}B TA|>{upJ0?!qKmMka' );
define( 'AUTH_SALT',         '61q>D5XTS-e.e}01s$gqYl@:JZ<wr|B1Vqh=(p4%/.kL+K4O@Cb%P$}_/w2BO^nm' );
define( 'SECURE_AUTH_SALT',  '{G@-<H7#8|3PL0Gb4EzlX&PW?}(}FL7:=ObMV0[.TRE G`R09sV7G[-k`nWZzk;I' );
define( 'LOGGED_IN_SALT',    'fXxG~-Q#Y2^c!Jw}G;@oB<CYDGdDxql{t5me+vRLdV*xzc.k>|Py62U)dI;95KhS' );
define( 'NONCE_SALT',        'Y!jPF]v`wtXeXz6w+[ g]f<W1PFl~9$@ms[Cu/2pV~0KGeJ0k:XBx72+.=py_:/U' );
define( 'WP_CACHE_KEY_SALT', ';U;s%cAt,FolH+2ZD3eB**%SkbA9#R|l n.Z1I&Gw:R*<7fh@:75$2{^{A&VVX/w' );


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
