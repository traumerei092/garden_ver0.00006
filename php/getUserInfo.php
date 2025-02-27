<?php
    header("Access-Control-Allow-Origin: http://localhost:5174");
    header("Content-Type: application/json");
    header("Access-Control-Allow-Headers: Content-Type, X-Requested-With, Access-Control-Allow-Headers, Authorization");
    header("Access-Control-Allow-Credentials: true");

    session_start();

    include 'functions.php';

    error_log('Session ID: ' . session_id());
    error_log('Session Data: ' . print_r($_SESSION, true));

    $pdo = connect_db();

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT name, age, mail, my_shop FROM garden_user WHERE id = :user_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            echo json_encode($user);
        } else {
            echo json_encode(["error" => "User not found"]);
        }
    } else {
        error_log('User not logged in');
        echo json_encode(["error" => "User not logged in"]);
    }
?>
