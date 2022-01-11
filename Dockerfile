FROM php:8.1.1-apache AS speedtest

RUN apt-get update && apt-get install -y libfreetype6-dev=2.10.4* libjpeg62-turbo-dev=1:2.0.6-4* libpng-dev=1.6.37-3* \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/* \
        && docker-php-ext-install -j$(nproc) iconv \
        && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
        && docker-php-ext-install -j$(nproc) gd

RUN mkdir -p /speedtest/

COPY backend/ /speedtest/backend

COPY results/*.php /speedtest/results/
COPY results/*.ttf /speedtest/results/

COPY frontend/*.js /speedtest/
COPY frontend/favicon.ico /speedtest/

COPY docker/servers.json /servers.json

COPY docker/*.php /speedtest/
COPY docker/entrypoint.sh /

CMD ["bash", "/entrypoint.sh"]
