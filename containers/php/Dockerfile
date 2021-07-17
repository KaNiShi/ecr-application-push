FROM php:8.0.8-apache AS development
RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

FROM development
COPY application /var/www/html

RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
