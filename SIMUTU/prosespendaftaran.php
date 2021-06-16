<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $password = $_POST['password'];

	// buat query
  $query = pg_query("INSERT INTO calonsiswa (nama, email, username, nomor telepon, password) VALUEs ('$name', '$email', '$name', '$number', '$password')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
