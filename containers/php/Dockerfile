FROM php:8.0.8-apache AS development
RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

FROM development
ARG ENVIROMENT="development"

COPY application /var/www/html
COPY containers/php/${ENVIROMENT} ${PHP_INI_DIR}/conf.d

RUN cp $PHP_INI_DIR/php.ini-production $PHP_INI_DIR/php.ini
