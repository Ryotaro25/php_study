FROM php:7.2-fpm
COPY php.ini /usr/local/etc/php/
RUN apt-get update && docker-php-ext-install mysqli pdo_mysql \
&& apt-get install -y apache2 \
&& a2enmod rewrite