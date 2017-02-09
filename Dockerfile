FROM php:5.6.29-apache
COPY src/ /var/www/html
RUN a2enmod rewrite
Expose 80

