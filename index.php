<?php
require_once('session/session_status.php');
$fileContent = file_get_contents('session/session_content.php');
$title = "Р“Р»Р°РІРЅР°СЏ СЃС‚СЂР°РЅРёС†Р°";
$content = str_replace('%STATUS%', $status, $fileContent);
include("templates/base.php");
