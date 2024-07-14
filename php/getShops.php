<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    include 'functions.php';

    $pdo = connect_db();

    try {
        $enumValues = getEnumValues($pdo, 'garden_user', 'my_shop');
        echo json_encode($enumValues);
    } catch (Exception $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
?>
