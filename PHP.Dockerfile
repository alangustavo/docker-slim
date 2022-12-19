FROM php:fpm

# install extensions from php
RUN docker-php-ext-install pdo pdo_mysql

# install and enable pecl extensions
RUN pecl install xdebug && docker-php-ext-enable xdebug
RUN pecl install trader && docker-php-ext-enable trader

ADD ./php/custom-php.ini /usr/local/etc/php/conf.d/custom-php.ini
# ADD ./composer.lock /app/composer.lock
