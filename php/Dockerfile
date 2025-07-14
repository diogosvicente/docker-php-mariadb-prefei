FROM php:8.2-apache

# 1) Instalação de dependências e extensões PHP
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
       libicu-dev \
       libzip-dev \
       libpng-dev \
       libjpeg-dev \
       libfreetype6-dev \
       libmariadb-dev \
       libmariadb-dev-compat \
       libcurl4-openssl-dev \ 
       zip \
       unzip \
       curl \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install \
       intl \
       pdo_mysql \
       mysqli \
       zip \
       gd \
       curl \ 
  && rm -rf /var/lib/apt/lists/*

# 2) Habilita mod_rewrite e permite .htaccess
RUN a2enmod rewrite \
  && sed -ri 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf \
  && echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 3) Instala Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/local/bin --filename=composer

# 4) Define diretório de trabalho
WORKDIR /var/www/html
