<?php
require '../../../koneksi.php';

// Mengambil data dari nis dengan fungsi get
$id_aktivitas = $_GET['id_aktivitas'];
$sql = "DELETE FROM aktivitas WHERE id_aktivitas = $id_aktivitas";

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if(mysqli_query($koneksi, $sql)){
    $message = "Data Berhasil Dihapus!";
echo "<script type='text/javascript'>alert('$message');
window.location.href= 'aktivitas.php';
</script>";

    

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($koneksi);
}

// Close connection

?>