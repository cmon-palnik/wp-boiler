<?php

require_once '.wp-db-config.php';

//define('WP_CACHE', true); // Added by W3 Total Cache

define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
$table_prefix = 'boiler_';

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

ini_set( 'log_errors', 'On' );
ini_set( 'error_log', WP_LOG_FILE );

if (in_array(ENVIRONMENT_TYPE, ['local', 'development', 'staging', 'production'])) {
    $env = ENVIRONMENT_TYPE;
} else {
    $env = 'production';
}
putenv("WP_ENVIRONMENT_TYPE=$env");

switch ( $env ) {
    case 'local':
    case 'development':
        define( 'WP_DEBUG', true );
        define( 'WP_DEBUG_LOG', WP_LOG_FILE );
        define( 'WP_DEBUG_DISPLAY', true );
        break;
   
    case 'staging': 
        define( 'WP_DEBUG', true );
        define( 'WP_DEBUG_LOG', WP_LOG_FILE );
        define( 'WP_DEBUG_DISPLAY', false);
        ini_set( 'display_errors', 'Off' );
        break;
   
    case 'production':
        define( 'WP_DEBUG', true );
        define( 'WP_DEBUG_LOG', WP_LOG_FILE );
        define( 'WP_DEBUG_DISPLAY', false );
        ini_set( 'display_errors', 'Off' );
        break;
}

define( 'AUTH_KEY',         'J?Eh^-)]W%^t-mzCI/DJ&0v{JMsnfzhL}cK$3Ie*b+WI.(Cr3Ju*7a0$[pI[Nlbg' );
define( 'SECURE_AUTH_KEY',  'eQV`{Eo<hAo}Z:%v@i)PtE-x}j`C^i$h/}QrsD*cb+:70)bevp`b9b$_rUhNdj@J' );
define( 'LOGGED_IN_KEY',    '68<}M>tO=bykY3~N-^cN;)Drn9EfNs[)Ga2)L=+%txH?Ivu2cSTYF1e8`(ynH#(8' );
define( 'NONCE_KEY',        '{ao7vlnH`ZO,atCNs(g;3*_zs&qT,w{d$?v2e7th3Rg+-wMXwgQ$ 6P~`RnY)+L3' );
define( 'AUTH_SALT',        'yHeZfM>dzr_[g}n}`.X{COd(V@I:%_x5.y}whN{P(r}1tf,0?Z1r/e~:f9eUFDoz' );
define( 'SECURE_AUTH_SALT', 'g>cq?3.J$dS0XTKt:D5hw-Bbf{,#O|=-#hcx1&Y26,0^skxgwhJ`cm<B]4pw*0kT' );
define( 'LOGGED_IN_SALT',   'BJ>Ktw@|gliH U.3rYr!ZME84D^:k7k%[]m#uc-.N(0mN15`=`WK^Qm_! QBLM?8' );
define( 'NONCE_SALT',       'c|%tiR]X;IOPK*-^++:,@fg:6BT^O&O]n`qh$qILBP=XLTwFMBU]Fh]D[AI| m69' );

require_once ABSPATH . 'wp-settings.php';
