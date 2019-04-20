<?php
include "config5.php";

$where ="";
if (!empty($_POST['id']) || !empty($_POST['reference']) || !empty($_POST['categorie']) || !empty($_POST['nom']) || !empty($_POST['mmin']) || !empty($_POST['mmax']) || !empty($_POST['qmin']) || !empty($_POST['qmax']) )
{
    $where=$where." where ";
}
if (!empty($_POST['id'])) {
    $where = "where "."id=".$_POST["id"]."";
    if (!empty($_POST['reference']) || !empty($_POST['categorie']) || !empty($_POST['nom']) || !empty($_POST['mmin']) || !empty($_POST['mmax']) || !empty($_POST['qmin']) || !empty($_POST['qmax']) )
    {$where=$where." AND ";}
}
if (!empty($_POST['reference'])) {
    $where = $where."reference = '".$_POST["reference"]."'";
    if (!empty($_POST['categorie']) || !empty($_POST['nom']) || !empty($_POST['mmin']) || !empty($_POST['mmax']) || !empty($_POST['qmin']) || !empty($_POST['qmax']))
    {$where=$where." AND ";}
}
if (!empty($_POST['nom'])) {
    $where = $where."nom= '".$_POST["nom"]."'";
    if (!empty($_POST['categorie']) || !empty($_POST['mmin']) || !empty($_POST['mmax']) || !empty($_POST['qmin']) || !empty($_POST['qmax']) )
    {$where=$where." AND ";}
}
if (!empty($_POST['categorie'])) {
    $where = $where."categorie= '".$_POST["categorie"]."'";
    if ( !empty($_POST['mmin']) || !empty($_POST['mmax']) || !empty($_POST['qmin']) || !empty($_POST['qmax']) )
    {$where=$where." AND ";}
}
if ( !empty($_POST['mmax']) || !empty($_POST['mmin']) )
{
    $where = $where."prix BETWEEN ".$_POST["mmin"]."".' AND '.$_POST["mmax"]."";
    if ( (!empty($_POST['qmin']) || !empty($_POST['qmax'])) )
    {$where=$where." AND ";}
}
if ( !empty($_POST['qmax']) || !empty($_POST['qmin']) )
{
    $where = $where."quantite BETWEEN ".$_POST["qmin"]."".' AND '.$_POST["qmax"]."";
}

//$where=' where id=63';
$query = "SELECT * FROM produit ".$where." ";
//echo $query ;
//$query = "SELECT * FROM produit where nom = 'nom' ";
//echo $query;
$db = config5::getConnexion();
try{
    $resultquery=$db->query($query);
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}
//var_dump($result);
$output = '';
$output .= '  
 <table class="table product mt-3" redirecturl="" >
                            <input type="hidden" value="'.$query.'" id="id_query">
                            <thead class="with-filters">
                            <tr class="column-headers">
                                <th scope="col" style="width: 2rem"></th>

                                <th scope="col" style="width: 5rem">
                                    <!--<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="desc">-->
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="id" data-order="desc" href="#">ID</a>
                                    <span role="button" class="ps-sort" aria-label="Tri" ></span>

                                    </div>
                                </th>


                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name">
                                        <span role="columnheader">Images</span>
                                        <!--<span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="nom" data-order="desc" href="#">Nom</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="reference" data-order="desc" href="#">Reference</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="categorie" data-order="desc" href="#">Categorie</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col" class="text-center" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="quantite" data-order="desc" href="#">Quantite</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>

                                <th scope="col" class="text-center" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="prix" data-order="desc" href="#">Montant</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col" class="text-center" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="date" data-order="desc" href="#">Date</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
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
                                    <div id="filter_column_id_product_div">
                                        <input type="hidden" id="filter_column_id_product" name="filter_column_id_product" value="" sql="">
                                        <input class="form-control" type="text" id="id_product" value="'.$_POST['id'].'" placeholder="Chercher ID"  style="font-size: 13px" onkeydown="onkd()" >
                                        <!--<input class="form-control form-min-max" type="text" id="filter_column_id_product_max" value="" placeholder="Max">-->
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>
                                    <input type="text" class="form-control" placeholder="Chercher un nom" id="noms" name="filter_column_name" value="'.$_POST['nom'].'">
                                </th>
                                <th>
                                    <input type="text" class="form-control" placeholder="Chercher réf." id="refs" name="filter_column_reference" value="'.$_POST['reference'].'">
                                </th>
                                <th>
                                    <!--<input type="text" class="form-control" placeholder="Chercher une catégorie" name="filter_column_name_category" value="">-->
                                    <select required="" data-parsley-length="[5,10]" placeholder="" class="form-control" id="id_categories"  >
                                        <option  value="'.$_POST['categorie'].'" disabled selected>Categorie</option> 
 ';
