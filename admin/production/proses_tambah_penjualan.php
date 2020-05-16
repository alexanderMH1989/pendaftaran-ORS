<?php
include 'koneksi.php';
if(isset($_POST['tambah'])){
    $kode = $_POST['id_penjualan'];
    $tanggal=$_POST['tanggal_penjualan'];
    $nama=$_POST['nama_obat'];
    $harga=$_POST['harga_obat'];
    $jumlah=$_POST['jumlah'];
    $total=$_POST['total_harga'];


    $sql = "INSERT INTO data_penjualan VALUES ('$kode','$tanggal',$nama', '$jenis','$harga','$jumlah','$total')";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: form_penjualan.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: form_penjualan.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>