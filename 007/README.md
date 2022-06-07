# 問題7

以下のサービスを構成せよ。このサービス構成は、初歩的な(Apache+)PHP+MySQL(MariaDB)の構成ともなる。

* サービス `frontend`
    * ディレクトリ `php-pinger` のディレクトリの `Dockerfile` を使ってビルドされたイメージを利用
    * ディレクトリ `pinger` のディレクトリをコンテナ内の `/var/www/html` に接続
        * `pinger` 内にある `index.html` ファイルが `/var/www/html/index.html` に見えること
    * コンテナのポート80/tcpを3456にマップ
        * ブラウザにて http://127.0.0.1:3456/ で閲覧可能ということ
* サービス `backend`
    * イメージ `mariadb` を使用すること
    * 必要な値を環境変数で渡すこと
        * 管理者パスワードは `hoge`
        * 事前にデータベース `tasks` を作成すること
        * `tasks` データベースにアクセスできるユーザーとして `owner` パスワードは `fuga` とする
        * 具体的にどの環境変数を使えば良いかは、[イメージのリファレンス](https://hub.docker.com/_/mariadb)を参照して考えること
            * "Environment Variables"の項を参照すればよい
