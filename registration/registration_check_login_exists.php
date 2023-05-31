<?php
require_once('../config/db_start.php');

if (isset($_POST['login'])) {
    $login = $_POST['login'];

    $conn = get_db();
    $query = "SELECT * FROM user WHERE login = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    $response = array();
    if (mysqli_num_rows($result) > 0) {
        $response['exists'] = true;
    } else {
        $response['exists'] = false;
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header('Content-Type: application/json');
    echo json_encode($response);
}
