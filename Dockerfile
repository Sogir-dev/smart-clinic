FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpq-dev nodejs npm \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && a2enmod rewrite

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN npm ci && npm run build

RUN chown -R www-data:www-data storage bootstrap/cache

RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

EXPOSE 80

CMD sh -c "php artisan migrate --force --seed && php artisan config:cache && php artisan route:cache && apache2-foreground"