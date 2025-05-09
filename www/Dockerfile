FROM php:8.2-apache

# Enable Apache mod_rewrite (needed for login/register POSTs if used)
RUN a2enmod rewrite

# Copy all your site files into the container web root
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
