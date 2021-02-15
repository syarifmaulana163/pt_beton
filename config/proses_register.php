<?php
require_once "koneksi.php";

$username= $_POST["username"];
$password= $_POST["password"];

$q = $database_connection->prepare("INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, ?, SHA1(?));");
$q->execute([$username,$password]);
header("Location: ../login.php");
?>