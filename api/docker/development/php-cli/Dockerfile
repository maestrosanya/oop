FROM php:7.4-cli

RUN apt-get update && apt-get install -y git

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /app