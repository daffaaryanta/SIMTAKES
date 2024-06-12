<?php
require '../../../koneksi.php';

// Mengambil data dari nis dengan fungsi get
$id_ak = $_GET['id_ak'];
$sql = "DELETE FROM akreditasi WHERE id_ak = $id_ak";

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if(mysqli_query($koneksi, $sql)){
    $message = "Data Berhasil Dihapus!";
echo "<script type='text/javascript'>alert('$message');
window.location.href= 'akreditasi_pmds.php';
</script>";

    

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($koneksi);
}

// Close connection

?>