FROM php:apache
RUN apt-get update
RUN apt-get install -y mariadb-client
RUN docker-php-ext-install pdo pdo_mysql; docker-php-ext-enable pdo pdo_mysql
