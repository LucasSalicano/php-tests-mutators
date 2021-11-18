FROM phpdockerio/php74-fpm:latest
WORKDIR "/php-tests-mutator"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        php7.4-phpdbg \ 
        php7.4-xdebug; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
