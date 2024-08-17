<?php
require '../../../koneksi.php';

// Mengambil data dari nis dengan fungsi get
$id_absen = $_GET['id_absen'];
// $id_aktivitasa = $_POST['id'];
$query = mysqli_query($koneksi, "SELECT surat FROM absen WHERE id_absen = $id_absen");
$result = mysqli_fetch_assoc($query);
$resultstring = $result['surat'];
if (file_exists($resultstring)) {

    // last resort setting
    // chmod($oldPicture, 0777);
    chmod($resultstring, 0777);
        unlink($resultstring);
        echo 'Deleted old file';
    } 
    

unlink('../../../file/'.$resultstring);
$sql = "DELETE FROM absen WHERE id_absen = $id_absen";

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if(mysqli_query($koneksi, $sql)){
    

    echo '<script>
    var currString =';
    echo $_SESSION['id_aktivitas'];
    echo ';
            alert("Data berhasil dihapus!");
            window.location.href= "absen.php?id_aktivitas=" + currString;
        </script>';
                
                //  header('Location: aktivitas_absen.php?id_aktivitas='.$_SESSION['id_aktivitas']);
                //  echo "<script type='text/javascript'>alert('$message');</script>";


    

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($koneksi);
}

// Close connection

?>