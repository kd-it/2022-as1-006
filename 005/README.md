# 問題5

PHPとMariaDBを用いたWebサービスの基本形を構成してください(その2)。

* サービス`frontend`
    * ディレクトリ image にある`Dockerfile`(後述)を構成し、ビルドしたものを使うこと
    * 外部に公開できるようホスト側ポート8080でゲスト側ポート80を繋げ(問題2参照)
* サービス`backend`
    * イメージとして `mariadb` を使う
    * 管理者パスワードはとりあえず`hoge`としておく
        * 環境変数 `MARIADB_ROOT_PASSWORD` で渡せば良い

`image/Dockerfile` については、以下の仕様で作成すること

* ベースイメージは`php:apache`
* パッケージ `mariadb-client` をインストールすること
    * apt-get update/install の組み合わせでしたね
