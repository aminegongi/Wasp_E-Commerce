<?php
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/entities/Commande.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion Livraisons/entities/livraison.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion Livraisons/core/livraisonC.php";

if (isset($_GET['IDCommande'])) {
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
            $lesref="Les Quantites des produits:<br>";
            for ($i=0;$i<$numPipe;$i++) {

                $separation = strpos($produits, "|");
                $separation2 = strpos($produits, "#");

                $refP = substr($produits, 0, $separation);
                $quatP = substr($produits, $separation + 1, $separation2 - $separation - 1);

                $sql="SELECT * from produit where reference='$refP' AND quantite<=10 ";

                $db = config2::getConnexion();
                try{
                    $listee=$db->query($sql);
                }
                catch (Exception $e){
                    die('Erreur: '.$e->getMessage());
                }
                $j=1;
                foreach ( $listee as $key){
                    $nom_produit = $key['nom'];
                    $prixU= $key['prix'];
                    $quU = $key['quantite'];

                    $lesref=$lesref." Nom du ".$j." produit : ".$nom_produit." \ Quantite : ".$quU."<br>";
                  //$lesref=$j;
                    echo $lesref;
                    $j++;

                }

                $len=strlen($produits);
                $produits = substr($produits,$separation2+1,$len);

            }


$header="MIME-Version: 1.0\r\n";
$header.='From:"Enactus Esprit ICT"<support@enactusICT.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message=$lesref;

mail("fahd.larayedh@esprit.tn", "Bonjour ", $message, $header);
        }

header('Location: ../EspaceClient/ProfilClient-Commandes.php');
?>
