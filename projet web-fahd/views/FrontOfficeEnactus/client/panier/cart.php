<?php
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/core/Commandes.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion produit/php/core/Produits.php";
include "../../../Back Office ENACTUS/Les Modules/Gestion Commandes/php/entities/Commande.php";
include "../../../../core/ClientC.php";
include "../../../../core/ProjetC.php";



session_start();
if ($_SESSION["login_in"]) {
        $Projet1C = new ProjetC();
        $listeProjet = $Projet1C->afficherProjets();
        $Client1C = new ClientC();
        $r = $Client1C->recupererClient($_SESSION["ID"]);
        foreach ($r as $row) {
                $name = $row['pseudo'];
                $image = $row['image'];
            }

          ?>
    <!DOCTYPE html>

    <head>
        <title>Panier</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Little Closet template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
        <link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../assets/styles/cart.css">
        <link rel="stylesheet" type="text/css" href="../assets/styles/cart_responsive.css">
        <link href="../../../Back%20Office%20ENACTUS/Les%20Modules/gestion%20produit/php/views/AfficherProduitCss.css" rel="stylesheet" />


    </head>

    <body>
    <!-- -->

    <script src="../../../Back Office ENACTUS/Les Modules/gestion produit/AProduitJs.js"></script>
    <script src="../../../Back Office ENACTUS/Les Modules/gestion produit/ImageJS.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- -->

            
        <!-- Menu -->

        <div class="menu">

            <!-- Search -->
            <div class="menu_search">
                <form action="#" id="menu_search_form" class="menu_search_form">
                    <input type="text" class="search_input" placeholder="Recherche..." required="required">
                    <button class="menu_search_button"><img src="../assets/images/search.png" alt="icon recherche"></button>
                </form>
            </div>
            <!-- Navigation -->
            <div class="menu_nav">
                <ul>
                    <li><a href="../assets/index.html">Acceuil</a></li>
                    <li><a href="../assets/category.html">Categorie</a></li>
                    <li><a href="../assets/#">Guide d'utilisation</a></li>
                    <li><a href="../assets/#">Contact</a></li>
                </ul>
            </div>
            <!-- Contact Info -->
            <div class="menu_contact">
                <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
                    <div>
                        <div><img src="../assets/images/phone.svg" alt="Phone Icon"></div>
                    </div>
                    <div>+216 55 685 313</div>
                </div>
                <div class="menu_social">
                    <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                        <li><a href="../assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="../assets/#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="../assets/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="../assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="super_container">

            <!-- Header -->
            <header class="header">
                <div class="header_overlay"></div>
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo">
                        <a href="../assets/#">
                            <div class="d-flex flex-row align-items-center justify-content-start">
                                <div><img src="../assets/images/logo_Escope.png" alt="E-Scope" width="200" height=auto></div>
                            </div>
                        </a>
                    </div>
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li><a href="../assets/index.html">Acceuil</a></li>
                            <li><a href="../assets/category.html">Categorie</a></li>
                            <li><a href="../assets/#">Guide d'utilisation</a></li>
                            <li><a href="../assets/#">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                        <!-- Search -->
                        <div class="header_search">
                            <form action="#" id="header_search_form">
                                <input type="text" class="search_input" placeholder="Recherche..." required="required">
                                <button class="header_search_button"><img src="../assets/images/search.png" alt="icon recherche"></button>
                            </form>
                        </div>
                        <!-- User -->
                        <div class="user"><a href="../assets/Login.html">
                                <div><img src="../assets/images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            </a></div>
                        <!-- Cart -->
                        <div class="cart"><a href="../assets/cart.html">
                                <div><img src="../assets/images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
                                    <div>1</div>
                                </div>
                            </a></div>
                        <!-- Phone -->
                        <!-- <div class="header_phone d-flex flex-row align-items-center justify-content-start">
						    <div><div><img src="../assets/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
						    <div>+216 55 685 313</div>
					    </div> -->
                    </div>
                </div>
            </header>

            <div class="super_container_inner">
                <div class="super_overlay"></div>

                <!-- Home -->

                <div class="home">
                    <div class="home_container d-flex flex-column align-items-center justify-content-end">
                        <div class="home_content text-center">
                            <div class="home_title">Panier</div>
                            <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                                <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                                    <li><a href="../assets/index.html"></a>Acceuil</li>
                                    <li>Votre panier</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <style> input[type=number]::-webkit-inner-spin-button,
                    input[type=number]::-webkit-outer-spin-button {
                        opacity: 1;}
                    input[type="number"], input[type="text"], textarea, select {
                        outline: none;
                        color: transparent;
                        text-shadow: 0 0 0 black;}
                    .QQQ{
                        width:60px;
                        height: 27px;
                        border: none;
                        text-align-last: center;
                    }
                </style>
                <!-- Cart -->

                <div class="cart_section">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="cart_container">

                                    <!-- Cart Bar -->
                                    <div class="cart_bar">
                                        <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                                            <li class="mr-auto">Produits</li>
                                            <!--<li>Couleur</li>
                                            <li>Taille</li>-->
                                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prix</li>
                                            <li>&nbsp;&nbsp;&nbsp;&nbsp;Quantité</li>
                                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</li>
                                            <li>&nbsp;Supprimer</li>
                                        </ul>
                                    </div>
<?php
$panierC=new Paniers();
$listePanier=$panierC->recupererPanier($_SESSION["ID"]);
$i=0;
$totals=0;
foreach ($listePanier as $key)
{$i++;
    $produitC=new Produits();
$listeProduit=$produitC->recupererProduit($key['ID_Produit']);
foreach ($listeProduit as $here)
{
?>
        <script>

									function myfunc3(reff, idp) {
										//var alr = document.getElementById('test').value ;
                                        //alert('tre');
										//alert(reff+idp);
										var fah = reff; // =zzz
										var fahh = idp;
										//var fah =document.getElementById('test').value;
										//$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
										$.ajax({
                                            cache:false,
											url: "upload4.php",
											method: "POST",
											//data: 'nome='+fah,
											data: {
												nomee: fahh,
												nome: fah
											},
											success: function(data) {

												// $('#test').html(data);
												//$().html(data);
												//document.getElementById(s1).innerHTML(data);
												//s1.html(data);
												//$(#s1).html(data);
												$('#'+'B'+fah).html(data);
												//alert ('success');
											}
										});
									}

                                    
		</script>
<!--  tebda houni-->
                                    <!-- Cart Items -->
                                    <div class="cart_items">
                                        <ul class="cart_items_list">

                                            <!-- Cart Item -->
                                            <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                                                <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                    <div>
                                                        <div class="product_number"><?php echo $i ;?></div>
                                                        <input type="hidden" id="WTF">
                                                    </div>
                                                    <div>
                                                    <div class="product_image" id="B<?PHP echo $here['reference']; ?>">
												<script>
                                                    myfunc3("<?PHP echo $here['reference']; ?>","<?PHP echo $key['ID_Projet']; ?>");
												</script>
											</div>
                                                    </div>
                                                    <div class="product_name_container">
                                                        <div class="product_name"><a href="../assets/product.html"><?php echo $here['nom'];?></a></div>
                                                        <div class="product_text"><?php echo $here['categorie'];?></div>
                                                    </div>
                                                </div>
                                                <!--<div class="product_color product_text"><span>Color: </span>beige</div>
                                                <div class="product_size product_text"><span>Size: </span>L</div>-->
                                                <div class="product_price product_text"><span>Price: </span><?php echo $here['prix'];?>&nbsp;DT</div>
                                                <div class="product_quantity_container">
                                                    <div class="product_quantity ml-lg-auto mr-lg-auto text-center">
                                                       <!-- <span class="product_text product_num">1</span>
                                                        <div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
                                                        <div class="qty_add qty_button trans_200 text-center"><span>+</span></div>-->
                                                        <input type="number" min="1" class="QQQ" value="<?php echo $key['Quantite'];?>" id="Quantite_<?PHP echo $here['reference']; ?>"  onclick="myfunc5(<?php echo $key['ID_Panier'];?>,this.value,'<?PHP echo 'total_'.$here['reference'];?>',<?php echo $here['prix'];?>,<?php echo $key['Quantite'];?>)" onkeyup="myfunc5(<?php echo $key['ID_Panier'];?>,this.value,'<?PHP echo 'total_'.$here['reference'];?>',<?php echo $here['prix'];?>,<?php echo $key['Quantite'];?>)">
                                                                                                                             <!-- HERE -->
                                                    </div>

                                                </div>
                                                <?php //$total=$key['Quantite']*$here['prix'];?>
                                                                                                                            <!-- HERE -->
                                                <div class="product_total product_text" "><span></span><input type="text" id="total_<?PHP echo $here['reference'];?>" value="<?php $total=$key['Quantite']*$here['prix'];echo $total;?>" style="width: 115px;border: none" readonly>DT</div>
                                                <a  href="supprimerPanier.php?ID_Panier=<?PHP echo $key['ID_Panier'];?>" title="" class="btn tooltip-link product-edit">
                                                    <i class="material-icons action-enabled">clear</i></a>
                                            </li>
                                        </ul>
                                    </div>
                                <?php $totals=$totals + ($key['Quantite']*$here['prix']);?>

<!-- toufa houni -->
<?php } } ?>

                                    <!-- Cart Buttons -->
                                    <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                                        <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                            <div class="button button_clear trans_200"><a href="ViderPanier.php?ID_Panier=<?PHP echo $_SESSION['ID'];?>">Vider le panier</a></div>
                                            <div class="button button_continue trans_200"><a href="../assets/category.html">Continuer le Shopping</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row cart_extra_row">
                            <div class="col-lg-6">
                                <div class="cart_extra cart_extra_1">
                                    <div class="cart_extra_content cart_extra_coupon">
                                        <div class="cart_extra_title">Code de coupon</div>
                                        <div class="coupon_form_container">
                                            <form action="#" id="coupon_form" class="coupon_form">
                                                <input type="text" class="coupon_input" required="required">
                                                <button class="coupon_button" style="width: 150px;">appliquer</button>
                                            </form>
                                        </div>
                                        <div class="coupon_text">Veuillez Saisir le code de votre coupon ici.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 cart_extra_col">
                                <div class="cart_extra cart_extra_2">
                                    <div class="cart_extra_content cart_extra_total">
                                        <div class="cart_extra_title">Total du panier</div>
                                        <ul class="cart_extra_total_list">
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <div class="cart_extra_total_title">Total avant livraison</div>
                                                <div class="cart_extra_total_value ml-auto"><input type="text" id="Total_Panier" value="<?php echo $totals; ?>" style="width: 115px;border: none;background: transparent" readonly>DT</div> <!-- HERE -->
                                            </li>
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <div class="cart_extra_total_title">Frais de la livraison</div>
                                                <div class="cart_extra_total_value ml-auto">Free</div>
                                            </li>
                                            <li class="d-flex flex-row align-items-center justify-content-start">
                                                <div class="cart_extra_total_title">Total TTC</div>
                                                <div class="cart_extra_total_value ml-auto">29.90DT</div>
                                            </li>
                                        </ul>
                                        <div class="checkout_button trans_200"><a href="../assets/checkout.html">proceder au paiement</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->

                <footer class="footer">
                    <div class="footer_content">
                        <div class="container">
                            <div class="row">

                                <!-- About -->
                                <div class="col-lg-4 footer_col">
                                    <div class="footer_about">
                                        <div class="footer_logo">
                                            <a href="../assets/#">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <div class="footer_logo_icon"><img src="../assets/images/logo_Escope.png" alt="E-Scope" width="300" height=auto></div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Description ENACTUS</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Links -->
                                <div class="col-lg-4 footer_col">
                                    <div class="footer_menu">
                                        <div class="footer_title">Support</div>
                                        <ul class="footer_list">
                                            <li>
                                                <a href="../assets/#">
                                                    <div>Customer Service<div class="footer_tag_1">online now</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="../assets/#">
                                                    <div>Return Policy</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Contact -->
                                <div class="col-lg-4 footer_col">
                                    <div class="footer_contact">
                                        <div class="footer_title">Abonnez Vous !</div>
                                        <div class="newsletter">
                                            <form action="#" id="newsletter_form" class="newsletter_form">
                                                <input type="email" class="newsletter_input" placeholder="Votre Email..." required="required">
                                                <button class="newsletter_button">+</button>
                                            </form>
                                        </div>
                                        <div class="footer_social">
                                            <div class="footer_title">Social</div>
                                            <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="../assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="../assets/#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                <li><a href="../assets/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="../assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bar">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                        <div class="copyright order-md-1 order-2">
                                            Copyright &copy;<script>
                                                document.write(new Date().getFullYear());
                                            </script> All rights reserved | This template is made by WASP</div>
                                        <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                                <li><a href="../assets/category.html">Jare Drops</a></li>
                                                <li><a href="../assets/category.html">Acorn+</a></li>
                                                <li><a href="../assets/category.html">E-Scope</a></li>
                                                <li><a href="../assets/category.html">Pure Life</a></li>
                                                <li><a href="../assets/#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

    <script>

        /*$(document).on('change', '#QQ', function(){
            alert("1");
            //var Quantite = document.getElementById('QQ').value ;
            //var id = document.getElementById('').value ;
                $.ajax({

                    //async:true,
                    url:"Quantite_Refresh.php",
                    method:"POST",
                    //data:{Quantite:Quantite,id:id},
                    cache:false,
                    success:function(data)
                    {
                        alert("2");
                        //$('#employee_table').html(data);
                    }
                })


        });*/
       //  $(document).ready(function() {

       /*$(document).on('change', '#Q', function () {
           alert("1");
           //var Quantite = document.getElementById('QQ').value ;
           //var id = document.getElementById('').value ;
           $.ajax({

               //async:true,
               url: "Quantite_Refresh.php",
               method: "POST",
               //data:{Quantite:Quantite,id:id},
               cache: false,
               success: function (data) {
                   alert("2");
                   //$('#employee_table').html(data);
               }
           })
       });*/
       //});
        //
        function myfunc5(a,b,c,d,old_q)
        { //var thisdotvalue = document.getElementById(b).value;
        //if (thisdotvalue ==""){thisdotvalue=0;}
            //var fahh = '1';
            //var fah = 7;
            //if (b==""){b="0";}
           // alert ('ID Panier : '+a+' new total : '+b*d+' old quantite : '+old_q+' prix produit  : '+' old total : '+document.getElementById(c).value);
           //// document.getElementById('Total_Panier').value = parseInt(document.getElementById('Total_Panier').value) + (d*(old_q-b))  ;
            <!-- HERE -->
            var x =(b*d) - parseFloat(document.getElementById(c).value);
            document.getElementById('Total_Panier').value = parseFloat(document.getElementById('Total_Panier').value) + x  ;
            document.getElementById(c).value= parseFloat(d*b);
            <!-- HERE -->
           // alert(c);
            //var Quantite = document.getElementById('QQ').value ;
            //var id = document.getElementById('').value ;
            $.ajax({

                url: "Quantite_Refresh.php",
                method: "POST",
                //data: 'nome='+fah,
                data: {
                    nomee: a,
                    nome: b
                },
                success: function (data) {
                   // alert("2");
                    $('#WTF').html(data);
                }
            })
        }
          $(document).ready(function() {

         $(document).on('click', '.Q', function () {
             var fahh = '1';
             var fah = 7;
             //alert("1");
             //var Quantite = document.getElementById('QQ').value ;
             //var id = document.getElementById('').value ;
             $.ajax({
                 cache:false,
                 url: "Quantite_Refresh.php",
                 method: "POST",
                 //data: 'nome='+fah,
                 data: {
                     nomee: fahh,
                     nome: fah
                 },
                 success: function (data) {
                       //alert("2");
                     //$('#WTF').html(data);
                 }
             })
         });
        });
        </script>

        <script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/styles/bootstrap-4.1.2/popper.js"></script>
        <script src="../assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
        <script src="../assets/plugins/greensock/TweenMax.min.js"></script>
        <script src="../assets/plugins/greensock/TimelineMax.min.js"></script>
        <script src="../assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="../assets/plugins/greensock/animation.gsap.min.js"></script>
        <script src="../assets/plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="../assets/plugins/easing/easing.js"></script>
        <script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
        <script src="../assets/js/cart.js"></script>
    </body>
<?php } ?>
    </html>

