FROM ghcr.io/xiaoxuan6/docker-images/php:8.0-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ && \
    composer install --no-dev && \
    chmod +x run.sh && \
    chmod +x bin/sms-bombing

ENV PHONE="" \
    NUM="all" \
    LOOP="0" \
    INTERVALS="0" \
    TIMEOUT="10" \
    LENGTH="128"

ENTRYPOINT ["/var/www/html/run.sh"]
