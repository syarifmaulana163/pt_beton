<?php
require_once 'koneksi.php';

try{
$sql = 'SELECT * FROM `laporan` ORDER BY `grinding` ASC';
$q = $database_connection -> query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

?>