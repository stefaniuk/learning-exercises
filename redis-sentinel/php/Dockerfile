FROM php:5.6-apache

# configure system
RUN apt-get --yes update \
    && apt-get --yes --ignore-missing --no-install-recommends install \
        redis-tools \
        unzip \
        wget

# configure PHP
RUN apt-get --yes --ignore-missing --no-install-recommends install \
        git \
        libxml2-dev \
        zlib1g-dev zip \
    && docker-php-ext-install \
        zip
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer
RUN printf '[Date]\ndate.timezone = Europe/London' > /usr/local/etc/php/conf.d/timezone.ini \
    && cp /usr/src/php/php.ini-development /usr/local/etc/php/php.ini

# install PHP Redis extension
RUN wget https://github.com/phpredis/phpredis/archive/2.2.7.zip \
    && unzip 2.2.7.zip \
    && cd phpredis-2.2.7 \
    && phpize \
    && ./configure \
    && make \
    && make install \
    && cp modules/redis.so /usr/local/lib/php/extensions/no-debug-non-zts-20131226/ \
    && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini

WORKDIR /var/www
