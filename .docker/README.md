# Docker-Setup: Apache2, PHP 7.4, Composer, Xdebug

## Description

Easy & lightweight basic-configuration for PHP-Projects without database.


## Includes

 - Apache2
 - PHP 7.4
 - Composer
 - XDebug


## Users Guide:

1. Copy the directory .docker into the root of your project
0. Open the file .env and setup the variables
0. Copy the file docker-compose.yml-example (name it docker-compose.yml) into the root of your project
0. Run the container
    ```bash
        docker-compose up -d
    ```