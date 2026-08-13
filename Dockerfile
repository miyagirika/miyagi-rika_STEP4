FROM php:8.4.22-apache

#http://localhost:8080/
COPY src/ /var/www/html/

#http://localhost:8080/practice.php
COPY src/practice.php/var/www/html/

#http://localhost:8080/form.php
COPY src/form.php/var/www/html/
