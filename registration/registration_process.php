<?php
require_once('../config/db_start.php');

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $conn = get_db();
    $query = "INSERT INTO user (login, password) VALUES (?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    header('Location: ../login/login.php');
}
