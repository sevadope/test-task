FROM php:8.0-fpm

ENV USER_ID=1000

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN apt-get update
RUN apt-get install -y dialog apt-utils

# curl
RUN apt-get install -y libcurl3-dev curl && docker-php-ext-install curl
# database
RUN apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
# custom php.ini
COPY php.ini /usr/local/etc/php/php.ini

# composer
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer
RUN chmod 0755 /usr/bin/composer

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Set up user
#RUN addgroup --gid $GROUP_ID user
RUN adduser --disabled-password --gecos '' --uid $USER_ID --gid 33 user
USER user

# Set up default directory
WORKDIR /var/www/server

EXPOSE 9000



