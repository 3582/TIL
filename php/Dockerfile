FROM php:8.1-fpm

# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 必要なPHP拡張モジュールをインストール
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /var/www/html

# composer installはdocker-compose.ymlのcommandで実行するため、ここでは実行しない

