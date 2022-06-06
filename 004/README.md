# 問題4

PHPとMariaDBを用いたWebサービスの基本形を構成してください。

* サービス`frontend`
    * イメージとして `php:apache` を使う
    * 外部に公開できるようホスト側ポート8080でゲスト側ポート80を繋げ(問題2参照)
* サービス`backend`
    * イメージとして `mariadb` を使う
    * 管理者パスワードはとりあえず`hoge`としておく
        * 環境変数 `MARIADB_ROOT_PASSWORD` で渡せば良い

