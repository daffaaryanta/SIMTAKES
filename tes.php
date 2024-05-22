<?php

require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

$sql = mysqli_query($koneksi, "SELECT kabkota, kodeklinik, namaklinik, jenisklinik, alamat FROM data_klinik ORDER BY kabkota");
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
$stylesheet = file_get_contents('tes.css');
$mpdf->WriteHTML('<center><h1>LAPORAN DATA KLINIK</h1></center>');
$content = '
                                    <table class="table table-bordered text-dark">
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
                                        ';
$no = 1;
while ($data_klinik = mysqli_fetch_array($sql)) {
    $content .= '<tbody>
    <tr><td>'.$no++.'</td>'.
                '<td>'.$data_klinik['kabkota'].'</td>'.
                '<td>'.$data_klinik['kodeklinik'].'</td>'.
                '<td>'.$data_klinik['namaklinik'].'</td>'.
                '<td>'.$data_klinik['jenisklinik'].'</td>'.
                '<td>'.$data_klinik['alamat'].'</td>'
                ;
}
$content .= '</tr></tbody></table>';
$rowcount=mysqli_num_rows($sql);
$content .='<h6>Total Data: '.$rowcount.'</h6>';
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($content, 2);
$mpdf->Output();