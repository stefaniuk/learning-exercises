FROM php:5.6-apache

# configure system
RUN apt-get --yes update \
    && apt-get --yes --ignore-missing --no-install-recommends install \
        unzip \
        vim

# configure PHP
RUN apt-get --yes --ignore-missing --no-install-recommends install \
        git \
        libpq-dev \
        postgresql-client \
        zip \
        zlib1g-dev \
    && docker-php-ext-install \
        pdo \
        pdo_pgsql \
        pgsql \
        zip
RUN cp /usr/src/php/php.ini-development /usr/local/etc/php/php.ini \
    && sed -i "s/display_errors = On/display_errors = Off/g" /usr/local/etc/php/php.ini \
    && sed -i "s/;always_populate_raw_post_data/always_populate_raw_post_data/g" /usr/local/etc/php/php.ini \
    && printf '[Date]\ndate.timezone = Europe/London' > /usr/local/etc/php/conf.d/timezone.ini
RUN pecl install xdebug
COPY assets/usr/local/etc/php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# configure Apache HTTP Server
RUN a2enmod rewrite ssl \
    && sed -i "s!/var/www/html!/var/www/public!g" /etc/apache2/apache2.conf \
    && echo "AllowEncodedSlashes On" >> /etc/apache2/apache2.conf \
    && mv /var/www/html /var/www/public
COPY assets/etc/apache2/sites-enabled/000-default.conf /etc/apache2/sites-enabled/000-default.conf

# generate SSL certificate
RUN openssl req -new -x509 -nodes -newkey rsa:4096 -days 3652 \
        -subj "/O=Apigility/OU=Apigility/CN=Apigility" \
        -keyout /etc/ssl/apigility.key \
        -out /etc/ssl/apigility.crt \
    && cat /etc/ssl/apigility.key /etc/ssl/apigility.crt > /etc/ssl/apigility.pem

RUN groupmod -g 1000 www-data
RUN usermod -u 1000 www-data

WORKDIR /var/www
EXPOSE 8080 8443
