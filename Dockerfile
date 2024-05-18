# Dockerfile for PHP service
FROM php:apache AS php


# Copy the application source code into Apache's web directory
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

#----------------------------------------------------------

# Dockerfile for MySQL service
FROM mysql:latest AS mysql

# Set environment variables (optional if you want to set directly in Dockerfile)
ENV MYSQL_DATABASE=webprogramming
ENV MYSQL_USER=sunny
ENV MYSQL_PASSWORD=admin
ENV MYSQL_ALLOW_EMPTY_PASSWORD=1

# Copy initialization files to MySQL's initialization directory
COPY ./db /docker-entrypoint-initdb.d

#----------------------------------------------------------

# Dockerfile for phpMyAdmin service
FROM phpmyadmin/phpmyadmin AS phpmyadmin

# Set environment variables (optional if you want to set directly in Dockerfile)
ENV PMA_HOST=db
ENV PMA_PORT=3306

# Expose port 80
EXPOSE 80
