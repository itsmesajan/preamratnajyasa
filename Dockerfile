# Use an official PHP image from Docker Hub
FROM php:8.1-apache

# Copy all files to the container's web root
COPY . /var/www/html/

# Give permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
