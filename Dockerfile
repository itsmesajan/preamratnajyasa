FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy project files to Apache's root folder
COPY . /var/www/html/

# Expose default port
EXPOSE 80
