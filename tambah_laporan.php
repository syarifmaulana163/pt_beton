<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			

			<!-- membuat form -->
			<form action="config/proses_tambahlaporan.php" method="POST" class="col-lg-6">
				<h5>Tambah Laporan</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Grinding</label>
						<input type="text" class="form-control" name="grinding" placeholder="Grinding">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Packing</label>
						<input type="text" class="form-control" name="packing" placeholder="Packing">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Keterangan</label>
						<input type="text" class="form-control" name="keterangan" placeholder="Keterangan">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Kapasitas</label>
						<input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Tahun</label>
						<input type="text" class="form-control" name="tahun" placeholder="Tahun">
					</div>
				</div>
				<!-- end baris 2 pada form -->
				<button type="submit" class="btn btn-primary">Tambah</button>
			</form>
			
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>