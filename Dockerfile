FROM ghcr.io/xiaoxuan6/docker-images/php:8.0-fpm-alpine

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock /var/www/html/
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ && \
    composer install --no-dev --no-progress

COPY . /var/www/html
RUN chmod +x run.sh && \
    chmod +x bin/sms-bombing

ENV PHONE="" \
    NUM="all" \
    LOOP="0" \
    INTERVALS="0" \
    TIMEOUT="10" \
    LENGTH="128" \
    STDOUT=false

ENTRYPOINT ["/bin/sh", "/var/www/html/run.sh"]
