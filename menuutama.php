<?php
session_start();
include 'config/data_laporan.php';
?>
<html>
    <head>
        <title>Web Bootstrap</title>
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/style.css">
    </head>
    <body>
        
        <nav style="background: #f5f5f575;" class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
            
            <div class="navbar-header">
                <a class="navbar-brand">PT. SEMEN INDONESIA BETON Tbk.</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a href="#" class="nav-link"><?php echo $_SESSION['username']; ?></a> 
                </li>
                <li class="nav-item"><a href="config/logout.php" class="btn btn-danger">Logout</a> 
                </li>
            </ul>
            </div>
        </nav>
        <!-- <div class="card bg-dark text-white">
            <img src="image/logo1.png" class="card-img" alt="">
            
          </div> -->
          <div class="jumbotron" style="background-image: url('image/logo 2.jpg'); height: 400px;">

          </div>
          <div class="container">
              <a href="tambah_laporan.php" class="btn btn-primary">Tambah Laporan</a>
              <br>
              <br>
        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Grinding</th>
                    <th>Packing</th>
                    <th>Keterangan</th>
                    <th>Kapasitas</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $grinding = $row['grinding'];
                    $packing = $row['packing'];
                    $keterangan = $row['keterangan'];
                    $kapasitas = $row['kapasitas'];
                    $tahun = $row['tahun'];
                ?>
                    <tr>
                        <td><?php echo $grinding; ?></td>
                        <td><?php echo $packing; ?></td>
                        <td><?php echo $keterangan; ?></td>
                        <td><?php echo $kapasitas; ?></td>
                        <td><?php echo $tahun; ?></td>
                        <td>
                            <!-- form hapus -->
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_laporan" value="<?php echo $id; ?>" />
                                <input type="hidden" name="grinding" value="<?php echo $grinding; ?>" />
                                <input type="hidden" name="packing" value="<?php echo $packing; ?>" />
                                <input type="hidden" name="keterangan" value="<?php echo $keterangan; ?>" />
                                <input type="hidden" name="kapasitas" value="<?php echo $kapasitas; ?>" />
                                <input type="hidden" name="tahun" value="<?php echo $tahun; ?>" />
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>

                            <!-- form delete -->
                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_laporan" value="<?php echo $id; ?>" />
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

        <footer>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <p>&copy; Copyright by 18111163_SYARIF MAULANA_TIF RP 18 CID A</p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>