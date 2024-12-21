FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install dependencies
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Set the working directory
WORKDIR /var/www/html

# Copy project files
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html
