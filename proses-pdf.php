<?php
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN CODING SAPEKEN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR SISWA KELAS IX APA AJA YANG PENTING KERJA',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(40,6,'NAMA',1,0);
$pdf->Cell(40,6,'ALAMAT',1,0);
$pdf->Cell(35,6,'JENIS KELAMIN',1,0);
$pdf->Cell(15,6,'AGAMA',1,0);
$pdf->Cell(60,6,'SEKOLAH ASAL',1,1);

$pdf->SetFont('Arial','',10);

include 'config.php';
$mahasiswa = mysqli_query($db, "select * from calon_siswa");
while ($row = mysqli_fetch_array($mahasiswa)){
    $pdf->Cell(40,6,$row['nama'],1,0);
    $pdf->Cell(40,6,$row['alamat'],1,0);
    $pdf->Cell(35,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(15,6,$row['agama'],1,0); 
    $pdf->Cell(60,6,$row['sekolah_asal'],1,1); 
}

$pdf->Output();