FROM php:7-cli

RUN apt-get --yes update \
    && apt-get --yes --ignore-missing --no-install-recommends install \
        git \
        unzip
RUN cp /usr/src/php/php.ini-development /usr/local/etc/php/php.ini
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer
