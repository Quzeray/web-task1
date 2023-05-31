<?php
require_once('../config/db_start.php');

$conn = get_db();

$query = "SELECT title, description FROM announcement";
$result = $conn->query($query);

$advertisements = array();
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $advertisements[] = $row;
    }
    $result->free_result();
}

mysqli_close($conn);

header('Content-Type: application/json');
echo json_encode($advertisements);
