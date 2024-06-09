<?php

require_once '../../vendor/autoload.php';
include '../../koneksi.php';

if ($id_role == 3) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Balangan'");
} elseif ($id_role == 4) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Banjar'");
} elseif ($id_role == 5) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Barito Kuala'");
} elseif ($id_role == 6) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
} elseif ($id_role == 7) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
} elseif ($id_role == 8) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
} elseif ($id_role == 9) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Kotabaru'");
} elseif ($id_role == 10) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tabalong'");
} elseif ($id_role == 11) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tanah Bumbu'");
} elseif ($id_role == 12) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tanah Laut'");
} elseif ($id_role == 13) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tapin'");
} elseif ($id_role == 14) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kota Banjarbaru'");
} elseif ($id_role == 15) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm WHERE kabkota = 'Kota Banjarmasin'");
} else {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm");
}
// $sql = mysqli_query($koneksi, "SELECT * FROM data_pkm ORDER BY kabkota");
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$mpdf->SetTitle('Laporan Data Puskesmas');
$stylesheet = file_get_contents('cetak.css');
$header = '
<table style="width: 90%;">
		<tr>
			
				<td align="center">
				<img src="../../img/logo.png" style="position: absolute; width: 200px; height: auto;">
                </td>
                <td align="center">
				<span style="line-height: 1.6; font-weight: bold; font-size: 24px; align-content: center;">
				DINAS KESEHATAN KOTA BANJARMASIN
				</span>
				<br>
				<span style="line-height: 1.6; font-weight: normal; font-size: 18px">
					Jl. Mayjend D.I Panjaitan No. 27 Banjarmasin Kalimantan Selatan
 					<br>Telp.0511-3352859  Fax. 0511-3353263
 					<br>Email: www.pn-banjarmasin.go.id
				</span>
			<br><br>
			</td>
		</tr>
	</table>
    <hr class="line-title">
	<p align="center" style="font-size: 18px;">
		Laporan Data Puskesmas
	</p>
';
$mpdf->WriteHTML($header, 2);
$content = '
                                    <table class="table table-bordered text-dark">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kab/kota</th>
                                            <th>Kode Puskesmas</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Status Puskesmas</th>
                                            <th>Jenis Puskesmas</th>
                                            <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        ';
$no = 1;
while ($data_klinik = mysqli_fetch_array($sql)) {
    $content .= '<tbody>
    <tr><td>'.$no++.'</td>'.
                '<td>'.$data_klinik['kabkota'].'</td>'.
                '<td>'.$data_klinik['kodepkm'].'</td>'.
                '<td>'.$data_klinik['namapkm'].'</td>'.
                '<td>'.$data_klinik['statuspkm'].'</td>'.
                '<td>'.$data_klinik['kategori'].'</td>'.
                '<td>'.$data_klinik['alamat'].'</td>'
                ;
}
$content .= '</tr></tbody></table>';
$rowcount=mysqli_num_rows($sql);
$content .='<h6>Total Data: '.$rowcount.'</h6>';
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($content, 2);
$mpdf->Output();