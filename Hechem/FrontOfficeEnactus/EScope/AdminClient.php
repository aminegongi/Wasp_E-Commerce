
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
   <!-- <link rel="stylesheet" href="Inscription.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="styles/inscri-login.css"> <!-- HERE******** -->

    <link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">
</head>
<body>

<script>
    function nomVerify() {
        var regex = /^[a-zA-Z]{3,}/;
        var var1 = document.getElementById("checkout_name");

        if(!regex.test(var1.value))
   	    {
            var1.style.borderColor = "red" ;
            document.getElementById("textnom").innerHTML="*Saisir Votre Nom";
      	    return false;
   	    }
   	    else
   	    {
            var1.style.borderColor = "" ;
            document.getElementById("textnom").innerHTML="";
    	    return true;
   	    }
    }

    function prenomVerify() {
        var regex = /^[a-zA-Z]{3,}/;
        var var1 = document.getElementById("checkout_last_name");

        if(!regex.test(var1.value))
   	    {
            var1.style.borderColor = "red" ;
            document.getElementById("textprenom").innerHTML="*Saisir Votre Prénom";
      	    return false;
   	    }
   	    else
   	    {
            var1.style.borderColor = "" ;
            document.getElementById("textprenom").innerHTML="";
    	    return true;
   	    }
    }
    function emailVerify() {
        var var1 = document.getElementById("checkout_email");

        if (var1.value == "") {
            var1.style.border = "1px solid #FF0000";
            document.getElementById("textemail").innerHTML="*Entrer un E-mail";
        }
        else {var1.style.border = "";
            document.getElementById("textemail").innerHTML="";
        }
        
    }
    function mdpVerify() {
        var pass = document.getElementById("checkout_password");

        if (pass.value == "") {
            pass.style.border = "1px solid #FF0000";
            document.getElementById("textmdp").innerHTML = "*Entrer un mdp";
        } else {
            pass.style.border = "";
            document.getElementById("textmdp").innerHTML = "";
        }
    }

    function mdpcVerify() {
            var pass = document.getElementById("checkout_password");
            var pass2 = document.getElementById("checkout_password_confirm");

            if (pass2.value != pass.value) {
                pass2.style.border = "1px solid #FF0000";
                document.getElementById("textmdpc").innerHTML="*Wrong password";}

            else {pass2.style.border = "";
                document.getElementById("textmdpc").innerHTML="";}
    }

    function paysVerify() {
            var pass = document.getElementById("checkout_country");

            if (pass.value == "") {
                pass.style.border = "1px solid #FF0000";
                document.getElementById("textpays").innerHTML = "*Entrer un pays";
            } else {
                pass.style.border = "";
                document.getElementById("textpays").innerHTML = "";
            }
        }
    function adressVerify() {
        var pass = document.getElementById("checkout_address");

        if (pass.value == "") {
            pass.style.border = "1px solid #FF0000";
            document.getElementById("textadress").innerHTML = "*Entrer votre adress";
        } else {
            pass.style.border = "";
            document.getElementById("textadress").innerHTML = "";
        }
    }
    function codepostalVerify() {
        var pass = document.getElementById("checkout_zipcode");

        if (pass.value == "") {
            pass.style.border = "1px solid #FF0000";
            document.getElementById("textcodepostal").innerHTML = "*Entrer un code postal";
        } else {
            pass.style.border = "";
            document.getElementById("textcodepostal").innerHTML = "";
        }
    }
    function villeVerify() {
        var pass = document.getElementById("checkout_city");

        if (pass.value == "") {
            pass.style.border = "1px solid #FF0000";
            document.getElementById("textville").innerHTML = "*Entrer une ville";
        } else {
            pass.style.border = "";
            document.getElementById("textville").innerHTML = "";
        }
    }
    function phoneVerify() {
        var pass = document.getElementById("checkout_phone");

        if (pass.value == "") {
            pass.style.border = "1px solid #FF0000";
            document.getElementById("textphone").innerHTML = "*Entrer un Numero de téléphone";
        } else {
            pass.style.border = "";
            document.getElementById("textphone").innerHTML = "";
        }
    }
</script>

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
                            <div><img src="images/logo_1.png" alt="E-Scope" width="200" height=auto ></div>
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
                    <div class="home_title">Affichage Pour Admin</div>
                    <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                        <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <!--<li><a href="#">Home</a></li>
                            <li>Checkouttt</li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Checkout -->

        <div class="checkout">
            <div class="container">
                <div class="row">

                    <!-- Inscription -->
                    <div class="col-lg-6">
                        <div class="billing">
                            <div class="checkout_title">Affichage</div>
                            <div class="checkout_form_container">
                            <?PHP
                            include "core/employeC.php";
                            $gestionprofil1C=new GestionprofilC();
                            $listeGestionprofils=$gestionprofil1C->afficherGestionprofils();

                            //var_dump($listeGestionprofils->fetchAll());
                            ?>
                            <table border="1">
                            <tr>
                            <td>Cin</td>
                            <td>Nom</td>
                            <td>Prenom</td>
                            <td>adresse</td>
                            <td>mail</td>
                            <td>telephone</td>
                            <td>supprimer</td>
                            <td>modifier</td>
                            </tr>

                            <?PHP
                            foreach($listeGestionprofils as $row){
                                ?>
                                <tr>
                                <td><?PHP echo $row['cin']; ?></td>
                                <td><?PHP echo $row['nom']; ?></td>
                                <td><?PHP echo $row['prenom']; ?></td>
                                <td><?PHP echo $row['adresse']; ?></td>
                                <td><?PHP echo $row['mail']; ?></td>
                                <td><?PHP echo $row['telephone']; ?></td>
                                <td><form method="POST" action="supprimerEmploye.php">
                                <input type="submit" name="supprimer" value="supprimer">
                                <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
                                </form>
                                </td>
                                <td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
                                Modifier</a></td>
                                </tr>
                                <?PHP
                            }
                            ?>
                            </table>
                            
                            <a href="ExporterClient.php"> <button> Exporter CSV</button> </a>
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
                                                <div class="footer_logo_icon"><img src="images/logo_1.png" alt="E-Scope"  width="300" height=auto></div>
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
                                        <form action="#" id="newsletter_form" class="newsletter_form">
                                            <input type="email" class="newsletter_input" placeholder="Votre Email..." required="required">
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
<script src="js/checkout.js"></script>
</body>
</html>