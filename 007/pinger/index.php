<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MariaDB 疎通テスト</title>
</head>
<?php
    $dsn = 'mysql:dbname=tasks;host=backend';
    $user = 'owner';
    $pass = 'fuga';
?>
<body>
    backendに接続中…
    <?php
        $result = "";
        try {
            ini_set('mysqlnd.net_read_timeout', 2);
            $conn = new PDO($dsn,$user,$pass);
            if($conn != null) {
                $result = "OK";
            }
        } catch(PDOException) {
            $result = "NG";
        }
        echo $result;
    ?>
</body>
</html>
