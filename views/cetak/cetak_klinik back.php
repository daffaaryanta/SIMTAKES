<?php
require('../../fpdf/fpdf.php');
include '../../koneksi.php';


$sql = mysqli_query($koneksi, "SELECT kabkota, kodeklinik, namaklinik, jenisklinik, alamat FROM data_klinik ORDER BY kabkota");
// $query = "SELECT * FROM data_klinik ORDER BY kabkota";
// $sql = mysqli_query ($query);
$data = array();
while ($row = mysqli_fetch_assoc($sql)) {
	array_push($data, $row);
}
$rowcount=mysqli_num_rows($sql);
 
#setting judul laporan dan header tabel
$judul = "LAPORAN DATA KLINIK";
$header = array(
		array("label"=>"No", "length"=>10, "align"=>"C"),
		array("label"=>"Kab Kota", "length"=>50, "align"=>"C"),
		array("label"=>"Kode Klinik", "length"=>20, "align"=>"C"),
		array("label"=>"Nama Klinik", "length"=>80, "align"=>"C"),
        array("label"=>"Jenis Klinik", "length"=>20, "align"=>"C"),
        array("label"=>"Alamat", "length"=>100, "align"=>"C")
	);
 
#sertakan library FPDF dan bentuk objek
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
 
#tampilkan judul laporan
$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
#buat header tabel
$pdf->SetFont('Times','','10');
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();
 
#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
$no = 1;
foreach ($data as $baris) {
	$i = 1;
    $a = 0;
    $pdf->SetFont('Times','','10');
    $pdf->Cell($header[$a]['length'], 8, $no++, 1, '0', $kolom['align'], $fill);
	foreach ($baris as $cell) {
        if($pdf->GetStringWidth($cell) > $header[$i]['length']):
            $pdf->SetFont('Times','B','9');
            $pdf->Cell($header[$i]['length'], 8, $cell, 1, '0', 'L', $fill);
        else:
            $pdf->Cell($header[$i]['length'], 8, $cell, 1, '0', 'L', $fill);
        endif;
        
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
$pdf->SetFont('Arial','B','10');
$pdf->Cell(0,10, 'Total Data: '.$rowcount. ' data' , '0', 1, 'L');

$pdf->Output();
?>