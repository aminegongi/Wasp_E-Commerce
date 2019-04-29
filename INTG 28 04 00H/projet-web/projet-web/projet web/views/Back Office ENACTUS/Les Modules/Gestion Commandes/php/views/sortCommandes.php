<?php
include "../core/config.php";

$var ='';
//if (isset($_POST['query'])) {$var =$_POST['query']; }
$query = "SELECT * FROM commande ORDER BY ".$_POST["column_name"]." ".$_POST["order"]." ";

/*if (!empty($_POST['query']))
{
    $query=$_POST['query']." ORDER BY ".$_POST["column_name"]." ".$_POST["order"]." ";
}*/

//echo $query ;
$db = config2::getConnexion();
try{
    $result=$db->query($query);
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}
$output = '';
$order = $_POST["order"];

if($order == 'desc')
{
    $order = 'asc';
}
else
{
    $order = 'desc';
}

$output.=' 
                       <table class="table product mt-3" redirecturl="" >
                                    <thead class="with-filters">
                                    <tr class="column-headers">
                                        <th scope="col" style="width: 2rem"></th>

                                        <th scope="col" style="width: 5rem">
                                            <!--<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="desc">-->
                                            <div class="ps-sortable-column" data-sort-col-name="name" id="id" >
                                                <a class="column_sort" id="id"  data-order="'.$order.'" href="#">ID</a>                                         
                                            </div>                                       
                                        </th>
                                        

                                        <th scope="col">

                                        </th>
                                        <th scope="col" style="width: 10%">
                                            <div class="ps-sortable-column" data-sort-col-name="name" id="nom_client" >
                                                <a class="column_sort" id="nom_client"  data-order="'.$order.'" href="#">Nom Client</a>                                         
                                            </div>
                                        </th>


                                        <th scope="col" style="width: 11%">
                                            <div  data-sort-col-name="name">
                                                <span role="columnheader">Nouveau client</span>
                                                <!--<span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                            </div>
                                            <!--<div class="ps-sortable-column" data-sort-col-name="name" >
                                                <a class="column_sort" id="reference" data-order="desc" href="#">&nbsp;&nbsp;&nbsp;Nouveau client</a>
                                                <span role="button" class="ps-sort" aria-label="Tri"></span>
                                            </div>-->
                                        </th>


                                        <th scope="col"  >
                                            <div  data-sort-col-name="name">
                                                <span role="columnheader">Type de Paiment</span>
                                                <!--<span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                            </div>
                                           <!-- <div class="ps-sortable-column" data-sort-col-name="name" >
                                                <a class="column_sort" id="categorie" data-order="desc" href="#">Paiment</a>
                                                <span role="button" class="ps-sort" aria-label="Tri"></span>
                                            </div>-->
                                        </th>


                                        <th scope="col" class="text-center" style="width: 20%">
                                            <div  data-sort-col-name="name">
                                                <span role="columnheader">Etat</span>
                                                <!--<span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                            </div>
                                            <!--<div class="ps-sortable-column" data-sort-col-name="name" >
                                                <a class="column_sort" id="quantite" data-order="desc" href="#">Etat</a>
                                                <span role="button" class="ps-sort" aria-label="Tri"></span>
                                            </div>-->
                                        </th>

                                        <th scope="col" class="text-center" style="width: 11%">
                                            <div class="ps-sortable-column" data-sort-col-name="name" id="prix_total">
                                                <a class="column_sort" id="prix_total" data-order="'.$order.'" href="#">Prix Total</a>
                                            </div>
                                        </th>

                                        <th scope="col" class="text-center" style="width: 9%">
                                            <div class="ps-sortable-column" data-sort-col-name="name" id="date">
                                                <a class="column_sort" id="date" data-order="'.$order.'" href="#">Date</a>
                                            </div>
                                        </th>

                                        <th scope="col" class="text-center">
                                            <div class="ps-sortable-column" data-sort-col-name="active">
                                                <!--<span role="columnheader">État</span>
                                                <span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                            </div>
                                        </th>

                                        <th scope="col" class="text-right" style="width: 3rem; padding-right: 2rem">
                                            Actions
                                        </th>
                                    </tr>

                                    <tr class="column-filters">
                                        <th colspan="2">
                                            <!--<div id="filter_column_id_product_div">
                                                <input type="hidden" id="filter_column_id_product" name="filter_column_id_product" value="" sql="">
                                                <input class="form-control" type="text" id="id_product" value="" placeholder="Chercher ID" style="font-size: 13px" onkeydown="onkd()" >-->
                                                <!--<input class="form-control form-min-max" type="text" id="filter_column_id_product_max" value="" placeholder="Max">-->
                                           <!-- </div>-->
                                        </th>
                                        <th><!--&nbsp;--></th>
                                        <th>
                                          <!--  <input type="text" class="form-control" placeholder="Chercher un nom" id="noms" name="filter_column_name" value="" onkeydown="onkd()" >-->
                                        </th>
                                        <th>
                                           <!-- <input type="text" class="form-control" placeholder="Chercher réf." id="refs" name="filter_column_reference" value="" onkeydown="onkd()">
                                        --></th>
                                        <th>
                                            <!--<input type="text" class="form-control" placeholder="Chercher une catégorie" name="filter_column_name_category" value="">-->
                                           <!-- <select required="" data-parsley-length="[5,10]" placeholder="" class="form-control" id="id_categories" onchange="" onkeydown="onkd()">
                                                <option value="" disabled selected>Type paiment</option>
                                                <option value="Cheque">Cheque</option>
                                                <option value="espece">espece</option>
                                                <option value="virement bancaire">virement bancaire</option>
                                            </select>-->
                                        </th>
                                        <th class="text-center">
                                           <!-- <div id="quantites">
                                                <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                                <select required="" data-parsley-length="[5,10]" placeholder="" class="form-control" id="id_categories" onchange="" onkeydown="onkd()">
                                                    <option value="" disabled selected>Etat</option>
                                                    <option value="Cheque">Annule</option>
                                                    <option value="espece">En attente de virement banquaire</option>
                                                    <option value="virement bancaire">En cours de préparation</option>
                                                    <option value="virement bancaire">Erreur de paiment</option>
                                                    <option value="virement bancaire">Livré</option>
                                                    <option value="virement bancaire">Paiment accepté</option>
                                                </select>
                                            </div>-->
                                        </th>
                                        ';
