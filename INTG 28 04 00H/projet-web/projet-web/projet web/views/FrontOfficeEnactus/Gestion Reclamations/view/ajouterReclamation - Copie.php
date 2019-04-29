<!DOCTYPE html>
<html lang="en">
<head>
<title>ajouter une reclamation</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/ajouter_reclamation.css">
<link rel="stylesheet" type="text/css" href="styles/ajouter_reclamation_responsive.css">
</head>
<body>
	<script type="text/javascript" src="js/controle.js"></script>


<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Recherche" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Ajouter Une Reclamation</a></li>
			<br>
			<li><a href="#">Consulter Vos Reclamations</a></li>
			<br>
			<li><a href="#">Modifier Une Reclamation</a></li>
			<br>
			<li><a href="#">Supprimer Une Reclamation</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+216 58 053 785</div>
		</div>
		<div class="menu_social">
			<ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="imgy/pte.png" alt="" style="height: 50px;"></div>
						<div>Réclamations</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Home Deco</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Recherche" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+216 58 053 785</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Ajouter Une Reclamation</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Acceuil</a></li>
							<li>Reclamations</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Checkout -->

		<div class="checkout">
			<div class="container">
				<div class="row">
					

                    <!-- Cart Total -->
                    <?PHP include "../core/config.php";
                         $sql="SELECT nomCategorie FROM categorier";
                         $db = config9::getConnexion();
                            try{
                                $listeCategorie=$db->query($sql);
                            }
                            catch (Exception $e){
                                die('Erreur: '.$e->getMessage());
                            }	
                    ?>
					<div class="col-lg-6 cart_col">
						<form method="POST" action ="ajouter_reclamation.php" class="cart_total">
							<div class="cart_extra_content cart_extra_total">
								<div name =  class="payment_options">
									<div style="left: 370px;" class="checkout_title">Catégorie</div>
									<div style="left: 335px;" class="cart_text">
									<p>Cette reclamation est a propos:</p>
								
                                <div style="left:45px;">
                                <select style="height:44px; text-align:center;border-radius: 3px;color:grey; " name="nomCategorie" >
                                
                                    <?PHP 
                                    foreach($listeCategorie as $row){
                                    ?>
                                    <option  value="<?PHP echo $row['nomCategorie']?>"><?PHP echo $row['nomCategorie']?></option>
                                    <?PHP } ?>  
                                    <option  value="autre">Autre</option>
                                </select>
                                </div>
                                </div>
								</div>
							</div>

										
										<div style="left: 190px;" class="checkout_form_container">
											
			
												<div style="left: 185px;" class="checkout_title">Désignation</div>
												<div class="row">
													<div class="col-lg-6">Désignation (entre 3 et 20 léttres):
														<!-- Name -->
														<input name="designation" style="width: 550px;"  type="text" id="checkout_name" class="checkout_input" placeholder="" required="required" onblur="CheckInfoDesignation(this)">
														<h6 id="msg_err_designation" style="color:red;font-size: 12px;"> </h6>
													</div>
												</div>
												
												<div style="left: 185px;" class="checkout_title">Déscription</div>
												<div class="row">
													<div class="col-lg-6">Description (maximum 200 caractéres):
														<!-- Name -->
														<textarea name="description" style="width: 550px; height: 220px;"  type="text" id="checkout_name" class="checkout_input" placeholder="" required="required" onblur=""> </textarea>
														<h6 id="msg_err_description" style="color:red;font-size: 15px;"> </h6>
			
													</div>
												</div>
												<div style="left: 130px;" ><input value="Ajouter" name="valider" type = "submit" class="checkout_button trans_200" style="color:white;border:0px;"></div>
						
					</div>
					
	
									
									</form>
									
								
								</div>
				
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
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<!--<div class="footer_logo_icon"><img style="left:100px;height: 100px;" src="imgy/pte.png" alt=""></div>-->
											<div style="left: 50px; ">Réclamations</div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Ici vous pouvez créer des reclamation afin de nous aider a ameliorer notre site.</p>
								</div>
							</div>
						</div>
						
						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Service client<div class="footer_tag_1"></div></div></a>
									</li>
									<li>
										<a href="#"><div>Conditions de retour</div></a>
									</li>
									<li>
										<a href="#"><div>Guide d'utilisation<div class="footer_tag_2">recommendé</div></div></a>
									</li>
									<li>
										<a href="#"><div>Termes et conditions</div></a>
									</li>
									<li>
										<a href="#"><div>Contact</div></a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Restez en contact</div>
								<div class="newsletter">
									<form action="#" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" placeholder="sous-scrire a notre lettre de nouvautés" required="required">
										<button class="newsletter_button">+</button>
									</form>
								</div>
								<div class="footer_social">
									<div class="footer_title">Social</div>
									<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
								<div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="category.html">Le produit</a></li>
										<li><a href="category.html">Accéssoires</a></li>
										<li><a href="category.html">Sérvices dinstallation</a></li>
										<li><a href="category.html">Page d'acceuil</a></li>
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


<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>

</body>
</html>