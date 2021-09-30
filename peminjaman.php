<?php

class peminjaman extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datadosen = mysqli_query($this->koneksi, "select * from anggota");
        // var_dump($datadosen);
        return $datadosen;
    }

    // Menambah Data
    public function create($nama, $alamat, $jenis_kelamin)
    {
        mysqli_query(
            $this->koneksi,
            "insert into anggota values(null,'$nama','$alamat','$jenis_kelamin')"
        );
    }


    // Menampilkan Data Berdasarkan id_anggota
    public function show($id_anggota)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from anggota where id_anggota='$id_anggota'"
        );
        return $datadosen;
    }
    // Menampilkan data berdasarkan id_anggota
    public function edit($id_anggota)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from anggota where id_anggota='$id_anggota'"
        );
        return $datadosen;
    }



    // mengupdate data berdasarkan id_anggota
    public function update($id_anggota,$nama, $alamat, $jenis_kelamin)
    {
        mysqli_query(
            $this->koneksi,
            "update anggota set nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin' where id_anggota='$id_anggota'"
        );
    }


    
    // menghapus data berdasarkan id_anggota
    public function delete($id_anggota)
    {
        mysqli_query($this->koneksi, "delete from anggota where id_anggota='$id_anggota'");
    }
}
?>