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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Ardoise_Final' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HxU^xNux;e788o8O=P=PARBz%;<v=j1a1<_[F:SmiQZ<OAiD6Rn;cTvnCY*Jud6D' );
define( 'SECURE_AUTH_KEY',  '=y]SHO:g)$)p?6{;Tu3j6T}}[:R?qbssryx43h/+ub427~t}L=8]9y[]D:u<Bd!D' );
define( 'LOGGED_IN_KEY',    '?VE.gDNU}:zexx*;9d?z6QG(N,#kjZhYIn5>pS%z*%DH)i1o-/$2J05qd:kqR%#n' );
define( 'NONCE_KEY',        'J.h_C<XpS#B^QP)Xf3mLY^`zwo1vc@yBy:$%9.kG;*E}H:~iYS-h6{4=g{2&LKG*' );
define( 'AUTH_SALT',        ')x~kttU%Ov}Yq6LnGd[yGHoj4<)N:2j66x}.w~l_3mwzQ+v=q84/#O_D|eXK`Q:6' );
define( 'SECURE_AUTH_SALT', '%lJiYB}HyYI7(>AC4cwQ~hy{&KHrbyJTj)@!vKR;@8`)ZTWJcO-bU[^JPfCuVD}z' );
define( 'LOGGED_IN_SALT',   'B.^p@&C9C6-#wmPbUpMOeT}x3sE(NPB~k@reJOCx1QynDJElDZPJ&%.C.l2:DS6:' );
define( 'NONCE_SALT',       'EGvtX7`<{l?@-=,gGa4-]e^%nojj[QrLQc;B3u9{ &fG?G-<^lT~#Bl2~=eH^$u7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lma_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
