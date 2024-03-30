FROM php:8.1-fpm-alpine

ENV TZ=Asia/Shanghai

RUN apk --no-cache add tzdata \
  && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
  && echo $TZ > /etc/timezone

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock /var/www/html/
RUN composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ && \
    composer install --no-dev --no-progress

COPY builds/sms-bombing /var/www/html
COPY run.sh /var/www/html
RUN chmod +x run.sh && \
    chmod +x sms-bombing && \
    mv sms-bombing /usr/local/bin/sms-bombing

ENV PHONE="" \
    NUM="all" \
    LOOP=0 \
    INTERVALS=30 \
    TIMEOUT=10 \
    LENGTH=128 \
    STDOUT=false

ENTRYPOINT ["/bin/sh", "/var/www/html/run.sh"]
