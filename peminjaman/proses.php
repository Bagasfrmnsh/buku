<?php
include '../database.php';
$dosen = new peminjaman();

if (isset($_POST['save'])) {
    $aksi         = $_POST['aksi'];
    $id_anggota   = @$_POST['id_anggota'];
    $nama         = $_POST['nama'];
    $alamat       = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    

    if ($aksi == "create") {
        $dosen->create($nama, $alamat, $jenis_kelamin);
        header("location:koneksi.php");
    } elseif ($aksi == "update") {
        $dosen->update($id_anggota, $nama, $alamat, $jenis_kelamin);
        header("location:koneksi.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id_anggota);
        header("location:koneksi.php");
    }

}