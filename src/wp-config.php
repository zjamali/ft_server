<?php
//** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         'q-TqO,~v7n[v^* ?+{#v!|mTupE&u(#5g+i{r*9e%!lq0}p|@~;lMK~%=,/I-b~2');
define('SECURE_AUTH_KEY',  '#G8.yZ-NRyY*+wNe:lHO0a<q~{e.yg@3K_.%o?+{->%-Zuh10-mOy1LIyNB:1uKy');
define('LOGGED_IN_KEY',    'R8$N)y8`eXE-GwN4~qm7+>0Y@5Xai-T^F`8rS-uuO`zlZ%<&oj-_y4Xq4tm%d^AQ');
define('NONCE_KEY',        'R+AYVV8q:#=;%a|W~$4{8s M53JgL$;!Yik!tPm@b.V3I$*!+sL5>e.vQc>UGBi{');
define('AUTH_SALT',        'lc%5]-Qu4/o)/GN1M.|gkIQ._oJMuq8AX+TUh(I&6+&mM,aOS-#Qk?=H<?b&`wJm');
define('SECURE_AUTH_SALT', 'iD}Sw;(;C-DvM7(kc/G0j /s|w=V*:[T3Eio8L5/]Po(Ml)=6Xj?=f@>%+BU)dRr');
define('LOGGED_IN_SALT',   'vMkvH6nwgo%;=&;bS=?*G7cKM__5|16wxbdeK4Q[$jm_$vZ/pew@_e{/Us|Tzb#|');
define('NONCE_SALT',       '(:Q$Q31;G6FkFi4wx#yaa1(>;hL2-8=+g=_.clCImiR*IO{0~*cN=IOsR.{*tB4&');


/**
 *  * WordPress Database Table prefix.
 *   *
 *    * You can have multiple installations in one database if you give each
 *     * a unique prefix. Only numbers, letters, and underscores please!
 *      
 * */
$table_prefix = 'wp_';
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

define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


