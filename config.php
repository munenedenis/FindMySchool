<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pwd = '';

$database = 'planb';
$table = 'f1selection';
$db_tb_atr_name="Total";

if (!mysql_connect($db_host, $db_user, $db_pwd))
    die("Can't connect to database");

if (!mysql_select_db($database))
    die("Can't select database");
?>