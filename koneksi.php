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

// // Membuat fungsi ubah puskesmas
function ubahpuskesmas($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $kodepkm = $data['kodepkm'];
        $namapkm = $data['namapkm'];
        $statuspkm = $data['statuspkm'];
        $kategori = $data['kategori'];
        $alamat = $data['alamat'];

        $namac = ucwords($namapkm);
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_pkm SET   idx = '$idx', kabkota = '$kabkota', kodepkm = '$kodepkm' ,namapkm = '$namac' , statuspkm = '$statuspkm', kategori = '$kategori', alamat = '$alamatc' WHERE idx = '$idx'";
        // $sql = "UPDATE data_pkm SET  ( idx, kabkota,kodepkm, namapkm, statuspkm, kategori, alamat) VALUES (
        //     '$idx','$kabkota','$kodepkm','$namac','$statuspkm', '$kategori' , '$alamatc' )";

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

// Membuat fungsi tambah klinik
function tambahklinik($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $kodeklinik = $_REQUEST['kodeklinik'];
    $namaklinik = $_REQUEST['namaklinik'];
    $jenisklinik = $_REQUEST['jenisklinik'];
    $alamat = $_REQUEST['alamat'];

    $namac = ucwords($namaklinik);
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_klinik ( kabkota, kodeklinik, namaklinik, jenisklinik, alamat) VALUES (
            '$kabkota','$kodeklinik','$namac','$jenisklinik', '$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

// Membuat fungsi ubah klinik
function ubahklinik($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $kodeklinik = $data['kodeklinik'];
        $namaklinik = $data['namaklinik'];
        $jenisklinik = $data['jenisklinik'];
        $alamat = $data['alamat'];

        $namac = ucwords($namaklinik);
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_klinik SET   idx = '$idx', kabkota = '$kabkota', kodeklinik = '$kodeklinik' ,namaklinik = '$namac' , jenisklinik = '$jenisklinik', alamat = '$alamatc' WHERE idx = '$idx'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

// Membuat fungsi tambah labkes
function tambahlabkes($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $kodelabkes = $_REQUEST['kodelabkes'];
    $namalabkes = $_REQUEST['namalabkes'];
    $jenislabkes = $_REQUEST['jenislabkes'];
    $alamat = $_REQUEST['alamat'];

    $namac = ucwords($namalabkes);
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_labkes ( kabkota, kodelabkes, namalabkes, jenislabkes, alamat) VALUES (
            '$kabkota','$kodelabkes','$namac','$jenislabkes', '$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

// Membuat fungsi ubah labkes
function ubahlabkes($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $kodelabkes = $data['kodelabkes'];
        $namalabkes = $data['namalabkes'];
        $jenislabkes = $data['jenislabkes'];
        $alamat = $data['alamat'];

        $namac = ucwords($namalabkes);
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_labkes SET   idx = '$idx', kabkota = '$kabkota', kodelabkes = '$kodelabkes' ,namalabkes = '$namac' , jenislabkes = '$jenislabkes', alamat = '$alamatc' WHERE idx = '$idx'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

// Membuat fungsi tambah dokter umum
function tambahpmdu($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $kodepmdrumum = $_REQUEST['kodepmdrumum'];
    $namapmdrumum = $_REQUEST['namapmdrumum'];
    $alamat = $_REQUEST['alamat'];

    
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_pmdrumum ( kabkota, kodepmdrumum, namapmdrumum, alamat) VALUES (
            '$kabkota','$kodepmdrumum','$namapmdrumum','$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

// Membuat fungsi ubah dokter umum
function ubahpmdu($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $kodepmdrumum = $data['kodepmdrumum'];
        $namapmdrumum = $data['namapmdrumum'];
        $alamat = $data['alamat'];

        
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_pmdrumum SET   idx = '$idx', kabkota = '$kabkota', kodepmdrumum = '$kodepmdrumum' ,namapmdrumum = '$namapmdrumum' , alamat = '$alamatc' WHERE idx = '$idx'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

// Membuat fungsi tambah dokter umum
function tambahpmds($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $kodepmdrsp = $_REQUEST['kodepmdrsp'];
    $namapmdrsp = $_REQUEST['namapmdrsp'];
    $alamat = $_REQUEST['alamat'];

    
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_pmdrsp ( kabkota, kodepmdrsp, namapmdrsp, alamat) VALUES (
            '$kabkota','$kodepmdrsp','$namapmdrsp','$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

// Membuat fungsi ubah dokter umum
function ubahpmds($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $kodepmdrsp = $data['kodepmdrsp'];
        $namapmdrsp = $data['namapmdrsp'];
        $alamat = $data['alamat'];

        
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_pmdrsp SET   idx = '$idx', kabkota = '$kabkota', kodepmdrsp = '$kodepmdrsp' ,namapmdrsp = '$namapmdrsp' , alamat = '$alamatc' WHERE idx = '$idx'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

function tambahtransfusi($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $kodeutd = $_REQUEST['kodeutd'];
    $namautd = $_REQUEST['namautd'];
    $jenisutd = $_REQUEST['jenisutd'];
    $alamat = $_REQUEST['alamat'];

    $namac = ucwords($namautd);
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_utd ( kabkota, kodeutd, namautd, jenisutd, alamat) VALUES (
            '$kabkota','$kodeutd','$namac', '$jenisutd', '$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

// Membuat fungsi ubah dokter umum
function ubahtransfusi($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $kodeutd = $data['kodeutd'];
        $namautd = $data['namautd'];
        $jenisutd = $data['jenisutd'];
        $alamat = $data['alamat'];

        
        $namac = ucwords($namautd);
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_utd SET   idx = '$idx', kabkota = '$kabkota', kodeutd = '$kodeutd' ,namautd = '$namac' , jenisutd = '$jenisutd', alamat = '$alamatc' WHERE idx = '$idx'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

function tambahrumah($data)
{
    global $koneksi;
    $kabkota = $_REQUEST['kabkota'];
    $koderumah = $_REQUEST['koderumah'];
    $namarumah = $_REQUEST['namarumah'];
    $kategorirumah = $_REQUEST['kategorirumah'];
    $alamat = $_REQUEST['alamat'];

    $namac = ucwords($namarumah);
    $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO data_rumahsakit ( kabkota, koderumah, namarumah, kategorirumah, alamat) VALUES (
            '$kabkota','$koderumah','$namac','$kategorirumah', '$alamatc' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

function ubahrumah($data)
{
    global $koneksi;

        $idx = $data['idx'];
        $kabkota = $data['kabkota'];
        $koderumah = $data['koderumah'];
        $namarumah = $data['namarumah'];
        $kategorirumah = $data['kategorirumah'];
        $alamat = $data['alamat'];

        
        $namac = ucwords($namarumah);
        $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE data_rumahsakit SET   idx = '$idx', kabkota = '$kabkota', koderumah = '$koderumah' ,namarumah = '$namac' , kategorirumah = '$kategorirumah', alamat = '$alamatc' WHERE idx = '$idx'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

function tambahakreditasi($data)
{
    global $koneksi;
    $id_kategori = $_REQUEST['id_kategori'];
    $kode = $_REQUEST['kode'];
    $nama = $_REQUEST['nama'];
    $tahun = $_REQUEST['tahun'];
    $jenis_akreditasi = $_REQUEST['jenis_akreditasi'];
    // $alamat = $_REQUEST['alamat'];

    $namac = ucwords($nama);
    // $alamatc = ucwords($alamat);
        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO akreditasi ( id_kategori, kode, nama, tahun, jenis_akreditasi) VALUES (
            '$id_kategori','$kode','$namac','$tahun', '$jenis_akreditasi' )";
    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

function ubahakreditasi($data)
{
    global $koneksi;

        $id_ak = $data['id_ak'];
        $id_kategori = $data['id_kategori'];
        $kode = $data['kode'];
        $nama = $data['nama'];
        $jenis_akreditasi = $data['jenis_akreditasi'];
        $tahun = $data['tahun'];

        
        // $namac = ucwords($namautd);
        // $alamatc = ucwords($alamat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE akreditasi SET   id_ak = '$id_ak', id_kategori = '$id_kategori', kode = '$kode' ,nama = '$nama' , jenis_akreditasi = '$jenis_akreditasi', tahun = '$tahun' WHERE id_ak = '$id_ak'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}
function tambahabsen($data)
{
    global $koneksi;
    $id_aktivitas = $_REQUEST['id_aktivitas'];
    $nama = $_REQUEST['nama'];
    $jabatan = $_REQUEST['jabatan'];
    $instansi = $_REQUEST['instansi'];
    $hp = $_REQUEST['hp'];
    $alamat = $_REQUEST['alamat'];
    $namac = ucwords($nama);
    $jabatanc = ucwords($jabatan);
    $alamatc = ucwords($alamat);
    if ($_FILES["surat"]["error"] === 4) {
        echo "<script>
                 alert('Data gagal ditambahkan!');
             </script>";
    }
    else {
        $fileName = $_FILES["surat"]["name"];
        $fileSize = $_FILES["surat"]["size"];
        $tmpName = $_FILES["surat"]["tmp_name"];

        $validImageExtension = ['pdf', 'doc', 'docx'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo "<script>
                 alert('Ekstensi foto harus pdf atau word!');
             </script>";
        }
        elseif ($fileSize > 10000000) {
            echo "<script>
                 alert('Ukuran file terlalu besar! Maksimal 10MB');
             </script>";
        }
        else {
            $a = uniqid();
            $newImagename = $a.'.'.$imageExtension;

            move_uploaded_file($tmpName,'../../../file/' . $newImagename);
            $query = "INSERT INTO absen VALUES ('','$id_aktivitas', '$namac', '$jabatanc', '$instansi', '$hp', '$alamatc', '$newImagename')";
            mysqli_query($koneksi, $query);
            echo '<script>
                var currString =';
                echo $id_aktivitas;
                echo ';
                        alert("Data berhasil ditambahkan!");
                        window.location.href= "aktivitas_absen.php?id_aktivitas=" + currString;
                    </script>';
        }
    }
        // We are going to insert the data into our sampleDB table
        // $sql = "INSERT INTO absen ( id_aktivitas, nama, jabatan, instansi, hp, alamat) VALUES (
        //     '$id_aktivitas', '$namac','$jabatanc','$instansi', '$hp', '$alamatc' )";
    // mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
        
}

function ubahabsen($data)
{
    global $koneksi;
    $id_aktivitas = $data['id_aktivitas'];
        $id_absen = $data['id_absen'];
        $nama = $data['nama'];
        $jabatan = $_REQUEST['jabatan'];
    $instansi = $_REQUEST['instansi'];
    $hp = $_REQUEST['hp'];
    $alamat = $_REQUEST['alamat'];

    $namac = ucwords($nama);
    $jabatanc = ucwords($jabatan);
    $alamatc = ucwords($alamat);

    if ($_FILES["surat"]["error"] === 4) {
        $sql = "UPDATE absen SET   id_absen = '$id_absen', nama = '$namac', jabatan = '$jabatanc' ,instansi = '$instansi' , hp = '$hp', alamat = '$alamatc' WHERE id_absen = '$id_absen'";
        

        mysqli_query($koneksi, $sql);
        echo '<script>
        var currString =';
        echo $id_aktivitas;
        echo ';
                alert("Data berhasil ditambahkan tanpa perubahan surat!");
                window.location.href= "aktivitas_absen.php?id_aktivitas=" + currString;
            </script>';

    }
    else {
        $fileName = $_FILES["surat"]["name"];
        $fileSize = $_FILES["surat"]["size"];
        $tmpName = $_FILES["surat"]["tmp_name"];

        $validImageExtension = ['pdf', 'doc', 'docx'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if(!in_array($imageExtension, $validImageExtension)){
            echo "<script>
                 alert('Ekstensi foto harus pdf atau word!');
             </script>";
        }
        elseif ($fileSize > 10000000) {
            echo "<script>
                 alert('Ukuran file terlalu besar! Maksimal 10MB');
             </script>";
        }
        else {
            $a = uniqid();
            $newImagename = $a.'.'.$imageExtension;

            move_uploaded_file($tmpName,'../../../file/' . $newImagename);
            $query = "UPDATE absen SET   id_absen = '$id_absen', nama = '$namac', jabatan = '$jabatanc' ,instansi = '$instansi' , hp = '$hp', alamat = '$alamatc', surat = '$newImagename' WHERE id_absen = '$id_absen'";
            mysqli_query($koneksi, $query);
            echo '<script>
                var currString =';
                echo $id_aktivitas;
                echo ';
                        alert("Data berhasil ditambahkan!");
                        window.location.href= "aktivitas_absen.php?id_aktivitas=" + currString;
                    </script>';
        }
    }
        
        // We are going to insert the data into our sampleDB table
        

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

function ubahaktivitas($data)
{
    global $koneksi;

        $id_aktivitas = $data['id_aktivitas'];
        // $dokumentasi = $data['dokumentasi'];
        $nama = $data['nama'];
        $tempat = $data['tempat'];
        $waktu = $data['waktu'];
        $notulen = $data['notulen'];
        

        
        $namac = ucwords($nama);
        $tempatc = ucwords($tempat);
        
        // We are going to insert the data into our sampleDB table
        $sql = "UPDATE aktivitas SET   id_aktivitas = '$id_aktivitas',  nama = '$namac' ,tempat = '$tempatc' , waktu = '$waktu', notulen = '$notulen' WHERE id_aktivitas = '$id_aktivitas'";
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}

function ubahpassword($data)
{
    global $koneksi;
     
        $id_user = $data['id_user'];
        $passwordlama = $data['passwordlama'];
        $passwordbaru = $data['passwordbaru'];
        $passwordbaru2 = $data['passwordbaru2'];

        $aktivitas = mysqli_query($koneksi,"SELECT * FROM user WHERE password = '$passwordlama'");
    $result = mysqli_fetch_assoc($aktivitas);
    $resultstring = $result['password'];
        
        if ($passwordlama == $resultstring ) {
            if ($passwordbaru == $passwordbaru2) {
                $sql = "UPDATE user SET   id_user = '$id_user', password = '$passwordbaru' WHERE id_user = '$id_user'";
            }
            else {
                echo "<script>
                alert('Password baru tidak sama!');
                document.location.href = 'ganti_password.php';
            </script>";
            }
        }
        else {
            echo "<script>
                alert('Password lama salah!');
                document.location.href = 'ganti_password.php';
            </script>";
        }
        // We are going to insert the data into our sampleDB table
        
        

        mysqli_query($koneksi, $sql);

        return mysqli_affected_rows($koneksi);

        mysqli_close($koneksi);
}
?>