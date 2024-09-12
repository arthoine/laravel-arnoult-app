FROM php:8.2-fpm

# Installer les extensions nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Installer les autres dépendances si nécessaire (ex. composer, zip, etc.)
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    && docker-php-ext-install mysqli

# Installez Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html
