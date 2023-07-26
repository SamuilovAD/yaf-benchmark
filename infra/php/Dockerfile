FROM php:8.1-fpm

RUN pecl install yaf \
    && docker-php-ext-enable yaf
WORKDIR /var/www/html
COPY ./infra/php/php.ini /usr/local/etc/php/conf.d
