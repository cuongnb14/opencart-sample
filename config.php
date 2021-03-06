<?php
// HTTP
define('HTTP_SERVER', 'http://'.getenv('ENV_HOSTNAME').':'.getenv('ENV_PORT').'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.getenv('ENV_HOSTNAME').':'.getenv('ENV_PORT').'/');

// DIR
define('DIR_APPLICATION', '/var/www/html/catalog/');
define('DIR_SYSTEM', '/var/www/html/system/');
define('DIR_IMAGE', '/var/www/html/image/');
define('DIR_LANGUAGE', '/var/www/html/catalog/language/');
define('DIR_TEMPLATE', '/var/www/html/catalog/view/theme/');
define('DIR_CONFIG', '/var/www/html/system/config/');
define('DIR_CACHE', '/var/www/html/system/storage/cache/');
define('DIR_DOWNLOAD', '/var/www/html/system/storage/download/');
define('DIR_LOGS', '/var/www/html/system/storage/logs/');
define('DIR_MODIFICATION', '/var/www/html/system/storage/modification/');
define('DIR_UPLOAD', '/var/www/html/system/storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv('ENV_DB_HOSTNAME'));
define('DB_USERNAME', getenv('ENV_DB_USERNAME'));
define('DB_PASSWORD', getenv('ENV_DB_PASSWORD'));
define('DB_DATABASE', getenv('ENV_DB_NAME'));
define('DB_PORT', getenv('ENV_DB_PORT'));
define('DB_PREFIX', 'oc_');
