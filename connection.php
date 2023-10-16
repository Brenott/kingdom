<?php
session_start();

$con = mysql_connect('localhost','root','root','Kingdom');
if (!$con) {
    die('Error connect to DataBase');
}
?>