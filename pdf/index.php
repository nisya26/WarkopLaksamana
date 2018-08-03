<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'Warkop Laksamana Bengkalis',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Daftar Menu Warkop Laksamana Bengkalis',0,1,'C');
$pdf->image('images/menu.jpg',80,23,60);

// Memberikan space kebawah agar tidak terlalu rapat
;

include 'koneksi.php';
$mahasiswa = mysqli_query($connect, "select * from menuu");
while ($row = mysqli_fetch_array($menuu)){
 

}
$pdf->Output();
?>
