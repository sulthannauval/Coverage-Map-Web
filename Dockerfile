FROM php:8.3.20-fpm

RUN apt-get update && \
    apt-get install -y \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        zip \
        unzip \
        nodejs \
        npm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app
COPY composer.json .
RUN composer install --no-scripts

COPY . .

# Install frontend dependencies and build assets
RUN npm install
RUN npm run build

CMD php artisan serve --host=0.0.0.0