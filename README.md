# opencart-sample
opencart-sample for autoscaling-pass

- Mount this source code into directory /var/www of container `cuongnb14/apache-php` image

- Import database from file opencart.sql. Note: before import need edit 
 - http://localhost/opencart/

- Enviroment in application:
 - ENV_HOSTNAME
 - ENV_PORT
 - ENV_DB_HOSTNAME
 - ENV_DB_PORT
 - ENV_DB_USERNAME
 - ENV_DB_PASSWORD
 - ENV_DB_NAME

