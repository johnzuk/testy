FROM php:7.0-cli

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zlib1g-dev \
    zlib1g \
    libicu-dev \
    g++ \
    curl \
    libcurl4-gnutls-dev \
    libxml2-dev \
    libpng12-dev \
    libc-client-dev \
    libkrb5-dev \
    apt-utils \
    libfontconfig1 \
    libxrender1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

WORKDIR /usr/src/testy