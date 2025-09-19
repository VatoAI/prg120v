# Dockerfile for PHP prosjekt med Apache
FROM php:8.1-apache

# Installer MySQL PHP extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Kopier alle filer til Apache document root
COPY . /var/www/html/

# Sett riktige permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html/

# Eksponer port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]