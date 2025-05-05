FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y git unzip libzip-dev libpng-dev && docker-php-ext-install pdo_mysql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock ./

RUN composer install --no-autoloader --no-scripts --ignore-platform-reqs

COPY . .

RUN composer dump-autoload --optimize
RUN chmod -R 775 storage bootstrap/cache

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
