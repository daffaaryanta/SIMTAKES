<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "simtakes") or die(mysqli_error($koneksi));

// menangkap data yang dikirim dari form index
$username = $_POST['username'];
$password = $_POST['password'];
// @$username = mysqli_escape_string($koneksi, $_POST['username']);
// @$password = mysqli_escape_string($koneksi, $_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$index = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($index);

// $data = mysqli_fetch_array($index);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($index);
	

	// cek jika user index sebagai admin
	if($data['id_role']=="2"){

		// buat session index dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['id_role'] = "2";
		
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Anda login sebagai Operator Dinkes Provinsi!');
		document.location = 'views/dinkes_provinsi/dashboard.php';
		</script>";
		
		// header("location:views/admin/user/user.php");
	
	// cek jika user index sebagai mahasiswa
	}
	else if($data['id_role']=="1"){

		// buat session index dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['id_role'] = "1";
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Anda login sebagai Pimpinan!');
		document.location = 'views/pimpinan/dashboard.php';
		</script>";

	}
	else if($data['id_role']=="3"){

		// buat session index dan username
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['id_role'] = "3";
		// alihkan ke halaman dashboard admin
		echo "<script>alert('Anda login sebagai Operator Dinkes Kabkota!');
		document.location = 'views/dinkes_kabkota/dashboard.php';
		</script>";

	}
	else{

		// alihkan ke halaman index kembali
		header("location:index.php");
	}

	
}else{
	header("location:index.php");
}
?>