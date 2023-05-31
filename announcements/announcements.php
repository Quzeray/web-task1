<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: ../login/login.php');
    exit();
}

$title = "РЎРїРёСЃРѕРє РѕР±СЉСЏРІР»РµРЅРёР№";
$content = file_get_contents("announcements_content.php");
include("../templates/base.php");
