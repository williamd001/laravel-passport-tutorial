FROM php:7.4-fpm

RUN docker-php-ext-install pdo_mysql
RUN pecl install redis \
    && docker-php-ext-enable redis
RUN apt-get update && apt-get install zlib1g-dev -y \
        libmcrypt-dev \
        libpq-dev \
        libjpeg-dev \
        libpng-dev \
        xvfb libfontconfig wkhtmltopdf \
    && docker-php-ext-install -j$(nproc) pdo \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pcntl
