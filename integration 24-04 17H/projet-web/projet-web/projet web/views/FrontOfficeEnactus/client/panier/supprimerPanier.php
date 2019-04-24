<?php
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";
if (isset($_GET['ID_Panier'])) {
    $Panier = new Paniers();
    $Panier->supprimerPaniers($_GET['ID_Panier']);
    header('Location: cart.php');

}
?>


