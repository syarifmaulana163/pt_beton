<?php
require_once "koneksi.php";
$id_laporan= $_POST["id_laporan"];
echo $id_laporan;

$q = $database_connection->prepare("DELETE FROM `laporan` WHERE `laporan`.`id` = ?");
$q->execute([$id_laporan]);
header("Location: ../menuutama.php");
?>