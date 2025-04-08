FROM php:8.2-cli

# 1. Instala las dependencias
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev && \
    docker-php-ext-install pdo_mysql zip

# 2. Instala Composer de forma global
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3. Copia los archivos para instalar dependencias
COPY composer.json composer.lock ./

RUN composer install --no-autoloader --no-scripts --ignore-platform-reqs

# 5. Copiar el código
COPY . .

# 6. Genera el autoloader optimizado
RUN composer dump-autoload --optimize

# 7. Configura permisos
RUN chmod -R 775 storage bootstrap/cache

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]