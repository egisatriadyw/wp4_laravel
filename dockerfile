# Gunakan image resmi PHP dengan Apache
FROM php:8.2.10-apache

# Instal ekstensi PHP yang diperlukan
RUN docker-php-ext-install pdo pdo_mysql

# Aktifkan mod_rewrite untuk Apache
RUN a2enmod rewrite

# Menyalin kode proyek ke dalam container
COPY . /var/www/html

# Set permissions agar web server dapat menulis ke storage dan bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage/ /var/www/html/bootstrap/cache

# Instal dependensi proyek Laravel
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        netcat-traditional && \
    docker-php-ext-configure zip && \
    docker-php-ext-install zip

# Instal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependensi proyek Laravel
RUN composer install --no-scripts

RUN composer dump-autoload --optimize

RUN php artisan key:generate
RUN php artisan storage:link

# Set permissions lagi setelah instalasi composer
RUN chmod -R 775 /var/www/html/storage/ /var/www/html/bootstrap/cache

# Tambahkan langkah untuk menunggu MySQL
CMD ["sh", "-c", "while ! nc -z mysql 3307; do sleep 1; done; php artisan migrate --seed --env=production"]


# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]