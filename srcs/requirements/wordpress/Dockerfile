FROM alpine:3.18

#ARG WP_PHP_USER
#ARG WP_PHP_GROUP
#
#ENV WP_PHP_USER=$WP_PHP_USER
#ENV WP_PHP_GROUP=$WP_PHP_GROUP

RUN apk update && apk upgrade && \
    apk add --no-cache \
    wget \
    tar \
    mariadb-client \
    redis \
    curl \
    php81 \
	php81-mysqli \
	php81-fpm \
    php81-fpm \
    php81-bcmath \
    php81-bz2 \
    php81-calendar \
    php81-cgi \
    php81-ctype \
    php81-curl \
    php81-dom \
    php81-exif \
    php81-fileinfo \
    php81-gd \
    php81-iconv \
    php81-imap \
    php81-intl \
    php81-json \
    php81-mbstring \
    php81-opcache \
    php81-openssl \
    php81-pcntl \
    php81-pdo \
    php81-pdo_mysql \
    php81-pdo_pgsql \
    php81-pdo_sqlite \
    php81-phar \
    php81-posix \
    php81-redis \
    php81-session \
    php81-simplexml \
    php81-soap \
    php81-sockets \
    php81-sodium \
    php81-sqlite3 \
    php81-xml \
    php81-xmlreader \
    php81-xmlwriter \
    php81-xsl \
    php81-zip \
    gettext

RUN adduser -S php-fpm-fbardeau && addgroup -S php-fpm-fbardeau

COPY ./conf/* ./

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

RUN chmod 777 init.sh

ENTRYPOINT ["sh", "init.sh"]

CMD ["php-fpm81", "-F"]

EXPOSE $WP_PORT
