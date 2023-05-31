<?php
require_once('../config/db_start.php');
$response = array();

if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $conn = get_db();
    $query = "SELECT * FROM user WHERE login = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['login'] = $login;
        $response['exists'] = true;
    } else {
        $response['exists'] = false;
        $response['error'] = 'Р›РѕРіРёРЅ РёР»Рё РїР°СЂРѕР»СЊ РЅРµРІРµСЂРЅС‹.';
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    $response['exists'] = false;
    $response['error'] = 'Р—Р°РїРѕР»РЅРёС‚Рµ Р»РѕРіРёРЅ Рё РїР°СЂРѕР»СЊ';
}
header('Content-Type: application/json');
echo json_encode($response);
