FROM php:8.3-fpm

ENV TZ Asia/Tokyo

RUN apt-get update && \
	apt-get install -y \git unzip libzip-dev libicu-dev libonig-dev && \
	docker-php-ext-install intl pdo_mysql zip bcmath

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app
