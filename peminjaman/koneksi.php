<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Index.php</title>
</head>

<body>
<center>
        <center><h2>| Data Peminjaman Buku |</h2></center>
            <a href="create.php">Tambah Peminjaman</a>
        <br></br>
        <table border="1" class"table">
            <tr align="center">
            <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis_Kelamin</th>
                <th colspan="5">Aksi</th>
            </tr>
            <?php
include '../database.php';
$dosen = new peminjaman();
$no = 1;
// var_dump($dosen->index());
foreach ($dosen->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>

                    <td>
                        <a href="show.php?id=<?php echo $data['id_anggota']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id_anggota']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="proses.php" method="post">
                            <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
                            <input type="hidden" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </center>
    </div>
</body>
</html>