FROM php:8.0-apache
RUN apt-get update && \
    apt-get install -y software-properties-common && \
    rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get update
RUN apt-get install mc -y
CMD php dictionary/artisan serve --host=0.0.0.0 --port=8000
