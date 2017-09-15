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
//define('DB_NAME', 'database_name_here');

/** MySQL database username */
//define('DB_USER', 'username_here');

/** MySQL database password */
//define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');


define('DB_NAME', getenv("DATABASE_NAME"));
/** MySQL database username */
define('DB_USER', getenv("DATABASE_USER"));
/** MySQL database password */
define('DB_PASSWORD', getenv("DATABASE_PASSWORD"));
/** MySQL hostname */
define('DB_HOST', getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST"). ':' . getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_PORT"));
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');




/*
|--------------------------------------------------------------------------
| Authentication Unique Keys and Salts - DO NOT MODIFY
|--------------------------------------------------------------------------
|
| Keys and Salts are automatically configured below.
|
*/
require_once(getenv('OPENSHIFT_REPO_DIR') . '.openshift/openshift.inc');
/*
|--------------------------------------------------------------------------
| That's all, stop editing! Happy blogging.
|--------------------------------------------------------------------------
*/
// absolute path to the WordPress directory
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
// tell WordPress where the plugins directory really is
if ( !defined('WP_PLUGIN_DIR') && is_link(ABSPATH . '/wp-content/plugins') )
  define('WP_PLUGIN_DIR', realpath(ABSPATH . '/wp-content/plugins'));
// sets up WordPress vars and included files
require_once(ABSPATH . 'wp-settings.php');

