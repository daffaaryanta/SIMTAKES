<?php
require '../../koneksi.php';

if ($id_role == '15') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kota Banjarmasin' ORDER BY namaklinik");
} elseif ($id_role == '3') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Balangan' ORDER BY namaklinik");
} elseif ($id_role == '4') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Banjar' ORDER BY namaklinik");
} elseif ($id_role == '5') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Barito Kuala' ORDER BY namaklinik");
} elseif ($id_role == '6') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Selatan' ORDER BY namaklinik");
} elseif ($id_role == '7') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Tengah' ORDER BY namaklinik");
} elseif ($id_role == '8') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Utara' ORDER BY namaklinik");
} elseif ($id_role == '9') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Kotabaru' ORDER BY namaklinik");
} elseif ($id_role == '10') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tabalong' ORDER BY namaklinik");
} elseif ($id_role == '11') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tanah Bumbu' ORDER BY namaklinik");
} elseif ($id_role == '12') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tanah Laut' ORDER BY namaklinik");
} elseif ($id_role == '13') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tapin' ORDER BY namaklinik");
} elseif ($id_role == '14') {
    $sql = query("SELECT * FROM data_klinik WHERE kabkota = 'Kota Banjarbaru' ORDER BY namaklinik");
}elseif ($id_role == '2') {
    $sql = query("SELECT * FROM data_klinik ORDER BY kabkota");
} else {
    $sql = query("SELECT * FROM data_klinik ORDER BY kabkota");
}
// $sql = query("SELECT * FROM data_klinik ORDER BY kabkota");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Klinik</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Klinik.xls");
	?>
 
	
 
	<table border="1">
    <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kabkota</th>
                                            <th>Kode Klinik</th>
                                            <th>Nama Klinik</th>
                                            <th>Jenis Klinik</th>
                                            <th>Alamat</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($sql as $data) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['kabkota'] ?></td>
                                                <td><?= $data['kodeklinik'] ?></td>
                                                <td><?= $data['namaklinik'] ?></td>
                                                <td><?= $data['jenisklinik'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
	</table>
</body>
</html>