FROM php:8.1-fpm-alpine
LABEL org.opencontainers.image.authors="Mary"
RUN apk update

RUN apk add composer vim icu-dev freetype-dev libpng-dev libjpeg-turbo-dev bzip2-dev libbz2 libxml2-dev libzip-dev ldb-dev libldap openldap-dev

RUN docker-php-ext-configure intl && docker-php-ext-install intl \
&& docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd \
&& docker-php-ext-configure mysqli && docker-php-ext-install mysqli \
&& docker-php-ext-install exif \ 
&& docker-php-ext-install zip \
&& docker-php-ext-configure ldap \
    && docker-php-ext-install ldap \
&& docker-php-ext-install bz2 \
&& docker-php-ext-install opcache
