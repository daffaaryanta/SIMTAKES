<?php

require_once '../../vendor/autoload.php';
include '../../koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM data_pkm ORDER BY kabkota");
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$stylesheet = file_get_contents('cetak.css');
$mpdf->WriteHTML('<center><h1>LAPORAN DATA PUSKESMAS</h1></center>');
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