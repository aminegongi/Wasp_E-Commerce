<?Php
include "../../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";
include "../../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/entities/Commande.php";
include "../../../../Back Office ENACTUS/Les Modules/Gestion Livraisons/entities/livraison.php";
include "../../../../Back Office ENACTUS/Les Modules/Gestion Livraisons/core/livraisonC.php";

require "../../assets/pdfFacture/fpdf.php";

if (isset($_GET['IDCommande'])) {
    
    class PDF extends FPDF
    {
        function Header()
        {
            $idcommande = $_GET['IDCommande'];
            $sql="SELECT * from commande where id='$idcommande' ";
        
            $db = config2::getConnexion();
            try{
                $list=$db->query($sql);
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        
            foreach ( $list as $key){
                $nom_client = $key['nom_client'];
                $produits= $key['reference'];
                $prixT= $key['prix_total'];
                $dateC=$key['date'];
                }

            $this->SetFont('Arial', 'B', 20);
            $this->Cell(276, 10, 'Nom du Client  ' . $nom_client, 0, 0, 'C');
            $this->Ln();

            $this->SetFont('Times', '', 14);
            $this->Cell(276, 20, 'date de la Commande : ' . $dateC, 0, 0, 'C');
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
            $this->Cell(100, 20, 'Facture : ', 0, 0, 'C');
            $this->Ln(20);
            $this->SetFont('Arial', 'B', 12);
            $this->SetFillColor(255, 255, 255);
            $this->SetTextColor(0, 0, 0);
            $this->Cell($w, 10, 'Reference produit ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Nom produit ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Prix unitaire ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Quantite ', 1, 0, 'C', true);
            $this->Cell($w, 10, 'Prix total ', 1, 0, 'C', true);

            $this->Ln();
        }
        function viewTableGeneral($w)
        {
            $idcommande = $_GET['IDCommande'];
            $sql="SELECT * from commande where id='$idcommande' ";

            $db = config2::getConnexion();
            try{
                $list=$db->query($sql);
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }

            foreach ( $list as $key){
                $nom_client = $key['nom_client'];
                $produits= $key['reference'];
                $prixT= $key['prix_total'];
                $dateC=$key['date'];
            }

            /* fct */
            $numPipe = substr_count($produits,"|");
            $numHash = substr_count($produits,"#");


$quantT=0;
$var=1;
            for ($i=0;$i<$numPipe;$i++) {

                $separation = strpos($produits, "|");
                $separation2 = strpos($produits, "#");


                $refP = substr($produits, 0, $separation);
                $quatP = substr($produits, $separation + 1, $separation2 - $separation - 1);

                $sql="SELECT * from produit where reference='$refP' ";

                $db = config2::getConnexion();
                try{
                    $list=$db->query($sql);
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }

                foreach ( $list as $key){
                    $nom_produit = $key['nom'];
                    $prixU= $key['prix'];

                }

                $this->Cell($w, 10, $refP, 1, 0, 'C');
                $this->Cell($w, 10, $nom_produit, 1, 0, 'C');
                $this->Cell($w, 10, $prixU, 1, 0, 'C');
                $this->Cell($w, 10, $quatP, 1, 0, 'C');
                $this->Cell($w, 10, $prixU*$quatP, 1, $var, 'C');

                $quantT+=$quatP;
                // $this->Cell($w, 10, "kkh", 1, 0, 'C');
                //$this->Cell($w, 10, "fh", 1, 0, 'C');

                $len=strlen($produits);
                $produits = substr($produits,$separation2+1,$len);

            }
            $this->Cell($w, 10, '', 0, 0, 'C');
            $this->Cell($w, 10, '', 0, 0, 'C');
            $this->Cell($w, 10, '', 0, 0, 'C');
            $this->Cell($w, 10, $quantT, 1, 0, 'C');
            $this->Cell($w, 10, $prixT.' TND', 1, 1, 'C');
            /*$this->Cell($w, 10, "1", 1, 0, 'C');
            $this->Cell($w, 10, "1", 1, 0, 'C');
            $this->Cell($w, 10, "1", 1, 0, 'C');
            $this->Cell($w, 10, "1", 1, 0, 'C');
            $this->Cell($w, 10, "1", 1, 1, 'C');

            $this->Cell($w, 10, "2", 1, 0, 'C');
            $this->Cell($w, 10, "2", 1, 0, 'C');
            $this->Cell($w, 10, "2", 1, 0, 'C');
            $this->Cell($w, 10, "2", 1, 0, 'C');
            $this->Cell($w, 10, "2", 1, 1, 'C');


            $this->Cell($w, 10, "3", 1, 0, 'C');
            $this->Cell($w, 10, "3", 1, 0, 'C');
            $this->Cell($w, 10, "3", 1, 0, 'C');
            $this->Cell($w, 10, "3", 1, 0, 'C');
            $this->Cell($w, 10, "3", 1, 0, 'C');
*/

            /* fct */
            /*$AdminC = new AdminC();
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
            $this->Ln();*/
        }
    }
    $pdf = new PDF();
    $RowWidth = 55;
    $pdf->AliasNbPages();
    $pdf->AddPage('L', 'A4', 0);
    $pdf->headerTableGeneral($RowWidth);
    $pdf->viewTableGeneral($RowWidth);
    $pdf->Ln(20);
    $pdf->Output('F','../../../../Back Office ENACTUS/Les Modules/Gestion Commandes/Factures/'.$_GET['IDCommande'].'.pdf');
}
