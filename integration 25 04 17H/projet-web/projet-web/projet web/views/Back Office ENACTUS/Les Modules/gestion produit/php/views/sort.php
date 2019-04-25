<?php
//sort.php
//$connect = mysqli_connect("localhost", "root", "", "gestion_produit");
include "config5.php";
/*
//$sql="SElECT * From produit";
$db = config::getConnexion();
try{
    $liste=$db->query($sql);
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
}*/
$var ='';
if (isset($_POST['query'])) {$var =$_POST['query']; }
$query = "SELECT * FROM produit ORDER BY ".$_POST["column_name"]." ".$_POST["order"]." ";
if (!empty($_POST['query']))
{
    $query=$_POST['query']." ORDER BY ".$_POST["column_name"]." ".$_POST["order"]." ";
}
//echo $query ;
$db = config5::getConnexion();
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
//$result = mysqli_query($connect, $query);
$output .= '  
 <table class="table product mt-3" redirecturl="" >
    <input type="hidden" value="'.$var.'" id="id_query">
                            <thead class="with-filters">
                            <tr class="column-headers">
                                <th scope="col" style="width: 2rem"></th>

                                <th scope="col" style="width: 5rem">
                            
                                <div class="ps-sortable-column" data-sort-col-name="name" id="id" >
                                <a class="column_sort" id="id" data-order="'.$order.'" href="#">ID</a>
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                        <span role="columnheader">Images</span>
                                      
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" id="nom" >
                                    <a class="column_sort" id="nom" data-order="'.$order.'" href="#">Nom</a>
                                    
                                    </div>
                                </th>
                                
                                <th scope="col" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" id="reference">
                                    <a class="column_sort" id="reference" data-order="'.$order.'" href="#">Reference</a>
                                    
                                    </div>
                                </th>


                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" id="categorie">
                                    <a class="column_sort" id="categorie" data-order="'.$order.'" href="#">Categorie</a>
                                    </div>
                                </th>


                                <th scope="col" class="text-center" style="width: 9%">
                                <div class="ps-sortable-column" data-sort-col-name="name" id="quantite" >
                                    <a class="column_sort" id="quantite" data-order="'.$order.'" href="#">Quantite</a>
                                    </div>
                                </th>

                                <th scope="col" class="text-center" style="width: 9%">
                                <div class="ps-sortable-column" data-sort-col-name="name"id="prix" >
                                    <a class="column_sort" id="prix" data-order="'.$order.'" href="#">Montant</a>
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
                                    <div id="filter_column_id_product_div">
                                        <input type="hidden" id="filter_column_id_product" name="filter_column_id_product" value="" sql="">
                                        <input class="form-control" type="text" id="id_product" value="" placeholder="Chercher ID" onkeydown="onkd()" style="font-size: 13px" >
                                        <!--<input class="form-control form-min-max" type="text" id="filter_column_id_product_max" value="" placeholder="Max">-->
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>
                                    <input type="text" class="form-control" id="noms" placeholder="Chercher un nom" name="filter_column_name" value="">
                                </th>
                                <th>
                                    <input type="text" class="form-control" id="refs" placeholder="Chercher réf." name="filter_column_reference" value="">
                                </th>
                                <th>
                                    <!--<input type="text" class="form-control" placeholder="Chercher une catégorie" name="filter_column_name_category" value="">-->
                                    <select required="" data-parsley-length="[5,10]" placeholder="" class="form-control" id="id_categories"  >
                                        <option  value="" disabled selected>Categorie</option>
 ';
include "../core/Categories.php";
$Categories=new Categories();
$resultt=$Categories->afficherCategoriess();
foreach($resultt as $row) {
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
                                        <input class="form-control form-min-max" type="text" id="quantite_min" value="" placeholder="Min.">
                                        <input class="form-control form-min-max" type="text" id="quantite_max" value="" placeholder="Max.">
                                    </div>
                                </th>
                                <th class="text-center">
                                    <div id="montants">
                                        <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                        <input class="form-control form-min-max" type="text" id="montant_min" value="" placeholder="Min.">
                                        <input class="form-control form-min-max" type="text" id="montant_max" value="" placeholder="Max.">
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
                                    <button type="button" class="btn btn-primary" name="products_filter_submit" title="Rechercher" id="searsh">
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
//while($row = mysqli_fetch_array($result))
    foreach($result as $row)
        {
    $output .= '                        
                            <tr data-product-id="1"><!--data-uniturl="/prestashop_1.7.5.0/admin574ttpvee/index.php/sell/catalog/products/unit/duplicate/19?_token=A2IC3bxCDtcD56ZtVFZxBESqGejkhhh8W-wzhuG3Ijo"-->
                                <td class="checkbox-column form-group">
                                    <div class="md-checkbox md-checkbox-inline">                                     
                                    </div>
                                </td>

                                <td>
                                    <label class="form-check-label" for="bulk_action_selected_products-19">
                                         '.$row['id'].'
                                        <script>                                                                          

                                            var zzz ="'.$row['reference'].'" ;
                                            var zzzz = "'.$row['id_projet'].'";

                                            function myfunc() {
                                                
                                               // alert(\"a\");
                                                //var alr = document.getElementById(\'test\').value ;
                                                //alert(alr);
                                                var fah = zzz ;
                                                var fahh = zzzz;
                                                   //var fah =document.getElementById(\'test\').value;
                                                    //$.post(\'upload.php\',{postref:fah},function (data) {$(\'#result\').html(data)});
                                                    $.ajax({
                                                        url:"upload2.php",
                                                        method:"POST",
                                                        //data: \'nome=\'+fah,
                                                        data: {nomee:fahh,nome:fah},

                                                        success:function(data){
//alert(\"a\");
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
                                    <input type="hidden" id="'.$row['reference'].'" value="'.$row['reference'].' " >
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
                                    <a href="">'.$row['quantite'].'</a>
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
                                    <!-- <a href="#" onclick="unitProductAction(this, \'deactivate\'); return false;">
                                         <i class="material-icons action-enabled ">check</i>
                                     </a>-->
                                </td>
                                <!--
                                <td class="text-right">
                                    <div class="btn-group-action">
                                        <div class="btn-group">
                                            <a href="" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a  href="" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons action-enabled">clear</i></a>
                                        </div>
                                    </div>
                                </td> -->
                                <td class="text-right">
                                    <div class="btn-group-action">
                                        <div class="btn-group">
                                            <a href="modifierProduit.php?reference='.urlencode($row['reference']).'"  title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a  href="supprimerProduit.php?reference='.urlencode($row['reference']).'&id_projet='.urlencode($row['id_projet']).' " title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons action-enabled">clear</i></a>
                                            <!--<td><a href="supprimerProduit.php?reference=">
                                                    Modifier</a></td>-->

                                        </div>
                                    </div>
                                </td>
                            </tr>                  
                               
      ';
}
$output .= '</table></thread></div>';
echo $output;
?>