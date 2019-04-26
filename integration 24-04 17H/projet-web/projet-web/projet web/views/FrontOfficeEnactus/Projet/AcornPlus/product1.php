<?php
include "../../../Back Office ENACTUS/Les Modules/gestion produit/php/core/Produits.php";
if(isset($_GET['reference']))
{
  $ref = $_GET['reference'];
  $Produits= new Produits();
  $result = $Produits->recupererProduit($ref);
  foreach ($result as $row)
  {
      $nom=$row['nom'];
      $reference=$row['reference'];
      $id_projet=$row['id_projet'];
      $quantite=$row['quantite'];
      $description=$row['description'];
      $prix=$row['prix'];
      $categorie=$row['categorie'];
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Produits</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="../assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/product.css">
    <link rel="stylesheet" type="text/css" href="../assets/styles/product_responsive.css">
</head>
<body>

<!-- -->

<script src="../../../../Back Office ENACTUS/Les Modules/gestion produit/AProduitJs.js"></script>
<script src="../../../../Back Office ENACTUS/Les Modules/gestion produit/ImageJS.js"></script>
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
            <input type="text" class="search_input" placeholder="Recherche" required="required">
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
                        <button class="header_search_button"><img src="../assets/images/search.png" alt=""></button>
                    </form>
                </div>
                <!-- User -->
                <div class="user"><a href="../assets/Login.html"><div><img src="../assets/images/user.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Cart -->
                <div class="cart"><a href="../assets/cart.html"><div><img src="../assets/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
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
                    <div class="home_title">Produits</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <li><a href="../assets/#">E-Scope <?php echo $_GET['reference'];?></a></li>
                            <li><a href="../assets/category.html">Acceuil</a></li>
                            <li>Produit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var zzz = "<?PHP echo $reference; ?>";
            var zzzz = "<?PHP echo $id_projet; ?>";
            //alert(zzz+zzzz);
            $(document).ready(function() {
                myfunc();
                function myfunc() {
                    //var alr = document.getElementById('test').value ;
                    //alert(alr);
                    var fah = zzz; // =zzz
                    var fahh = zzzz;
                    //var fah =document.getElementById('test').value;
                    //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
                    $.ajax({
                        url: "upload-im.php",
                        method: "POST",
                        //data: 'nome='+fah,
                        data: {
                            nomee: fahh,
                            nome: fah
                        },
                        success: function (data) {
                            // $('#test').html(data);
                            //$().html(data);
                            //document.getElementById(s1).innerHTML(data);
                            //s1.html(data);
                            //$(#s1).html(data);
                            $('#imme').html(data);
                        }
                    });
                }
            });
        </script>

        <!-- Product -->

        <div class="product">
            <div class="container">
                <div class="row" id="fahh">
                    <div class="galleryContainer" id="imme">
                    </div>
                    <!-- Product Image -->

                    <!-- Product Info -->
                    <div class="col-lg-6 product_col">
                        <div class="product_info">
                            <div class="product_name"><?php echo $nom;?></div>
                            <div class="product_category">Categorie <a href="../assets/category.html"><?php echo $categorie;?></a></div>
                            <div class="product_rating_container d-flex flex-row align-items-center justify-content-start">
                                <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                <div class="product_reviews"> De (3514)</div>
                                <div class="product_reviews_link"><a href="../assets/#">Avis</a></div>
                            </div> <?php $sep_point=strpos($prix,".");
                            if($sep_point!=0){
                            $Pri=substr($prix,0,$sep_point);
                            $virg=substr($prix,$sep_point,$sep_point+2);}
                            else {$Pri=$prix;$virg='';}
                            ?>
                            <div class="product_price"><?php echo $Pri;?><span><?php echo $virg;?></span>Dt</div>
                            <div class="product_text">
                                <h1>Description :</h1>
                                <p><?php echo $description;?></p>
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
                    </div>
                </div>
            </div>
        </div>

        <!-- Boxes -->
        <style>
            .galleryContainer{
                width: 100%;
                height: 440px;
                max-width: 400px;
                user-select: none;
                box-shadow: 0px 0px 3px 1px #00000078;
                padding: 10px;
                box-sizing: border-box;
                margin: 0 auto;
            }
            .galleryContainer #slideShowContainer {
                width: 100%;
                height: 90%;
                overflow: hidden;
                background-color: gainsboro;
                position: relative;
            }
            .galleryContainer #slideShowContainer .imagesHolder {
                width: 100%;
                height: 100%;
                position: absolute;
                opacity:0;

            }
            .galleryContainer #slideShowContainer .imagesHolder img {
                width: 100%;
                height: 100%;
            }
            .galleryContainer #slideShowContainer .imagesHolder .captionText {
                display:none;
            }
            .galleryContainer #slideShowContainer .leftArrow,.galleryContainer #slideShowContainer .rightArrow{
                width: 50px;
                background: #00000010;
                position: absolute;
                left:0;
                z-index: 1;
                transition : background 0.5s;
                height :72px;
                top : 50%;
                transform : translateY(-50%);
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;

            }
            .galleryContainer #slideShowContainer .rightArrow{
                left: auto;
                right: 0;
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
            }
            .galleryContainer #slideShowContainer .leftArrow:hover,.galleryContainer #slideShowContainer .rightArrow:hover{
                background: #000000a8;
                cursor: pointer;
            }
            .galleryContainer #slideShowContainer .arrow {
                display: inline-block;
                border:3px solid white;
                width :10px;
                height:10px;
                border-left:none;
                border-bottom:none;
                position:absolute;
                margin:auto;
                left:0;
                right:0;
                top:0;
                bottom:0;
            }
            .galleryContainer #slideShowContainer .arrow.arrowLeft{
                transform: rotateZ(-135deg);
            }
            .galleryContainer #slideShowContainer .arrow.arrowRight{
                transform: rotateZ(45deg);
            }
            .galleryContainer #slideShowContainer .captionHolder {
                position:absolute;
                bottom : 0;
                z-index: 1;
                color: white;
                font-size: 20px;
                text-align: center;
                width: 100%;
                background: #00000003;
                height :50px;
                line-height: 50px;
                overflow: hidden;
                font-family: sans-serif;
            }
            .galleryContainer #slideShowContainer .captionHolder .captionText{
                position:absolute;
                bottom : 0;
                z-index: 1;
                color: white;
                font-size: 20px;
                text-align: center;
                width: 100%;
                background: #00000001;
                height :50px;
                line-height: 50px;
                overflow: hidden;
                font-family: sans-serif;
            }
            .galleryContainer #dotsContainer {
                width: 100%;
                height: 10%;
                text-align: center;
                padding-top: 20px;
                box-sizing: border-box;
            }
            .galleryContainer #dotsContainer .dots {
                display: inline-block;
                width: 15px;
                height: 15px;
                border-radius: 50%;
                margin-left: 10px;
                background-color: #bbb;
                cursor: pointer;
                transition: background-color 0.5s;
            }
            .galleryContainer #dotsContainer .dots:hover,.galleryContainer #dotsContainer .dots.active{
                background-color: #717171;
            }
            .galleryContainer #dotsContainer .dots:first-child{
                margin-left: 0;
            }
            .galleryContainer .moveLeftCurrentSlide {
                animation-name: moveLeftCurrent ;
                animation-duration:0.4s ;
                animation-timing-function: linear;
                animation-fill-mode: forwards;
            }

            .galleryContainer .moveLeftNextSlide {
                animation-name: moveLeftNext ;
                animation-duration:0.4s ;
                animation-timing-function: linear;
                animation-fill-mode: forwards;
            }

            @keyframes moveLeftCurrent {
                from {margin-left: 0;opacity: 1;}to{margin-left: -100%;opacity: 1;}
            }
            @keyframes moveLeftNext {
                from {margin-left: 100%;opacity: 1;}to{margin-left: 0%;opacity: 1;}
            }
            .galleryContainer .moveRightCurrentSlide {
                animation-name: moveRightCurrent ;
                animation-duration:0.5s ;
                animation-timing-function: linear;
                animation-fill-mode: forwards;
            }
            @keyframes moveRightCurrent {
                from {margin-left: 0;opacity: 1;}to{margin-left: 100%;opacity: 1;}
            }

            .galleryContainer .moveRightNextSlide {
                animation-name: moveRightNext ;
                animation-duration:0.5s ;
                animation-timing-function: linear;
                animation-fill-mode: forwards;
            }
            @keyframes moveRightNext {
                from {margin-left: -100%;opacity: 1;}to{margin-left: 0;opacity: 1;}
            }

        </style>

        <div class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Modifier ce text">
                            <div class="mt-auto"><div class="box_image"><img src="../assets/images/boxes_1.png" alt=""></div></div>
                            <br>
                            <div class="box_content">
                                <div class="box_title">Guide de Taille</div>
                                <div class="box_text">Modifier ce text</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 box_col">
                        <div class="Modifier ce text">
                            <div class="mt-auto"><div class="box_image"><img src="../assets/images/boxes_2.png" alt=""></div></div>
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
                                    <a href="../assets/#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_logo_icon"><img src="../assets/images/logo_Escope.png" alt="E-Scope"  width="300" height=auto></div>
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
                                        <a href="../assets/#"><div>Service Client<div class="footer_tag_1">en ligne</div></div></a>
                                    </li>
                                    <li>
                                        <a href="../assets/#"><div>Size Contact<div class="footer_tag_2">Recommendé</div></div></a>
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
<script src="../assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="../assets/js/product.js"></script>
</body>
</html>