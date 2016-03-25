<?php
// HTTP
define('HTTP_SERVER', 'http://'.getenv('ENV_HOSTNAME').':'.getenv('ENV_PORT').'/admin/');
define('HTTP_CATALOG', 'http://'.getenv('ENV_HOSTNAME').':'.getenv('ENV_PORT').'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.getenv('ENV_HOSTNAME').':'.getenv('ENV_PORT').'/admin/');
define('HTTPS_CATALOG', 'http://'.getenv('ENV_HOSTNAME').':'.getenv('ENV_PORT').'/');

// DIR
define('DIR_APPLICATION', '/var/www/admin/');
define('DIR_SYSTEM', '/var/www/system/');
define('DIR_IMAGE', '/var/www/image/');
define('DIR_LANGUAGE', '/var/www/admin/language/');
define('DIR_TEMPLATE', '/var/www/admin/view/template/');
define('DIR_CONFIG', '/var/www/system/config/');
define('DIR_CACHE', '/var/www/system/storage/cache/');
define('DIR_DOWNLOAD', '/var/www/system/storage/download/');
define('DIR_LOGS', '/var/www/system/storage/logs/');
define('DIR_MODIFICATION', '/var/www/system/storage/modification/');
define('DIR_UPLOAD', '/var/www/system/storage/upload/');
define('DIR_CATALOG', '/var/www/catalog/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', getenv('ENV_DB_HOSTNAME'));
define('DB_USERNAME', getenv('ENV_DB_USERNAME'));
define('DB_PASSWORD', getenv('ENV_DB_PASSWORD'));
define('DB_DATABASE', getenv('ENV_DB_NAME'));
define('DB_PORT', getenv('ENV_DB_PORT'));
define('DB_PREFIX', 'oc_');
