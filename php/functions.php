<?php
    // DB接続関数
    function connect_db() {
        $dsn = 'mysql:host=localhost;dbname=gs_d15_10;charset=utf8';
        $user = 'root';
        $password = '';
        try {
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
    }

    // ENUM値を取得する関数
    function getEnumValues($pdo, $table, $field) {
        $query = $pdo->prepare("SHOW COLUMNS FROM `$table` LIKE '$field'");
        $query->execute();
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $type = $row['Type'];
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enumValues = explode(',', $matches[1]);
        $enumValues = array_map(function($value) {
            return trim($value, "'");
        }, $enumValues);
        return $enumValues;
    }

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
