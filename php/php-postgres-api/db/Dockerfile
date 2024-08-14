# PostgreSQL イメージのベースを指定
FROM postgres:latest

# 初期化スクリプトを追加
COPY db/init.sql /docker-entrypoint-initdb.d/

