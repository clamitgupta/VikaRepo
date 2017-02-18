FROM php:5.6.29-apache
COPY src/ /var/www/html
RUN a2enmod rewrite

run -d -e MYSQL_ROOT_PASSWORD=tracking -e MYSQL_DATABASE=tracking -p 3307:3307 --name mysql mysql:latest
Expose 80

