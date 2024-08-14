# php イメージのベースを指定
FROM php:8.1-fpm

# 必要なPHP拡張モジュールをインストール
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# コンテナ内の作業ディレクトリを設定
WORKDIR /var/www/html

# ソースコードをコンテナにコピー
COPY src/ /var/www/html/

