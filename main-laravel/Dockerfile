FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    curl \
    git \
    libpq-dev \
    libzip-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install project dependencies
RUN composer install --no-dev --optimize-autoloader 2>&1 || true

# Expose port
EXPOSE 80

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
