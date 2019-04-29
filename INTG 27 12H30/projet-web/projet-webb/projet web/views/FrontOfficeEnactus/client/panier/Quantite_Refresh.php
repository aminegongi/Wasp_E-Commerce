<?php
/*echo '<script> alert("fezeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"); </script>';
echo "<script> alert(".$_POST['nome'].$_POST['nomee']."); </script>";
echo '<script> alert("fezeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee"); </script>';*/
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";

if (isset($_POST['nome']) && isset($_POST['nomee'])) {
    //echo "<script> alert(".$_POST['nome'].$_POST['nomee']."); </script>";
    $Panier = new Paniers();
    $Panier->modifierPanier_quantite2($_POST['nome'],$_POST['nomee']);
   }



?>