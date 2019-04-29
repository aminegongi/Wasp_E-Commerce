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
$totalPanier=$_POST['Total_Panier'];
          ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Espace Paiement</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../assets/styles/checkout.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/checkout_responsive.css">
</head>
<body>

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
		<li><a href="../indexClient.php">ENACTUS ICT</a></li>
			<li><a href="#">Acceuil</a></li>
			<li><a href="#">Les Produits</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="../assets/images/phone.svg" alt="Phone Icon"></div></div>
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
					<div><img src="../../images/logo3.png" alt="ENACTUS ICT" width="140" height=auto></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="../indexClient.php">ENACTUS ICT</a></li>
			<li><a href="#">Acceuil</a></li>
			<li><a href="#">Les Produits</a></li>
			<li><a href="#">Contact</a></li>
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
				<div class="user"><a href="../EspaceClient/ProfilClient-Informations.php">
                                <div><img src="../assets/images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            </a></div>
				<!-- Cart -->
				<div class="cart"><a href="./cart.php"><div><img src="../assets/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
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
					<!-- <img src="../assets/aa.jpg" alt="" height="5" width=auto> -->
					<div class="home_title" > Espace Paiement </div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="../assets/index.html">Acceuil</a></li>
							<li>Espace Paiement</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->
		<div class="checkout">
			<div class="container">
				<div class="row">
					
					<!-- Billing -->
					<div class="col-lg-6">
						<div class="billing">
							<div class="checkout_title">DÉTAILS DE LA FACTURATION</div>
							<div class="checkout_form_container">
								<form action="#" id="checkout_form" class="checkout_form" name="checkout">
									<div class="row">
										<div class="col-lg-6">
											<!-- Name -->
											<input type="text" id="checkout_name" class="checkout_input" placeholder="Nom" required="required" onblur="CheckInfoLettre(this)" onkeyup="CheckInfoLettre(this)">
										</div>
										<div class="col-lg-6">
											<!-- Last Name -->
											<input type="text" id="checkout_last_name" class="checkout_input" placeholder="Prénom" required="required" onblur="CheckInfoLettre(this)" onkeyup="CheckInfoLettre(this)">
										</div>
									</div>
									<div>
										<!-- Company -->
										<input type="text" id="checkout_company" placeholder="Societe (option)" class="checkout_input" >
									</div>
									<div>
										<!-- Country -->
										<select name="checkout_country" id="checkout_country" class="dropdown_item_select checkout_input" require="required" onchange="City(this.id,'checkout_city')" onblur="CheckInfoSelectList(this,'country')"  >
											<option value="country" >Pays</option>
											<option value="Tunisie" >Tunisie</option>
											<option value="Afghanistan">Afghanistan </option>
											<option value="Afrique_Centrale">Afrique_Centrale </option>
										</select>
									</div>
									<div>
										<!-- Address -->
										<input type="text" id="checkout_address" class="checkout_input" placeholder="Adresse 1" required="required" onblur="CheckInfoLettreChiffre(this)" onkeyup="CheckInfoLettreChiffre(this)">
										<input type="text" id="checkout_address_2" class="checkout_input checkout_address_2" placeholder="Adresse 2" required="required" onblur="CheckInfoLettreChiffre(this)" onkeyup="CheckInfoLettreChiffre(this)">
									</div>
									<div>
										<!-- Zipcode -->
										<input type="text" id="checkout_zipcode" class="checkout_input" placeholder="Code Postal" required="required" onblur="CheckInfoChiffre(this)" onkeyup="CheckInfoChiffre(this)">
									</div>
									<div>
										<!-- City / Town -->
										<select name="checkout_city" id="checkout_city" class="dropdown_item_select checkout_input" require="required" onblur="CheckInfoSelectList(this,'city')" >
											<option value="city">Ville</option>
										</select>
									</div>
									<div>
										<!-- Phone no -->
										<input type="phone" id="checkout_phone" class="checkout_input" placeholder="Numéro de Télephone" required="required" onblur="CheckInfoNumero(this)" onkeyup="CheckInfoNumero(this)">
									</div>
									<div>
										<!-- Email -->
										<input type="phone" id="checkout_email" class="checkout_input" placeholder="Email" required="required" onblur="CheckInfoEmail(this)" onkeyup="CheckInfoEmail(this)">
									</div>
									<div class="checkout_extra">
										<ul>
											<li class="billing_info d-flex flex-row align-items-center justify-content-start">
												<label class="checkbox_container">
													<input type="checkbox" id="cb_1" name="billing_checkbox" class="billing_checkbox">
													<span class="checkbox_mark"></span>
													<span class="checkbox_text">Conditions d'utilisation</span>
												</label>
											</li>
											<li class="billing_info d-flex flex-row align-items-center justify-content-start">
												<label class="checkbox_container">
													<input type="checkbox" id="cb_3" name="billing_checkbox" class="billing_checkbox">
													<span class="checkbox_mark"></span>
													<span class="checkbox_text">S'inscrire à la Newsletter</span>
												</label>
											</li>
										</ul>
									</div>
								</form>
							</div>
						</div>
					</div>

					<!-- Cart Total -->
					<div class="col-lg-6 cart_col">
						<div class="cart_total">
							<div class="cart_extra_content cart_extra_total">
                            <form method="POST" action="confirmer_achat.php">
								<div class="checkout_title">Total Panier</div>
								<ul class="cart_extra_total_list">
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Panier</div>
										<div class="cart_extra_total_value ml-auto"><input type="text" name="totalpanier" style="background:transparent; border:none;" readonly value="<?php echo $totalPanier; ?>">TND</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Frais de livraison</div>
										<div class="cart_extra_total_value ml-auto">Gratuit</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div class="cart_extra_total_title">Total</div>
										<div class="cart_extra_total_value ml-auto">29.90 TND</div>
									</li>
								</ul>
								<div class="payment_options">
									<div class="checkout_title">MÉTHODE DE PAIEMENT</div>
									<ul>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_2" name="payment_radio" class="payment_radio" value="Paiement en Especes" checked>
												<span class="radio_mark"></span>
												<span class="radio_text">Paiement en Espèces </span>
											</label>
										</li>
										<li class="shipping_option d-flex flex-row align-items-center justify-content-start">
											<label class="radio_container">
												<input type="radio" id="radio_3" name="payment_radio" class="payment_radio" value="Paiement par Cheque" >
												<span class="radio_mark"></span>
												<span class="radio_text">Paiement par Chéque</span>
											</label>
										</li>
									</ul>
								</div>
								<div class="cart_text">
									<p>cher(e) client(e) afin de valider votre commande veuillez appeler notre service commercial: tel: 12 34 56 78 / 12 34 56 78 durant nos horaires de travail.
										<br>Sans votre validation téléphonique la commande ne sera pas traitée.</p>
										<select class="dropdown_item_select checkout_input" require="required" name="nomLivreur"  >


										<?php
										include "LivreurC.php";
										$livreurC=new LivreurC();
										$result=$livreurC->recupererNomLivreur();


										while ($row = $result->fetch_assoc()) {
										echo "<option>".$row['nom']."</option>";

										
										}
										


										?>


										</select>
										<?php
								
								$result2=$livreurC->recupererDescLivreur();
											echo "<div class='cart_text'>";
											while ($row2 = $result2->fetch_assoc()  ) {
												$mavariable = utf8_encode($row2['description']);

			          						echo "*".$row2['nom'] .": ".$mavariable ."<br>" ;

			          						echo "<br>" ;
			          						}
			          						echo "</div>";

								?>
								<br>

								<div>
									
									<textarea  type="text" name="designation" placeholder="Remarques pour la livraison" class="checkout_input"></textarea>

								</div>
                                </div>
								<!-- <div >Confirmer l'achat  -->
								<?php 
								$Paniers=new Paniers();
									$result=$Paniers->recupererPanier($_SESSION["ID"]);
									$PDO='';
									foreach($result as $keyr)
									{
										$PDO=$PDO.$keyr['ID_Produit']."|".$keyr['Quantite']."#";
									}
									// $PDO=substr($PDO,0,-1);
								?>
                                <input type="text" name="PDO" value="<?php echo $PDO;?>"  >
                                    <input type="hidden" value="<?php echo $_SESSION["ID"] ;?>" name="id_client_checkout" >
                                <input type="submit" >
                            
							</div>
						</div>
                    </div>
                    </form>
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
										<div><img src="../../images/logo3.png" alt="ENACTUS ICT" width="300" height=auto></div>
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
										<a href="../assets/#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
									</li>
									<li>
										<a href="../assets/#"><div>Return Policy</div></a>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by WASP</div>
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
<script src="../assets/js/checkout.js"></script>

</body>
<?php } ?>
</html>