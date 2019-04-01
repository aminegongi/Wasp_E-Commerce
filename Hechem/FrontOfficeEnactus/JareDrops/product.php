<?php
include "../core/AddNewsletterC.php";
$idEspace=2; //id de l'espace
$sql="SELECT * from Banniere ";
$db = config::getConnexion();
$result=$db->query($sql);
$img="default.gif";
$n="ParDefaut";  
$url="";
foreach($result as $row){
    $id=$row['id'];
    $nom=$row['Nom'];
    $espace=$row['espaceBanniereProjet'];
    $dateD=$row['dateDebut'];
    $dateF=$row['dateFin'];
    $dateA=$row['dateAjout'];
    $url=$row['lienURL'];
    $desc=$row['description'];
	$cheminImage=$row['image'];
	$dateActuel=date("Y-m-d");
	if (($dateActuel >= $dateD) and ($dateActuel < $dateF))
	{
		$sql1="SELECT * FROM espacebanniereprojet WHERE NomProjet=\"$espace\"";
		$db1 = config::getConnexion();
		$result1=$db1->query($sql1);
		$numP=0;
		foreach($result1 as $row1){
			$idP=$row1['id'];
			$nomP=$row1['NomProjet'];
			$numP=$row1['NumProjet'];
		}
		if($numP==$idEspace)
		{
			$img=$cheminImage;
			$n=$nom;
			break;
		}
		else
		{
			$img="default.gif";
			$n="ParDefaut";  
			$url="";
		}
	}
	else
	{
		$img="default.gif";
		$n="ParDefaut";  
		$url="";
	}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css">
<link rel="stylesheet" type="text/css" href="styles/product.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
</head>
<body>

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
			<li><a href="index.html">Acceuil</a></li>
			<li><a href="category.html">Categorie</a></li>
			<li><a href="#">Guide d'utilisation</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+216 55 685 313</div>
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
						<div><img src="images/logo_1.png" alt="Jaredrops" width="80" height=auto></div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.html">Acceuil</a></li>
					<li><a href="category.html">Categorie</a></li>
					<li><a href="#">Guide d'utilisation</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Recherche..." required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>
					</form>
				</div>
				<!-- User -->
				<div class="user"><a href="Login.html"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.html"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Phone -->
				<!-- <div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
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
					<div class="home_title">Produits</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Jaredrops</a></li>
							<li><a href="category.html">Acceuil</a></li>
							<li>Produit</li>
						</ul>
					</div>
				</div>
			</div>
        </div>
        <!-- BBANNIEERE PUBLICITE -->
        <!-- <div style=" padding-top:20px; padding-left:150px; padding-right:150px; padding-bottom:80px; width: 1500px; height: 150px; "> -->
        <div style="width: 100%;height: 160px; padding-top: 20px;padding-left:200px; padding-right:200px; padding-bottom:80px;">
            <a href="<?php echo $url ?>"><img height="160" width="1250" src="../../BackOfficeENACTUS/images/ImageBanniereUpload/<?php echo $img ?>" alt="<?php echo $n ?>"></a>
        </div>
		<!-- Product -->

		<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
								<ul class="slides">
										<li>
												<div><img src="images/product_1.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_2.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_3.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_4.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_5.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_6.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_7.jpg" /></div>
											</li>
											<li>
												<div><img src="images/product_8.jpg" /></div>
											</li>
								</ul>
							</div>
							<div class="carousel_container">
								<div id="carousel" class="flexslider">
									<ul class="slides">
										<li>
											<div><img src="images/product_1.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_2.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_3.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_4.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_5.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_6.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_7.jpg" /></div>
										</li>
										<li>
											<div><img src="images/product_8.jpg" /></div>
										</li>
									</ul>
								</div>
								<div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>

					<!-- Product Info -->
					<div class="col-lg-6 product_col">
						<div class="product_info">
							<div class="product_name">Nom du produit</div>
							<div class="product_category">Dans <a href="category.html">Categories</a></div>
							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="product_reviews">4.7 De (3514)</div>
								<div class="product_reviews_link"><a href="#">Avis</a></div>
							</div>
							<div class="product_price">4<span>.99</span>Dt</div>
							<div class="product_text">
								<h1>Description :</h1>
								<p>Description du produit</p>
								</div>
							<div class="product_buttons">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
									<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
									</div>
									<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="Modifier ce text">
							<div class="mt-auto"><div class="box_image"><img src="images/boxes_1.png" alt=""></div></div>
							<br>
							<div class="box_content">
								<div class="box_title">Guide de Taille</div>
								<div class="box_text">Modifier ce text</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 box_col">
						<div class="Modifier ce text">
							<div class="mt-auto"><div class="box_image"><img src="images/boxes_2.png" alt=""></div></div>
							<br>
							<div class="box_content">
								<div class="box_title">Livraison</div>
								<div class="box_text">Modifier ce text</div>
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
											<div class="footer_logo_icon"><img src="images/logo_1.png" alt="Jaredrops"  width="200" height=auto></div>
										</div>
									</a>		
								</div>
								<div class="footer_about_text">
									<p>Description Enactus</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="#"><div>Service Client<div class="footer_tag_1">en ligne</div></div></a>
									</li>
										<li>
											<a href="#"><div>Size Contact<div class="footer_tag_2">Recommendé</div></div></a>
										</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Abonnez Vous !</div>
								<div class="newsletter">
									<form action="#" method="POST" id="newsletter_form" class="newsletter_form">
										<input type="email" class="newsletter_input" name="emailNewsInput" placeholder="Votre Email..." required="required">
										<button type="submit" value="ajouter" name="ajouter" class="newsletter_button">+</button>
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
								<div class="copyright order-md-1 order-2">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by WASP</div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="category.html">Jare Drops</a></li>
										<li><a href="category.html">Acorn+</a></li>
										<li><a href="category.html">EScope</a></li>
										<li><a href="category.html">Pure Life</a></li>
										<li><a href="#">Contact</a></li>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="js/product.js"></script>

<?PHP

if (isset($_POST['ajouter']))
{
    $AddNewsletterC=new AddNewsletterC ();
       $AddNewsletterC ->AjouterAdresseListeContact($_POST['emailNewsInput']);
}
?>

</body>
</html>