<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form index
// $username = $_POST['username'];
// $password = $_POST['password'];
@$username = mysqli_escape_string($koneksi, $_POST['username']);
@$password = mysqli_escape_string($koneksi, $_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$index = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND PASSWORD='$password'");
// menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($index);
$data = mysqli_fetch_array($index);

// cek apakah username dan password di temukan pada database
// if($cek > 0){

// 	$data = mysqli_fetch_assoc($index);

// 	// cek jika user index sebagai admin
// 	if($data['level']=="admin"){

// 		// buat session index dan username
// 		$_SESSION['username'] = $username;
// 		$_SESSION['level'] = "admin";
// 		// alihkan ke halaman dashboard admin
// 		header("location:dashboard.php");
	
// 	// cek jika user index sebagai mahasiswa
// 	// }else if($data['level']="mahasiswa"){
// 	// 	// buat session index dan username
// 	// 	$_SESSION['username'] = $username;
// 	// 	$_SESSION['level'] = "mahasiswa";
// 	// 	// alihkan ke halaman dashboard mahasiswa
// 	// 	header("location:halaman_mahasiswa.php");

// 	}else{

// 		// alihkan ke halaman index kembali
// 		header("location:dashboard.php");
// 	}

	
// }else{
// 	header("location:dashboard.php");
// }

if($data) {
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['password'] = $data['password'];

	header('location:dashboard.php');
}else{
	echo "<script>alert('asdadasd');
	document.location = 'index.php';
	</script>";
}


?>