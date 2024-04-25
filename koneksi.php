<?php 
// Koneksi Database
$koneksi = mysqli_connect("localhost", "root", "", "simtakes") or die(mysqli_error($koneksi));

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

// Membuat fungsi tambah
function tambahuser($data)
{
    global $koneksi;

    $username = $_REQUEST['username'];
        $nama = $_REQUEST['nama'];
        $password = $_REQUEST['password'];
        $id_role = $_REQUEST['id_role'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO user (username, nama, password, id_role) VALUES ('$username',
            '$nama','$password','$id_role')";
mysqli_query($koneksi, $sql);

return mysqli_affected_rows($koneksi);
        // Check if the query is successful
        // if(mysqli_query($koneksi, $sql)){
        //     $message = "Data Berhasil Ditambah!";
        // echo "<script type='text/javascript'>alert('$message');
        // window.location.href= 'user.php';
        // </script>";

            
        
            
        // } else{
        //     echo "ERROR: Hush! Sorry $sql. "
        //         . mysqli_error($conn);
        // }
        
        // // Close connection
        // mysqli_close($conn);
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
        $username = $data['username'];
        $nama = $data['nama'];
        $password = $data['password'];
        $id_role = $data['id_role'];
        

        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE user SET username = '$username', nama = '$nama', password = '$password' ,id_role = '$id_role'";

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}


?>