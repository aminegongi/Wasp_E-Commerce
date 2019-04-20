<?php
                                        include "../../../../core/ProjetC.php";
                                        if (isset($_GET['ID'])){
																					$idprojet=$_GET['ID'];
                                            $ProjetC=new ProjetC();
                                            $listeProjet=$ProjetC->recupererProjet($_GET['ID']);
                                        foreach($listeProjet as $row){

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>E-Scope</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../assets/styles/responsive.css">
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
			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="../assets/images/search.png" alt=""></button>
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
			<div><div><img src="../assets/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
			<div>+21- 55 685 313</div>
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
						<div><img src="../../../Back Office ENACTUS/Les Modules/Gestion Projets/<?php echo $row['logo']; ?>" alt="E-Scope" width="200" height=auto ></div>
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
				<div class="user"><a href="../assets/Login.html"><div><img src="../assets/images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Cart -->
				<div class="cart">
					<a href="../assets/cart.html">
						<div>
							<img src="../assets/images/cart.svg" alt="https://www.flaticon.com/authors/freepik">
							<div>1</div>
						</div>
					</a>
				</div>
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

		<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="../assets/videos/test.webm" type="video/webm">
        <source src="../assets/videos/test.mp4" type="video/mp4">
        <source src="../assets/videos/test.ogv" type="video/ogg">
    </video>
		</div>

		<!-- ProductsMain -->
		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Nos Produits Recommandé</div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li><a href="../assets/category.html">Categories</a></li>
								<!-- <li><a href="../assets/category.html">carte electronique</a></li> -->
								<li class="active"><a href="../assets/category.html">Recommandé</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">

					<!-- Product -->

					<?php
					$ProjetC=new ProjetC();
					$produits=$ProjetC->recupererProduit_id_projet($idprojet);
					foreach($produits as $key)
{?>

<script>
                                            function load() {
                                                alert('hehexd');
                                            }
                                            var zzz ="<?PHP echo $key['reference']; ?>" ;
                                            var zzzz = "<?PHP echo $key['id_projet']; ?>";
																						//alert(zzz+zzzz);
                                            function myfunc() {
                                                //var alr = document.getElementById('test').value ;
                                                //alert(alr);
                                                var fah = zzz ; // =zzz
                                                var fahh = zzzz ;
                                                   //var fah =document.getElementById('test').value;
                                                    //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
                                                    $.ajax({
                                                        url:"upload2.php",
                                                        method:"POST",
                                                        //data: 'nome='+fah,
                                                        data: {nomee:fahh,nome:fah},
                                                        success:function(data){

                                                           // $('#test').html(data);
                                                            //$().html(data);
                                                            //document.getElementById(s1).innerHTML(data);
                                                            //s1.html(data);
                                                            //$(#s1).html(data);
                                                            $('#'+fah).html(data);
                                                        }
                                                    });
                                            }
                                            function myfunc2() {
                                                //var alr = document.getElementById('test').value ;
                                                //alert(alr);
                                                var fah = '111111';
                                                //var fah =document.getElementById('test').value;
                                                //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
                                                $.ajax({
                                                    url:"upload2.php",
                                                    method:"POST",
                                                    data: 'nome='+fah,
                                                    success:function(data){

                                                         $('#111111').html(data);
                                                        //$().html(data);
                                                        //document.getElementById(s1).innerHTML(data);
                                                        //s1.html(data);
                                                        //$(#s1).html(data);
                                                        //$('').html(data);
                                                    }
                                                });
                                            }
 </script>

					<div class="col-xl-4 col-md-6">
						<div class="product">
							<div class="product_image" id="<?PHP echo $key['reference']; ?>">
							<input type="hidden" id="<?PHP echo $key['reference']; ?>" value="<?PHP echo $key['reference']; ?>" >
							<script>myfunc();</script>

							</div>

							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
											<div class="product_name"><a href="#"><?php echo $key['nom'] ;?></a></div>
											<div class="product_category">In <a href="../assets/category.html">Category</a></div>
										</div>
									</div>
									<div class="ml-auto text-right">
										<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
										<div class="product_price text-right"><?php echo $key['prix'] ;?> TND</div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">
										<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="../assets/images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
										<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="../assets/images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>




				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="../assets/category.html">+ de Produit</a></div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>
		<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_1.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="../assets/category.html">
												<div class="background_image" style="background-image:url(images/box_1_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Autres Projets</div>
									</div>
								</div>
							</div>

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_2.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="../assets/category.html">
												<div class="background_image" style="background-image:url(images/box_2_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Choix Populaire</div>
									</div>
								</div>
							</div>

							<!-- Box -->
							<div class="box">
								<div class="background_image" style="background-image:url(images/box_3.jpg)"></div>
								<div class="box_content d-flex flex-row align-items-center justify-content-start">
									<div class="box_left">
										<div class="box_image">
											<a href="../assets/category.html">
												<div class="background_image" style="background-image:url(images/box_3_img.jpg)"></div>
											</a>
										</div>
									</div>
									<div class="box_right text-center">
										<div class="box_title">Choix Populaire</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="../assets/images/icon_1.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Payement rapide et securisé</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="../assets/images/icon_2.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Meilleur produits</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="../assets/images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Livraison a votre domicile</div>
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
											<div class="footer_logo_icon"><img src="../../../Back Office ENACTUS/Les Modules/Gestion Projets/<?php echo $row['logo']; ?>" alt="E-Scope"  width="300" height=auto></div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>Description ENACTUS</p>
								</div>
							</div>
						</div>
<?php } } ?>
						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Support</div>
								<ul class="footer_list">
									<li>
										<a href="../assets/#"><div>Service Client<div class="footer_tag_1">En ligne maintenant</div></div></a>
									</li>
									<li>
										<a href="../assets/#"><div>Politique & Conditions</div></a>
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
<script src="../assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../assets/plugins/easing/easing.js"></script>
<script src="../assets/plugins/progressbar/progressbar.min.js"></script>
<script src="../assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>