<?php
require_once "koneksi.php";
$id_laporan= $_POST["id_laporan"];
$grinding= $_POST["grinding"];
$packing= $_POST["packing"];
$keterangan= $_POST["keterangan"];
$kapasitas= $_POST["kapasitas"];
$tahun= $_POST["tahun"];

$q = $database_connection->prepare("UPDATE `laporan` SET `grinding` = ?, 
`packing` = ?, `keterangan` = ?, `kapasitas` = ?, `tahun` = ? WHERE `laporan`.`id` = ?");
$q->execute([$grinding, $packing, $keterangan, $kapasitas, $tahun, $id_laporan]);
header("Location: ../menuutama.php");
?>