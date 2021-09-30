<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>

<body>
    <fieldset>
        <legend>Input Data Peminjaman Buku</legend>
        <form action="proses.php" method="post">
        <input type="hidden" name="aksi" value="create">
            <table>
                <tr>
                    <td>Nama Peminjam</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>Alamat</th>
                    <td><input type="text" name="alamat" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamain</td>
                    <td><input type="text" name="jenis_kelamin" required></td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>