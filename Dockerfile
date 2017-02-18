FROM php:5.6.29-apache
COPY src/ /var/www/html
RUN a2enmod rewrite

RUN --name myDatabase -e MYSQL_ROOT_PASSWORD=tracking -d mysql:tag

Expose 80

