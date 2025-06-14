FROM php:8.2-apache

# Instalação de dependências do sistema (note libs MariaDB no lugar de libmysqlclient)
RUN apt-get update \
  && apt-get install -y \
       libicu-dev \
       libzip-dev \
       libpng-dev \
       libjpeg-dev \
       libfreetype6-dev \
       libmariadb-dev \
       libmariadb-dev-compat \
       zip \
       unzip \
       curl \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install \
       intl \
       pdo \
       pdo_mysql \
       mysqli \
       zip \
       gd

# Instala Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# Define diretório de trabalho
WORKDIR /var/www/html
