FROM php:8.2-cli

WORKDIR /var/www/html

# 1) Instala extensiones + netcat para el wait-loop
RUN apt-get update && apt-get install -y \
      git unzip libzip-dev libpng-dev netcat-openbsd \
    && docker-php-ext-install pdo_mysql zip

# 2) Trae Composer oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 3) Copia composer.json antes para cache de build
COPY composer.json composer.lock ./

# 4) Copia entrypoint y dale permiso
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# 5) Copia el resto de tu código
COPY . .

# 6) Ajusta permisos de storage/cache
RUN chmod -R 775 storage bootstrap/cache

# 7) Define ENTRYPOINT y CMD
ENTRYPOINT ["entrypoint.sh"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
