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

// Must be Enabled for HTTPS (Ali)
/*if ( isset( $_SERVER['HTTP_HOST'] ) ) :
        // HTTP is still the default scheme for now.
        $scheme = 'http';
        // If we have detected that the end use is HTTPS, make sure we pass that
        // through here, so <img> tags and the like don't generate mixed-mode
        // content warnings.
        if ( ! empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] != 'off' ) {
                $scheme = 'https';
        }
        define( 'WP_HOME', $scheme . '://' . $_SERVER['HTTP_HOST'] );
        define( 'WP_SITEURL', $scheme . '://' . $_SERVER['HTTP_HOST'] );
endif;
*/
// ENDS Must be Enabled for HTTPS (Ali) Replacing with next two lines
define('WP_HOME','http://4cs-wp-948272544.us-east-1.elb.amazonaws.com/');
define('WP_SITEURL','http://4cs-wp-948272544.us-east-1.elb.amazonaws.com/');


// Don't show deprecations; useful under PHP 5.5
error_reporting( E_ALL ^ E_DEPRECATED );

// FS writes aren't permitted in test or live, so we should let WordPress know to disable relevant UI
if ( ! defined( 'DISALLOW_FILE_MODS' ) ) :
        define( 'DISALLOW_FILE_MODS', false );
endif;

if ( file_exists( __DIR__ . '/wp-config-local.php' ) ) :
        include_once __DIR__ . '/wp-config-local.php';
else :
        /** The name of the database for WordPress */
        define( 'DB_NAME', 'gia4cs' );

        /** MySQL database username */
        define( 'DB_USER', 'giaadmin' );

        /** MySQL database password */
        define( 'DB_PASSWORD', 'Passw0rd!' );

        /** MySQL hostname */
        define( 'DB_HOST', 'gia4cswp.c6wcplbdyeto.us-east-1.rds.amazonaws.com' );

        /** Database Charset to use in creating database tables. */
        define( 'DB_CHARSET', 'utf8mb4' );

        /** The Database Collate type. Don't change this if in doubt. */
        define( 'DB_COLLATE', '' );
endif;

/**
#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4L1 N8PTBIS`Gn|w*2Om+O4!3F_HrYkr|A#!d3p:-$u8J!y@LDC-@he7DfxBBiFn');
define('SECURE_AUTH_KEY',  '-1yn7|qxQtH!|A *57Ny+{o?PKeKdIC$1$ZV1]7v$s47X0JzYA52&[@<Mc7I_HDa');
define('LOGGED_IN_KEY',    '5g|Jq _zrD!oph6IY32 V<?Hpq|7fNV0&0VZxHAp8/aj0)Z`,8eX+L3$tH58.i,*');
define('NONCE_KEY',        '4lY,^{}?+oW-yiU|knE:%=Z@ObRWAa$X$uZAy/O+gx#2#C/1 |bUW$c- *.J13;@');
define('AUTH_SALT',        'T#)&x.TD#dw=Rpo9Ni@c}p}F1_Vc/|fY!P;NXNA+QN3b6 ?>2.~&2Rl>*vcDTV[Q');
define('SECURE_AUTH_SALT', '!)}.uhb~pJ0R|<14e$;]` U$6jzdy+nJb{o+][.,#_HFs*/FD`|dCd#HzWcFmkbx');
define('LOGGED_IN_SALT',   'B4N_|f+Pd)hu=nBcTWyR^$[yc3_5Q[sd.$G*t7z^2[$u %Yq^+Q{MW-$3XB(8o#n');
define('NONCE_SALT',       's-eT{3+_:!wWvFxCoj4c-Cq0w^7:?wmG)j)^cUMM+->U&5dWeS?+xO2H#+#!Hoz6');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '4cswpblog_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', '' );

define( 'PLL_WPML_COMPAT', false );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
// Enable WP_DEBUG mode
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' ); }

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
