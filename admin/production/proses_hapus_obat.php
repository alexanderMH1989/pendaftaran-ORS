<?php

include("koneksi.php");

if( isset($_GET['id_obat']) ){

    // ambil id dari query string
    $id = $_GET['id_obat'];

    // buat query hapus
    $sql = "DELETE FROM data_obat WHERE id_obat='$id'";
    $query = mysqli_query($koneksi, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        echo "<script>alert('data berhasil dihapus');
    document.location.href='data_obat.php'</script>\n";

    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>