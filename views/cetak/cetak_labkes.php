<?php

require_once '../../vendor/autoload.php';
include '../../koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM data_labkes ORDER BY kabkota");
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$mpdf->SetTitle('Laporan Data Labkes');
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
		Laporan Data Labkes
	</p>
';
$mpdf->WriteHTML($header, 2);
$content = '
                                    <table class="table table-bordered text-dark">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kab/kota</th>
                                            <th>Kode Labkes</th>
                                            <th>Nama Labkes</th>
                                            
                                            <th>Jenis Labkes</th>
                                            <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        ';
$no = 1;
while ($data_klinik = mysqli_fetch_array($sql)) {
    $content .= '<tbody>
    <tr><td>'.$no++.'</td>'.
                '<td>'.$data_klinik['kabkota'].'</td>'.
                '<td>'.$data_klinik['kodelabkes'].'</td>'.
                '<td>'.$data_klinik['namalabkes'].'</td>'.
                '<td>'.$data_klinik['jenislabkes'].'</td>'.
                '<td>'.$data_klinik['alamat'].'</td>'
                ;
}
$content .= '</tr></tbody></table>';
$rowcount=mysqli_num_rows($sql);
$content .='<h6>Total Data: '.$rowcount.'</h6>';
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($content, 2);
$mpdf->Output();