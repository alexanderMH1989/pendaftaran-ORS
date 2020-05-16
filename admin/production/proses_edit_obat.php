<?php

include("koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id=$_POST['id_obat'];
    $nama_obat=$_POST['nama_obat'];
    $jenis_obat=$_POST['jenis_obat'];
    $harga_obat=$_POST['harga_obat'];
    

    // buat query update
    $sql = "UPDATE data_obat SET nama_obat='$nama_obat', jenis_obat='$jenis_obat', harga_obat='$harga_obat' WHERE id_obat='$id'";
    $query = mysqli_query($koneksi, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_obat.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>