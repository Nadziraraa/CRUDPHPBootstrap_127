<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="contrainer">
            <a class="navbar-brand" href="#">Data Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-config>
                <spam class="navbar-toggler-icon"></spam>
            </button>
            <div class = "collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="create.php">Tambah Mahasiswa</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>                
    </nav>
        <div class="contrainer data-mahasiswa mt-5">
            <table class="table table-striped">
                <thread>
                    <tr>
                        <th scope="col">No. </th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thread>   
            <tbody>
                 <?php
                 include 'config.php';
                 $no = 1;
                 $mahasiswa = mysqli_querry($koneksi, "select * from mahasiswa");
                 while ($data = mysqli_fetch_array($mahasiswa)) {
                 ?>

                    <tr>
                        <td><?php echo  $no++; ?></td>

                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>

                            <td>
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class ="btn btn-warning btn-sm text-white">EDIT</a>
                                <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Takin Akan Menghapus Data Mahasiswa ini?')">HAPUS</a>
                            </td>  
                    </tr>
                 <?php>                    
                 }
                 ?>
            </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf">               
</body>
</html>