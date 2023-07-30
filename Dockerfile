FROM ghcr.io/xiaoxuan6/docker-images/php:8.0-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ && \
    composer install --no-dev

ENV PHONE=""
ENV NUM="all"
ENV LOOP="0"
ENV INTERVALS="0"
ENV TIMEOUT="10"
ENV LENGTH="128"

ENTRYPOINT ["/var/www/html/run.sh"]