$output.='                                      <th class="text-center">
                                           <!--<div id="montants">
                                                <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                                <input class="form-control form-min-max" type="text" id="montant_min" value="" placeholder="Min.">
                                                <input class="form-control form-min-max" type="text" id="montant_max" value="" placeholder="Max.">
                                            </div>-->
                                        </th>

                                        <th id="product_filter_column_active" class="text-center">
                                            <!-- <div class="form-select">
                                                 <select class="custom-select" name="filter_column_active">
                                                     <option value=""></option>
                                                     <option value="1">Active</option>
                                                     <option value="0">Inactive</option>
                                                 </select>
                                             </div>-->
                                        </th>
                                        <th id="product_filter_column_active" class="text-center">
                                            <!-- <div class="form-select">
                                                 <select class="custom-select" name="filter_column_active">
                                                     <option value=""></option>
                                                     <option value="1">Active</option>
                                                     <option value="0">Inactive</option>
                                                 </select>
                                             </div>-->
                                        </th>                                      
                                        <th>
                                        <form action="afficherCommande.php">
                                     <button type="submit" class="btn btn-link" name="products_filter_reset"  title="Réinitialiser" id="reset_searsh" style="margin-left: 5%">
                    <i class="material-icons">clear</i>
                    Réinitialiser
                    </button></form></th>
                                        <!--<th>
                                            <button type="reset" class="btn btn-link" name="products_filter_reset" onclick="productColumnFilterReset($(this).closest(\'tr.column-filters\'))" title="Réinitialiser" style="display: none;">
                                                <i class="material-icons">clear</i>
                                                Réinitialiser
                                            </button>
                                        </th>-->
                                    </tr>
                                    ';
foreach($result as $row) {
    $output .= '
<tr data-product-id="1"><!--data-uniturl="/prestashop_1.7.5.0/admin574ttpvee/index.php/sell/catalog/products/unit/duplicate/19?_token=A2IC3bxCDtcD56ZtVFZxBESqGejkhhh8W-wzhuG3Ijo"-->
                                            <td class="checkbox-column form-group">
                                                <div class="md-checkbox md-checkbox-inline">

                                                </div>
                                            </td>

                                            <td>
                                                <label class="form-check-label" for="bulk_action_selected_products-19">
                                                    '.$row['id'].'
                                                </label>
                                            </td>
                                            <td class="" id ="<?PHP echo $row[\'reference\']; ?>" >
                                                <input type="hidden" id="<?PHP echo $row[\'reference\']; ?>" value="<?PHP echo $row[\'reference\']; ?> " >
                                            </td>
                                            <td>
                                                <a href="">'.$row['nom_client'].'</a>
                                            </td>

                                            <td>
                                              &emsp;&emsp;&emsp;  '.$row['type_client'].'
                                            </td>
                                            <td>
                                                '.$row['paiment'].'
                                            </td>
                                            <td class="text-center">
                                                <a>'.$row['etat'].'</a>
                                            </td>
                                            <td class="text-center">
                                                '.$row['prix_total'].'
                                            </td>

                                            <td class="product-sav-quantity text-center" data-product-quantity-value="300">
                                                <a>
                                                   '.$row['date'].'
                                                </a>
                                            </td>
                                            <td class="text-center">
                                            </td>

                                            <td class="text-right">
                                                <div class="btn-group-action">
                                                    <div class="btn-group">
                                                        <a href="modifierCommande.php?reference='.urlencode($row['reference']).'" title="" class="btn tooltip-link product-edit">
                                                            <i class="material-icons">mode_edit</i>
                                                        </a>
                                                        <a  href="supprimerCommande.php?reference='.urlencode($row['reference']).'" title="" class="btn tooltip-link product-edit">
                                                            <i class="material-icons action-enabled">clear</i></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
';
}
$output .= '</table></thread></div>';
echo $output;
?>


