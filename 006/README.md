# 問題6

このディレクトリにある`docker-compose.yml`において、以下の機能(サービス)を実装せよ

* サービス名 `pinger`
    * イメージ `alpine` を使用
    * コンテナが起動すると、`ping pingee` を実行
* サービス名 `pingee`
    * イメージ `alpine` を使用
    * コンテナが起動すると、 `sleep infinity` を実行(無限に寝てる)

このサービス群が起動すると、pingerはpingeeに向けてping要求を送り続けることになる。
サービス起動(`docker compose up`)すると、アタッチされて出力されるログには延々とpingの結果が出力される。
