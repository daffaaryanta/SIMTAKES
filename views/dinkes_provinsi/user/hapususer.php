<?php
require '../../../koneksi.php';

// Mengambil data dari nis dengan fungsi get
$id_user = $_GET['id_user'];
$sql = "DELETE FROM user WHERE id_user = $id_user";

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if(mysqli_query($koneksi, $sql)){
    $message = "Data Berhasil Dihapus!";
echo "<script type='text/javascript'>alert('$message');
window.location.href= 'user.php';
</script>";

    

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection

?>