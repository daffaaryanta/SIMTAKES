<?php

require_once '../../vendor/autoload.php';
include '../../koneksi.php';

if ($id_role == 3) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Balangan'");
} elseif ($id_role == 4) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Banjar'");
} elseif ($id_role == 5) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Barito Kuala'");
} elseif ($id_role == 6) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
} elseif ($id_role == 7) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
} elseif ($id_role == 8) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
} elseif ($id_role == 9) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Kotabaru'");
} elseif ($id_role == 10) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tabalong'");
} elseif ($id_role == 11) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tanah Bumbu'");
} elseif ($id_role == 12) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tanah Laut'");
} elseif ($id_role == 13) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tapin'");
} elseif ($id_role == 14) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kota Banjarbaru'");
} elseif ($id_role == 15) {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp WHERE kabkota = 'Kota Banjarmasin'");
} else {
    $sql = mysqli_query($koneksi, "SELECT * FROM data_pmdrsp");
}

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$mpdf->SetTitle('Laporan Data Praktek Mandiri Dokter Spesialis');
$stylesheet = file_get_contents('cetak.css');
$header = '
<table style="width: 100%;">
		<tr>
			<td align="center">
				<img src="../../img/logo_kalsel.svg" style="position: absolute; width: 80px; height: auto;">
            </td>
            <td align="center">
				<span style="line-height: 1.6; font-weight: bold; font-size: 24px; align-content: center;">
				DINAS KESEHATAN PROVINSI KALIMANTAN SELATAN
				</span>
				<br>
				<span style="line-height: 1.6; font-weight: normal; font-size: 18px">
					Jl. Belitung Darat No.118, Belitung Utara, Kec. Banjarmasin Bar., Kota Banjarmasin, Kalimantan Selatan 70116
 					<br>Telp. 0511-3355661, 3354443, 3364646, Fax. 0511-3359735, 3352575
 					<br>Email : dinkes@kalselprov.go.id , keskalsel@yahoo.com , keskalsel@gmail.com
				</span>
			<br><br>
			</td>
		</tr>
	</table>
    <hr class="line-title">
	<p align="center" style="font-size: 18px;">
		Laporan Data Praktek Mandiri Dokter Spesialis
	</p>
';
$mpdf->WriteHTML($header, 2);
$content = '
                                    <table class="table table-bordered text-dark">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kab/kota</th>
                                            <th>Kode PM Dokter Spesialis</th>
                                            <th>Nama PM Dokter Spesialis</th>
                                            
                                            
                                            <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        ';
$no = 1;
while ($data_klinik = mysqli_fetch_array($sql)) {
    $content .= '<tbody>
    <tr><td>'.$no++.'</td>'.
                '<td>'.$data_klinik['kabkota'].'</td>'.
                '<td>'.$data_klinik['kodepmdrsp'].'</td>'.
                '<td>'.$data_klinik['namapmdrsp'].'</td>'.
                '<td>'.$data_klinik['alamat'].'</td>'
                ;
}
$content .= '</tr></tbody></table>';
$rowcount=mysqli_num_rows($sql);
$content .='<h6>Total Data: '.$rowcount.'</h6>';
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($content, 2);
$mpdf->Output();