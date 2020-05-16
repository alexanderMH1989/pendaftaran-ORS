<?php
include 'koneksi.php';

if(isset($_POST['tambah'])){
 
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jurusan=$_POST['jurusan'];
 $semester=$_POST['semester'];
 $jk=$_POST['jk'];
 $tanggal=$_POST['tanggal'];
 $email=$_POST['email'];
 $no_wa=$_POST['no_wa'];

	$sql_t = "SELECT * FROM data_zotero WHERE tanggal='$tanggal'";
	$res_t = mysqli_query($koneksi, $sql_t);

	if (mysqli_num_rows($res_t) >= 60) {
  	  $tanggal_error = header('Location: form_daftar_zotero.php?status=gagal');	
	}else{
	  $query = "INSERT INTO data_zotero (nim, nama, jurusan, semester, gender, tanggal, email, no_wa) VALUE ('$nim', '$nama', '$jurusan', '$semester','$jk','$tanggal','$email','$no_wa')";
			 $hasil = mysqli_query($koneksi, $query);

		    header('Location: form_daftar_zotero.php?status=sukses');
           
           exit();
		} 
} 

?>