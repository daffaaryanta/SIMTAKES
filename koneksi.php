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
// function tambahuser($data)
// {
//     global $koneksi;

//     $nama = $data['nama'];
//     $username = $data['username'];
//     $password = $data['password'];
//     $id_role = $data['id_role'];
	

//     $sql = "INSERT INTO user( id_user, nama, username, password , id_role) VALUES ('', '$nama','$username', '$password', '$id_role')";

//     mysqli_query($koneksi, $sql);

//     return mysqli_affected_rows($koneksi);
// }

// // Membuat fungsi hapus
// function hapus($nim)
// {
//     global $koneksi;

//     mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = $nim");
//     return mysqli_affected_rows($koneksi);
// }

// // Membuat fungsi ubah
// function ubah($data)
// {
//     global $koneksi;

//     $nim = htmlspecialchars($data['nim']);
//     $nama = htmlspecialchars($data['nama']);
//     $kelas = htmlspecialchars($data['kelas']);
//     $jurusan = $data['jurusan'];
// 	$jk = $data['jk'];
//     $Semester = htmlspecialchars($data['Semester']);
// 	$catatan = htmlspecialchars($data['catatan']);

//     $sql = "UPDATE mahasiswa SET nama = '$nama', kelas = '$kelas', jurusan = '$jurusan', jk = '$jk', Semester = '$Semester', catatan = '$catatan' WHERE nim = $nim";

//     mysqli_query($koneksi, $sql);

//     return mysqli_affected_rows($koneksi);
// }


?>