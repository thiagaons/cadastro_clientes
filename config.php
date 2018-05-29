<?php
$servername = 'localhost';
$user = "root";
$pass = "";
$db = "thiago_php";
$db_ativo = new PDO('mysql:host='.$servername.';dbname='.$db, $user, $pass);
?>