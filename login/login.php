<?php
session_start();
if (isset($_SESSION['login'])) {
    header('Location: ../index.php');
    exit();
}

$title = "РђРІС‚РѕСЂРёР·Р°С†РёСЏ";
$content = file_get_contents("login_content.php");
include("../templates/base.php");
