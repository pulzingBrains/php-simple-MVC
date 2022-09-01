FROM php:7.4-apache

RUN apt-get update\
&& apt-get install -y \
curl \
&& pecl install xdebug

RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data

RUN docker-php-ext-enable xdebug

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN service apache2 restart