FROM php:7.4-apache

RUN mv $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini

RUN docker-php-ext-install mysqli pdo pdo_mysql