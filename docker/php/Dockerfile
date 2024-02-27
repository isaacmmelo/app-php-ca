ARG PHP_VERSION=""
FROM php:${PHP_VERSION}

RUN docker-php-ext-install mysqli
RUN docker-php -S localhost:8000 index.php