include "../core/Categories.php";
$Categories=new Categories();
$result=$Categories->afficherCategoriess();
foreach($result as $row) {
    $output .= '
    <script>
        $(\'#id_categories\').append(\'<option value="'.$row['nom'].'">'.$row['nom'].'</option>\');
    </script>
    </select>
';
}
$output .= '  
                                </th>
                                <th class="text-center">
                                    <div id="quantites">
                                        <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                        <input class="form-control form-min-max" type="text" id="quantite_min" value="'.$_POST['qmin'].'" placeholder="Min.">
                                        <input class="form-control form-min-max" type="text" id="quantite_max" value="'.$_POST['qmax'].'" placeholder="Max.">
                                    </div>
                                </th>
                                <th class="text-center">
                                    <div id="montants">
                                        <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                        <input class="form-control form-min-max" type="text" id="montant_min" value="'.$_POST['mmin'].'" placeholder="Min.">
                                        <input class="form-control form-min-max" type="text" id="montant_max" value="'.$_POST['mmax'].'" placeholder="Max.">
                                    </div>
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
                                <th class="text-right" style="width: 5rem">
                                    <button type="button" class="btn btn-primary" name="products_filter_submit" title="Rechercher" id="searsh"> <!-- submit -->
                                        <i class="" style="position: absolute"></i>
                                        Rechercher
                                    </button>
                                     <input type="hidden" name="Reins"><form action="afficherProduit.php">
                                     <button type="submit" class="btn btn-link" onclick="" name="products_filter_reset"  title="Réinitialiser" id="reset_searsh" style="margin-left: 5%">
                    <i class="material-icons">clear</i>
                    Réinitialiser
                    </button></form>
                                </th>
                                <!--<th>
                                    <button type="reset" class="btn btn-link" name="products_filter_reset" onclick="productColumnFilterReset($(this).closest(\'tr.column-filters\'))" title="Réinitialiser" style="display: none;">
                                        <i class="material-icons">clear</i>
                                        Réinitialiser
                                    </button>
                                </th>-->
                            </tr>
                            ';

foreach($resultquery as $row) {
    $output .= '
    <tr data-product-id="1"><!--data-uniturl="/prestashop_1.7.5.0/admin574ttpvee/index.php/sell/catalog/products/unit/duplicate/19?_token=A2IC3bxCDtcD56ZtVFZxBESqGejkhhh8W-wzhuG3Ijo"-->
                                <td class="checkbox-column form-group">
                                    <div class="md-checkbox md-checkbox-inline">
                                        <!--<label>
                                            <input type="checkbox" id="bulk_action_selected_products-19" name="bulk_action_selected_products[]" value="1">
                                            <i class="md-checkbox-control"></i>
                                        </label>-->
                                    </div>
                                </td>

                                <td>
                                    <label class="form-check-label" for="bulk_action_selected_products-19">
                                        '.$row['id'].'
                                        <script>     
                                        //alert(\"a\");                                    
                                                var zzz ="'.$row['reference'].'" ;
                                                var zzzz ="'.$row['id_projet'].'" ;

                                                function myfunc() {
                                                //var alr = document.getElementById(\'test\').value ;
                                                //alert(alr);
                                                var fah = zzz ;
                                                var fahh=zzzz;
                                                   //var fah =document.getElementById(\'test\').value;
                                                    //$.post(\'upload.php\',{postref:fah},function (data) {$(\'#result\').html(data)});
                                                    $.ajax({
                                                        url:"upload2.php",
                                                        method:"POST",
                                                       // data: \'nome=\'+fah,
                                                       data: {nomee:fahh,nome:fah},

                                                        success:function(data){

                                                           // $(\'#test\').html(data);
                                                            //$().html(data);
                                                            //document.getElementById(s1).innerHTML(data);
                                                            //s1.html(data);
                                                            //$(#s1).html(data);
                                                            $(\'#\'+fah).html(data);
                                                        }
                                                    });
                                            }
                                            function myfunc2() {
                                                //var alr = document.getElementById(\'test\').value ;
                                                //alert(alr);
                                                var fah = \'111111\';
                                                //var fah =document.getElementById(\'test\').value;
                                                //$.post(\'upload.php\',{postref:fah},function (data) {$(\'#result\').html(data)});
                                                $.ajax({
                                                    url:"upload2.php",
                                                    method:"POST",
                                                    data: \'nome=\'+fah,
                                                    success:function(data){

                                                         $(\'#111111\').html(data);
                                                        //$().html(data);
                                                        //document.getElementById(s1).innerHTML(data);
                                                        //s1.html(data);
                                                        //$(#s1).html(data);
                                                        //$(\'\').html(data);
                                                    }
                                                });
                                            }

                                        </script>
                                    </label>
                                </td>
                                <td class="" id ="'.$row['reference'].'" >
                                    <input type="hidden" id ="'.$row['reference'].'" value ="'.$row['reference'].'" >
                                    <script>
                                       // var t = "ttt";
                                        //alert (omg);
                                        myfunc();
                                    </script>
                                    <!-- <div id="preview2"></div>-->
                                </td>
                                <td>
                                    <a href="">'.$row['nom'].'</a>
                                </td>
                                <td>
                                    '.$row['reference'].'
                                </td>
                                <td>
                                    '.$row['categorie'].'
                                </td>
                                <td class="text-center">
                                    <a href="">'.$row['quantite'].'</a> <!---->
                                </td>
                                <td class="text-center">
                                    '.$row['prix'].'
                                </td>

                                <td class="product-sav-quantity text-center" data-product-quantity-value="300">
                                    <a href="">
                                        '.$row['date'].'                                
                                    </a>
                                </td>
                                <td class="text-center">
                                   
                                </td>
                                
                                <td class="text-right">
                                    <div class="btn-group-action">
                                        <div class="btn-group">
                                            <a href="modifierProduit.php?reference='.urlencode($row['reference']).'" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a  href="supprimerProduit.php?reference='.urlencode($row['reference']).'&id_projet='.urlencode($row['id_projet']).' " title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons action-enabled">clear</i></a>
                                          

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
    ';
}
$output .= '</table></thread>';
echo $output;
?>