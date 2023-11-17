FROM php:8.2-apache

RUN apt-get update && apt-get install --no-install-recommends -y wget libzip-dev
RUN apt-get install -qqy zip curl unzip mc sudo less
    
# Install composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN docker-php-ext-install zip

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

RUN a2enmod rewrite

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/bin/wp-cli.phar
COPY ./docker/wp-su.sh /usr/bin/wp
RUN chmod +x /usr/bin/wp

