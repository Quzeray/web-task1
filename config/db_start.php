<?php
session_start();
function get_db()
{
    static $mysqli;
    if (!$mysqli) {
        $config = include("db_config.php");
        $mysqli = new mysqli($config['db_host'], $config['db_user'], $config['db_pass'], $config['db_name']);
    }
    return $mysqli;
}
