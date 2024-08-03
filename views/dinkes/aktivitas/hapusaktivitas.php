<?php
require '../../../koneksi.php';

// Mengambil data dari nis dengan fungsi get
$id_aktivitas = json_decode($_GET['id_aktivitas']);

$query = mysqli_query($koneksi, "SELECT dokumentasi FROM aktivitas WHERE id_aktivitas = $id_aktivitas");
$result = mysqli_fetch_assoc($query);
$resultstring = $result['dokumentasi'];


if (file_exists($resultstring)) {

    // last resort setting
    // chmod($oldPicture, 0777);
    chmod($resultstring, 0777);
        unlink($resultstring);
        echo 'Deleted old image';
    } 
    

unlink('../../../img/'.$resultstring);
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