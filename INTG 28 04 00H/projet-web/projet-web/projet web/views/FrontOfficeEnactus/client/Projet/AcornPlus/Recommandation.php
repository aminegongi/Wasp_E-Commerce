<?php
include "../../../../../core/ProjetC.php";
session_start();
if (isset($_GET['ID'])) {
	$idprojet = $_GET['ID'];
	$ProjetC = new ProjetC();
	$listeProjet = $ProjetC->recupererProjet($_GET['ID']);
	foreach ($listeProjet as $row) {

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title><?php echo $row['nom'] ?> - Recommandation</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/category.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/category_responsive.css">
</head>
<body>

<!-- Menu -->

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

<div class="menu">

	<!-- Search -->
	<div class="menu_search">
		<form action="#" id="menu_search_form" class="menu_search_form">
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="../assets/images/search.png" alt=""></button>
		</form>
	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
		<li><a href="../../indexClient.php">ENACTUS ICT</a></li>
			<li><a href="#">Acceuil</a></li>
			<li><a href="#">Les Produits</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="../assets/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
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
				<a href="../../indexClient.php">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="../../../../Back Office ENACTUS/Les Modules/Gestion Projets/<?php echo $row['logo']; ?>" alt="<?php echo $row['nom']; ?>" width="80" height=auto ></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
		
				<li><a href="../../indexClient.php">ENACTUS ICT</a></li>
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
						<button class="header_search_button"><img src="../assets/images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="../../EspaceClient/ProfilClient-Informations.php"><div><img src="../assets/images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="../../panier/cart.php"><div><img class="svg" src="../assets/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title"><h1><?php echo $row['nom'] ?></h1></div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row products_bar_row">
					<div class="col">
						<div class="products_bar d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
							<h3>Les Produits Recommandés</h3>
						</div>
					</div>
				</div>
				
				<!-- Main Prod -->
				<div class="row products_row products_container grid">				
					<!-- Product -->
					<?php
								$idclc=$_SESSION['ID'];
								$sql="SELECT * FROM produit inner join recommandation on produit.id=recommandation.id_produit where recommandation.cible=(SELECT profession FROM `client` WHERE id='$idclc') AND produit.id_projet='$idprojet'";
								//$ProjetC = new ProjetC();
								//$produits = $ProjetC->recupererProduit_id_projet($idprojet);
								$db = configP::getConnexion();
								$produits=$db->query($sql);
								$n = 0;
								$ref = "";
								$idP = "";
								foreach ($produits as $key) {
									$ref = $key['reference'];
									$idP = $key['id_projet'];
									$nom=$key['nom'];
									$prix=$key['prix'];
									?>
									<script>
										var zzz = "<?PHP echo $ref; ?>";
										var zzzz = "<?PHP echo $idP; ?>";
										//alert(zzz+zzzz);
										function myfunc() {
											//var alr = document.getElementById('test').value ;
											//alert(alr);
											var fah = zzz; // =zzz
											var fahh = zzzz;
											//var fah =document.getElementById('test').value;
											//$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
											$.ajax({
												url: "upload2.php",
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
													$('#' + fah).html(data);
												}
											});
										}
									</script>
					<div class="col-xl-4 col-md-6 grid-item new">
						<div class="product">
							<div class="product_image" id="<?PHP echo $key['reference']; ?>">
												<script>
													myfunc();
												</script>
											</div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="product1.php?reference=<?PHP echo $key['reference']; ?>&idprojet=<?PHP echo $key['id_projet']; ?>"><?php echo $key['nom']; ?></a></div>
											<div class="product_category">In <a href="../assets/category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="product_price text-right"><?php echo $key['prix']; ?><span> TND</span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<?php $n++; ?>
														<div id="myBtn<?php echo $n; ?>" style="width:100%;" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
															<div>
																<div><img src="../assets/images/cart.svg" class="svg" alt="">
																	<div>+</div>
																</div>
															</div>
														</div>
									</div>
								</div>
							</div>
						</div>
					</div>
														<!--Ajouter au panier-->
														<style>
										/* The Modal (background) */
										.modal {
											display: none;
											/* Hidden by default */
											position: fixed;
											/* Stay in place */
											z-index: 1;
											/* Sit on top */
											padding-top: 100px;
											/* Location of the box */
											left: 0;
											top: 0;
											width: 100%;
											/* Full width */
											height: 100%;
											/* Full height */
											overflow: auto;
											/* Enable scroll if needed */
											background-color: rgb(0, 0, 0);
											/* Fallback color */
											background-color: rgba(0, 0, 0, 0.4);
											/* Black w/ opacity */
										}

										/* Modal Content */
										.modal-content {
											background-color: #fefefe;
											margin: auto;
											padding: 20px;
											border: 1px solid #888;
											width: 60%;
											height: 60%;
										}

										/* The Close Button */
										.close {
											color: #aaaaaa;
											float: right;
											font-size: 28px;
											font-weight: bold;
										}

										.close:hover,
										.close:focus {
											color: #000;
											text-decoration: none;
											cursor: pointer;
										}
									</style>

									<!-- The Modal -->
									<div id="myModal<?PHP echo $n; ?>" class="modal">

										<!-- Modal content -->
										<div class="modal-content">
											<span class="close" style="margin-left:98%;">&times;</span>

											<!--form panier-->
											<div class="product">
												<div class="container">
													<div class="row">

														<!-- Product Image -->
														<div class="col-lg-6">
															<div class="product_image" id="A<?PHP echo $ref; ?>">
															</div>
														</div>

														<!-- Product Info -->
														<div class="col-lg-6 product_col">
															<div class="product_info">
																<!-- <div class="product_name"><h4><?PHP echo $nom; ?></h4></div> -->
																<div style="color:black;" class="product_text">
																	<h1><?PHP echo $nom; ?></h1>
																</div>
																<!-- <br>
																<div class="product_category">Dans <a href="../assets/category.html">Categories</a></div>
																<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
																	<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
																	<div class="product_reviews">4.7 De (3514)</div>
																	<div class="product_reviews_link"><a href="../assets/#">Avis</a></div>
																</div> -->
																<br>
																<h4>Prix du Produit:</h4>
																<div style="color:green;" class="product_price"><?PHP echo $prix; ?><span>TND</span></div>
																<br>

																	<form action="ajouterPanier.php" method="post">
																	<input style="width:30%;" class="form-control" name="quantite_produit" type="number" value="1" min="1">
																	<input name="id_Projet" type="hidden" value="<?php echo $idprojet ?>">
																	<input name="id_produit" type="hidden" value="<?php echo $ref ;?>">
																	<br>
																	<input style="width:200px" class="btn btn-warning" type="submit" value="Ajoute au Panier">
																</form>

															</div>
														</div>
													</div>
												</div>
											</div>
											<!--form panier-->
										</div>
									</div>

									<script>
										// Get the modal
										// Get the button that opens the modal
										var btn = document.getElementById("myBtn<?php echo $n; ?>");
										// When the user clicks the button, open the modal 
										btn.onclick = function() {
											myfunc3("<?PHP echo $ref; ?>", "<?PHP echo $idP; ?>");
											// Get the <span> element that closes the modal
											var span = document.getElementsByClassName("close")[<?php echo $n - 1; ?>];
											var modal = document.getElementById("myModal<?PHP echo $n; ?>");

											modal.style.display = "block";
											// When the user clicks on <span> (x), close the modal
											span.onclick = function() {
												modal.style.display = "none";
											}

											// When the user clicks anywhere outside of the modal, close it
											window.onclick = function(event) {
												if (event.target == modal) {
													modal.style.display = "none";
												}
											}
										}
										function NotClient()
									{
										var choix=confirm("Vous devez etre connecté pour ajouter au panier ! Voulez vous vous connectez ?");
										if (choix)
										{
											window.location.replace("../../login/login.php");
										}
										else
										{
											alert("Impossible d'ajouter au panier");
										}
									}
									</script>
									<!--</Ajouter au panier-->
								<?php } ?>
								<script>
									function myfunc3(reff, idp) {
										//var alr = document.getElementById('test').value ;
										//(reff+idp);
										var fah = reff; // =zzz
										var fahh = idp;
										//var fah =document.getElementById('test').value;
										//$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
										$.ajax({
											url: "upload3.php",
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
												$('#' + 'A' + fah).html(data);
											}
										});
									}
								</script>
					<!-- Product -->
				</div>
				
				<!-- Main Prod -->

				<div class="row page_nav_row">
					<div class="col">
						<div align="center" class="page_nav">
							<a class="btn btn-warning" href="index.php?ID=<?php echo $_GET['ID']; ?>">+ de Produit</a>
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
									<a href="../../indexClient.php">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="../../../../Back Office ENACTUS/Les Modules/Gestion Projets/<?php echo $row['logo']; ?>" alt="<?php echo $row['nom']; ?>"  width="300" height=auto></div>
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
<script src="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../assets/plugins/easing/easing.js"></script>
<script src="../assets/plugins/progressbar/progressbar.min.js"></script>
<script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../assets/plugins/Isotope/fitcolumns.js"></script>
<script src="../assets/js/category.js"></script>
</body>
<?php } }  ?>
</html>