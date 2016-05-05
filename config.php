<?php
// HTTP
define('HTTP_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/ec/');

// HTTPS
define('HTTPS_SERVER', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/ec/');

// DIR
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('DIR_APPLICATION', DOCUMENT_ROOT.'ec/catalog/');
define('DIR_SYSTEM', DOCUMENT_ROOT.'ec/system/');
define('DIR_LANGUAGE', DOCUMENT_ROOT.'ec/catalog/language/');
define('DIR_TEMPLATE', DOCUMENT_ROOT.'ec/catalog/view/');
define('DIR_CONFIG', DOCUMENT_ROOT.'ec/system/config/');
define('DIR_IMAGE', DOCUMENT_ROOT.'ec/image/');
define('DIR_CACHE', DOCUMENT_ROOT.'ec/system/storage/cache/');
define('DIR_DOWNLOAD', DOCUMENT_ROOT.'ec/system/storage/download/');
define('DIR_LOGS', DOCUMENT_ROOT.'ec/system/storage/logs/');
define('DIR_MODIFICATION', DOCUMENT_ROOT.'ec/system/storage/modification/');
define('DIR_UPLOAD', DOCUMENT_ROOT.'ec/system/storage/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'ec');
define('DB_PORT', '3306');
define('DB_PREFIX', '');
