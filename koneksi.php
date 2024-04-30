<?php 
session_start();
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "simtakes") or die(mysqli_error($koneksi));

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
//     exit(); // Terminate script execution after the redirect
// }

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$id_role = $_SESSION['id_role'];

// $nama_view = mysqli_query($koneksi,"SELECT nama from user where username='$username' and password='$password'");

//  // membuat varibale array
//  $rows = [];

//  // mengambil semua data dalam bentuk array
//  while ($row = mysqli_fetch_assoc($nama_view)) {
//      $rows[] = $row;
//  }

//  return $rows;

// $cek = mysqli_num_rows($nama_view);
// if($cek > 0){
//     $data = mysqli_fetch_assoc($nama_view);
//     $_SESSION['nama'] = $nama_view;
// }


// membuat fungsi query dalam bentuk array
function query($query)
{
    // Koneksi database
    global $koneksi;

    $result = mysqli_query($koneksi, $query);

    // membuat varibale array
    $rows = [];

    // mengambil semua data dalam bentuk array
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Membuat fungsi tambah user
function tambahuser($data)
{
    global $koneksi;
    $nama = $_REQUEST['nama'];
    $username = $_REQUEST['username'];
        
        $password = $_REQUEST['password'];
        $id_role = $_REQUEST['id_role'];
        
    $namac = ucwords($nama);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO user ( nama,username, password, id_role) VALUES (
            '$namac','$username','$password','$id_role')";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

// // Membuat fungsi hapus
// function hapus($nim)
// {
//     global $koneksi;

//     mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = $nim");
//     return mysqli_affected_rows($koneksi);
// }

// // Membuat fungsi ubah
function ubahuser($data)
{
    global $koneksi;

        $id_user = $data['id_user'];
        $nama = $data['nama'];
        $username = $data['username'];
        
        $password = $data['password'];
        $id_role = $data['id_role'];
        
        $namac = ucwords($nama);
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE user SET   nama = '$namac', username = '$username', password = '$password' ,id_role = '$id_role' WHERE id_user = '$id_user'";

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

// Membuat fungsi tambah puskesmas
function tambahpuskesmas($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $kodepkm = $_REQUEST['kodepkm'];
    $namapkm = $_REQUEST['namapkm'];
    $statuspkm = $_REQUEST['statuspkm'];
    $kategori = $_REQUEST['kategori'];
    $alamat = $_REQUEST['alamat'];

    $namac = ucwords($namapkm);
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_pkm ( kabkota,kodepkm, namapkm, statuspkm, kategori, alamat) VALUES (
            '$kabkota','$kodepkm','$namac','$statuspkm', '$kategori' , '$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

?>