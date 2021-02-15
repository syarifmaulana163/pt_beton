<?php
require_once "koneksi.php";

$grinding= $_POST["grinding"];
$packing= $_POST["packing"];
$keterangan= $_POST["keterangan"];
$kapasitas= $_POST["kapasitas"];
$tahun= $_POST["tahun"];

$q = $database_connection->prepare("INSERT INTO `laporan` (`id`, `grinding`, `packing`, `keterangan`, `kapasitas`,
`tahun`) VALUES (NULL, ?, ?, ?, ?, ?);");
$q->execute([$grinding, $packing, $keterangan, $kapasitas, $tahun]);
header("Location: ../menuutama.php");
?>