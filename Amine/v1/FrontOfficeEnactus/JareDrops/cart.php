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
<title>Panier</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

		<!-- Search -->
		<div class="menu_search">
			<form action="#" id="menu_search_form" class="menu_search_form">
				<input type="text" class="search_input" placeholder="Recherche..." required="required">
				<button class="menu_search_button"><img src="images/search.png" alt="icon recherche"></button>
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
				<div><div><img src="images/phone.svg" alt="Phone Icon"></div></div>
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
							<div><img src="images/logo_1.png" alt="JarDrops" width="80" height=auto ></div>
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
							<button class="header_search_button"><img src="images/search.png" alt="icon recherche"></button>
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
					<div class="home_title">Panier</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="index.html">Acceuil</a></li>
							<li>Votre panier</li>
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
									<li>Couleur</li>
									<li>Taille</li>
									<li>Prix</li>
									<li>Quantité</li>
									<li>Total</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<ul class="cart_items_list">

									<!-- Cart Item -->
									<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
										<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
											<div><div class="product_number">1</div></div>
											<div><div class="product_image"><img src="images/cart_item_1.jpg" alt=""></div></div>
											<div class="product_name_container">
												<div class="product_name"><a href="product.html">Cool Flufy Clothing without Stripes</a></div>
												<div class="product_text">Infos secondaires</div>
											</div>
										</div>
										<div class="product_color product_text"><span>Color: </span>beige</div>
										<div class="product_size product_text"><span>Size: </span>L</div>
										<div class="product_price product_text"><span>Price: </span>3.99 DT</div>
										<div class="product_quantity_container">
											<div class="product_quantity ml-lg-auto mr-lg-auto text-center">
												<span class="product_text product_num">1</span>
												<div class="qty_sub qty_button trans_200 text-center"><span>-</span></div>
												<div class="qty_add qty_button trans_200 text-center"><span>+</span></div>
											</div>
										</div>
										<div class="product_total product_text"><span>Total: </span>3.99DT</div>
									</li>
								</ul>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200"><a href="#">Vider le panier</a></div>
									<div class="button button_continue trans_200"><a href="category.html">Continuer le Shopping</a></div>
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
										<div class="cart_extra_total_value ml-auto">29.90DT</div>
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
								<div class="checkout_button trans_200"><a href="checkout.html">proceder au paiement</a></div>
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
									<a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
								</li>
								<li>
									<a href="#"><div>Return Policy</div></a>
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
									<li><a href="category.html">E-Scope</a></li>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>

<?PHP

if (isset($_POST['ajouter']))
{
    $AddNewsletterC=new AddNewsletterC ();
       $AddNewsletterC ->AjouterAdresseListeContact($_POST['emailNewsInput']);
}
?>

</body>
</html>