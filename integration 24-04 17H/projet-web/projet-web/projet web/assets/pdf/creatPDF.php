<?Php
include "../../../../entities/admin.php";
include "../../../../core/AdminC.php";
if (isset($_GET['ID'])){
    $AdminC=new AdminC();
    $result=$AdminC->recupererAdmin($_GET['ID']);
    foreach($result as $row){
require('fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage('L','A4',0);
$pdf->SetFont('Times','B',50);
$pdf->Cell(275,70,'Mr/Mme '.$row['pseudo'],0,0,'C');
$pdf->Image('../../Les Modules/Gestion Admins/'.$row['image'],30,20,60,60);
$pdf->SetFont('Times','B',20);
$pdf->Ln();
$pdf->Cell(190,20,'Mail :',0,0,'C');
$pdf->Cell(1,20,$row['mail'],0,0,'C');
$pdf->Ln();
$pdf->Cell(190,20,'Adresse :',0,0,'C');
$pdf->Cell(1,20,$row['Adresse'],0,0,'C');
$pdf->Ln();
$pdf->Cell(200,20,'Numero Telephone :',0,0,'C');
$pdf->Cell(1,20,$row['NumTel'],0,0,'C');
$pdf->Output('my_file.pdf','I'); // Send to browser and display
    }
}
?>