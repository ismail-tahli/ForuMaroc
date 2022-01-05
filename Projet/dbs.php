<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$db = new PDO('mysql:host=localhost;dbname=projet;charser=utf8;','root','');
?>