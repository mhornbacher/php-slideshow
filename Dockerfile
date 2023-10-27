FROM php:8-apache
COPY ./public-html/ /var/www/html/
EXPOSE 80