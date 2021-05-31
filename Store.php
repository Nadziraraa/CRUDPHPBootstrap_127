<?php
include './config.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $POST['alamat'];

mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");
header("location:./index.php");

<div class="container data-mahasiswa mt-5">

<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="tambahData">
    Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form method="post" action="store.php" name="form">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahDataLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Mahasiswa" nama="nama" required>
                </div>

                <div class="mb-3">
                    <label for="NIM" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM Mahasiswa" nama="nim" required>
                </div>

                <div class="mb-3">
                    <label for="Alamat" class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat Mahasiswa" nama="Alamat" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>