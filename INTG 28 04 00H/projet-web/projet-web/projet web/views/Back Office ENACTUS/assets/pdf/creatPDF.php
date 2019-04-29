<?Php
include "../../../../entities/admin.php";
include "../../../../core/AdminC.php";
include "../../../../core/ProjetC.php";
if (isset($_GET['ID'])) {
    require('fpdf.php');
    class PDF extends FPDF
    {

        // En-tête
        function Header()
        {
            $AdminC = new AdminC();
            $result = $AdminC->recupererAdmin($_GET['ID']);
            $image = '';
            $name = '';
            $ID = '';
            foreach ($result as $row) {
                $image = $row['image'];
                $name = $row['pseudo'];
                $ID = $row['ID'];
            }
            // Logo
            $this->Image('../../Les Modules/Gestion Admins/' . $image, 10, 6, 40);

            $this->SetFont('Arial', 'B', 20);
            $this->Cell(276, 10, 'Mr/Mme ' . $name, 0, 0, 'C');
            $this->Ln();

            $this->SetFont('Times', '', 14);
            $this->Cell(276, 20, 'ID : ' . $ID, 0, 0, 'C');
            // Saut de ligne
            $this->Ln(20);
        }
        // Pied de page
        function Footer()
        {
            // Positionnement à 1,5 cm du bas
            $this->SetY(-15);
            // Police Arial italique 8
            $this->SetFont('Arial', 'I', 8);
            // Numéro de page
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
        function headerTableGeneral($w)
        {
            $this->Ln(20);
            $this->SetFont('Courier', 'B', 20);
            $this->Cell(100, 20, 'Information generale : ', 0, 0, 'C');
            $this->Ln(20);
            $this->SetFont('Arial', 'B', 12);
            $this->SetFillColor(59, 78, 135);
            $this->SetTextColor(255, 255, 255);
            $this->Cell($w, 10, 'email', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Etat ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Adresse ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Numero Telephone ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Date creation ', 1, 0, 'C', true);

            $this->Ln();
        }
        function viewTableGeneral($w)
        {
            $AdminC = new AdminC();
            $result = $AdminC->recupererAdmin($_GET['ID']);
            $mail = '';
            $numTel = 0;
            foreach ($result as $row) {
                $mail = $row['mail'];
                $numTel = $row['NumTel'];
                $adress = $row['Adresse'];
                $date = $row['date'];
                $IDP = $row['IDP'];
            }
            $dt = new DateTime($date);
            $this->SetFont('Times', '', 12);
            $this->SetTextColor(0, 0, 0);
            $this->Cell($w, 10, $mail, 1, 0, 'C');
            if ($IDP == "undefined")
                $IDP = "Non Affecte";
            else
                $IDP = "Affecte";
            $this->Cell($w, 10, $IDP, 1, 0, 'C');
            $this->Cell($w, 10, $adress, 1, 0, 'C');
            $this->Cell($w, 10, $numTel, 1, 0, 'C');
            $this->Cell($w, 10, $dt->format("F j, Y | g:i a"), 1, 0, 'C');
            $this->Ln();
        }
        function headerTableProjet($w)
        {
            $this->Ln(10);
            $this->SetFont('Courier', 'B', 20);
            $this->Cell(100, 20, 'Information Projet : ', 0, 0, 'C');
            $this->Ln(20);
            $this->SetFont('Arial', 'B', 12);
            $this->SetFillColor(0, 94, 67);
            $this->SetTextColor(255, 255, 255);
            $this->Cell($w, 10, 'ID Projet', 1, 0, 'C', true);
            $this->Cell($w, 10, 'nom ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'logo ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'ODD ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Date creation ', 1, 0, 'C', true);

            $this->Ln();
        }
        function viewTableProjet($w)
        {
            $AdminC = new AdminC();
            $result = $AdminC->recupererAdmin($_GET['ID']);
            $IDP = "";
            foreach ($result as $key) {
                $IDP = $key['IDP'];
            }
            $logo = '';
            $odd = '';
            $nom = '';
            $date = "";
            if ($IDP == "undefined") {
                    $IDP = "Non Affecte";
                    $logo = '//';
                    $odd = '//';
                    $nom = '//';
                    $date = "//";
                } else {
                    $Projet = new ProjetC();
                    $result = $Projet->recupererProjet($IDP);
                    foreach ($result as $row) {
                        $nom = $row['nom'];
                        $logo = $row['logo'];
                        $odd = $row['type'];
                        $date = $row['date'];
                    }
                    $logo = $this->Image('../../Les Modules/Gestion Projets/' . $logo, ($w * 2) + 17 + $this->GetX(), $this->GetY()+1, 18);
                    $odd = $this->Image('../../Les Modules/Gestion Projets/' . $odd, ($w * 3) + 17 + $this->GetX(), $this->GetY()-0.6, 22);
                    $dt = new DateTime($date);
                    $date = $dt->format("F j, Y | g:i a");
                }
            $this->SetFont('Times', '', 12);
            $this->SetTextColor(0, 0, 0);
            $this->Cell($w, 20, $IDP, 1, 0, 'C');
            $this->Cell($w, 20, $nom, 1, 0, 'C');
            $this->Cell($w, 20, $logo, 1, 0, 'C');
            $this->Cell($w, 20, $odd, 1, 0, 'C');
            $this->Cell($w, 20, $date, 1, 0, 'C');
            $this->Ln();
        }
    }
    $pdf = new PDF();
    $RowWidth = 55;
    $pdf->AliasNbPages();
    $pdf->AddPage('L', 'A4', 0);
    $pdf->headerTableGeneral($RowWidth);
    $pdf->viewTableGeneral($RowWidth);
    $pdf->Ln(20);
    $pdf->headerTableProjet($RowWidth);
    $pdf->viewTableProjet($RowWidth);
    $pdf->Output('I');
}
