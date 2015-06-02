<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'localkmo');

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
define('AUTH_KEY', 'Hu>U<$Oge>%OBw%/FxY{MB*&J+tj]t>r]d(R!y@XkQ@MG$nERNliiDA*=EziHD*cor(VJ?<?+U]SPQ?kU}{jv}nZZIbAp[QJm%tVM]XwWzL$<Vxlsw-RvVKi[RvEObJ^');
define('SECURE_AUTH_KEY', 'R{(gSswm$WEE[=]U%Pck%S>Ompyxr@UB-MLup?goNHQ@tz*-J=skN?hmu}CDBWX/eCyrT!u$%b@E)ftRcCO!b+nA)SXlW&KfJjRBVnZR=WO(-G){%QzH=W$VxMF*TiF/');
define('LOGGED_IN_KEY', 'SYKs]zuOqmj]EzNdLO}@rwKhMoEjYUtJs@%ymEC}|n@M{@XPX*>G{!u>Yr*$lm%(?@VLAON]=K{YXgmbRa-hWx=kE!DgrhXpba]P?)o/-V?QK]mR}r;B^M|jxj!osB<&');
define('NONCE_KEY', '@zs|yLx&D];^&Eplnn@U@I){e)LPV=}!cHho!T{qq+{w(qtA>yr(*NpQ/;ipm&XtCZKGENB/K+gRZac*MXNdU(tBETxUzD$_fMOPmQTUSuIy^%%kcT$)Gew)eUFcBj$%');
define('AUTH_SALT', 'Bm;@|a{aWusa{{_r(tz)YZUwlaDwxA^$oo(iQfNr+czf_dNFb?o_AXAdivH_|gK=H)BG}ru-oFCvP{(bbGwJN]Sm<*ddn*ozm>lSdgh{biSLcFmSm)}LRjy[PbZb]VOb');
define('SECURE_AUTH_SALT', 'MVqlv@nBMKiIy%EcOYi/ODZKj])ic@G)U/yw+S-itXY*g^SCQ*N^rgg!]zKmsPa)>$qQVHwKql^s}$/{)$Q?y+C{nGlmDq[DEwPrh[}!Vm$gYHc_}gPlqT/MccWcQx=i');
define('LOGGED_IN_SALT', 'S^up@>GBG@|<IsTF$Ac]lPjlt<D+Z**i_M[]YKwhsRQgJ]|MrCe*MWKpQe(L_CUe[q|PhTuqIV;+=&_MGZR]OKOqKEo^Agykux>idCtb>F?Syej=X|}(^D/hK-NjJb$O');
define('NONCE_SALT', '^<tZnfPFDdz[Xt&C^?lY%xYx|e)RYmZt)XtO$mopcE(%U$FmP-^c/fVnOirIYrT/=YVXe$Q>eTM+[s(mRYdmToJPgURQ?Gy/S?upte}^gO|g|&N(UwQY^alfOVzj^-Yi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_xxfc_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
