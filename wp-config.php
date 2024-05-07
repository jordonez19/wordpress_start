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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'EiovhG/nd*{?=-9Q<T,tsnZqI[y+}s<6fJ7v!^)H}&)t,vE5.^X3/$5 JM/d,SO<' );
define( 'SECURE_AUTH_KEY',   'g]%9$<AjWeGt@^4pz=IC$w*M`.vie4+Kfi@YgTwuPkuL`V`nb.i2TwtPNhu/6e9^' );
define( 'LOGGED_IN_KEY',     'OI/f h$kTp]2KEXw6]L7`v:7nd7t=o/$|=`z%yc0  7d@A%HN&F-TG+7aI2<<JWy' );
define( 'NONCE_KEY',         '?8 H,Qq_&ZlxQbf1[vid^a^LC7Ds,}=_GBw@p=TO%{2Rb^$Oi^W,;sf^IaZb@E1-' );
define( 'AUTH_SALT',         '<K /oIq82m~2%XxJ4&z3c9wdFM7d:x!/2}[5A|[yq,KM]juR03fJcxqSPVh)VoYu' );
define( 'SECURE_AUTH_SALT',  'jB2L`5(i)UM`b}R+!iNTtQpr]Bvr!+7Am.h1fze`.6C&^3jIuwqOd|./bSf]$=@W' );
define( 'LOGGED_IN_SALT',    'G8jZ^Uo[=kkj>bbk++^3R+hNd|SIDM+L5|hMN{}gb5c[@p}*oRhq+Owly/Y$*)+p' );
define( 'NONCE_SALT',        'GI4Oq^@!-v/8[4qEZ>M^baPOE@_0.=GmHK8v<{zr=rW,k.P9idOn.Wb,L#l>BM]K' );
define( 'WP_CACHE_KEY_SALT', '8*MTqWrg*z-pmY:IvWf<|WD$qLXa1k# Oe2Rj9 @xYGIbe?]e|0[ qL,,$<iM.~>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
