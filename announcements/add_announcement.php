<?php
require_once('../config/db_start.php');
$response = array();
if (isset($_POST['title']) && isset($_POST['description'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];

  $conn = get_db();
  $query = "INSERT INTO announcement (title, description) VALUES (?, ?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ss", $title, $description);

  if ($stmt->execute()) {
    $response['success'] = true;
    $response['message'] = 'РџСЂРѕРёР·РѕС€Р»Рѕ РґРѕР±Р°РІР»РµРЅРёРµ';
  } else {
    $response['success'] = false;
    $response['message'] = 'РћС€РёР±РєР° Р±Р°Р·С‹ РґР°РЅРЅС‹С…: ' . $stmt->error;
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
} else {
  $response['success'] = false;
  $response['message'] = 'Р—Р°РіРѕР»РѕРІРѕРє Рё РѕРїРёСЃР°РЅРёРµ РЅРµ СѓРєР°Р·Р°РЅС‹';
}

header('Content-Type: application/json');
echo json_encode($response);
