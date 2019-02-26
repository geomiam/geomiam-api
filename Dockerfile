FROM webdevops/php-nginx:alpine-php7

ENV WEB_DOCUMENT_ROOT=/app/public \
    PHP_DATE_TIMEZONE="Europe/Paris" \
    APP_ENV=prod \
    DATABASE_URL=sqlite:///%kernel.project_dir%/var/data.db

WORKDIR /app

COPY . /app

RUN set -x \
    && composer install --no-dev --optimize-autoloader --prefer-dist --no-suggest --no-scripts --no-interaction \
    && composer clear-cache;
