FROM php:8.3-cli-alpine

ENV NEWUSER='dev'

COPY --from=composer:2.0 /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache $PHPIZE_DEPS linux-headers sudo
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
RUN adduser -D -g "${NEWUSER}" $NEWUSER
RUN echo "$NEWUSER ALL=(ALL) NOPASSWD: ALL" > /etc/sudoers.d/$NEWUSER && chmod 0440 /etc/sudoers.d/$NEWUSER

COPY ./docker/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /opt/
