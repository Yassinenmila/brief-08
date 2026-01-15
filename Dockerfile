FROM php:8.2-apache

# Installer PDO pour MySQL
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Activer mod_rewrite pour Apache
RUN a2enmod rewrite

# Copier tout le projet dans Apache
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html/
