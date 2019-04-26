<?php

include "../../../core/ClientC.php";
session_start();
if (isset($_POST['login_btn'])) {
    $user = $_POST['email'];
    $pass = $_POST['password'];
    $messeg = "";
    $Client1C = new ClientC();

    if (empty($user) || empty($pass)) {
        $messeg = "Username/Password can't be empty";
        echo "<script>.$messeg.</script>";
    } else {
        $r = $Client1C->loginClient($user, $pass);
        foreach ($r as $key) {
            if ($key['mail'] == $user && $key['passwd'] == $pass) {
                $_SESSION["login_in"] = "true";
                $_SESSION["ID"] = $key['ID'];
                header("location: ../client/indexClient.php");
            } else {
                $_SESSION["login_in"] = "false";
                header("location: ../index.php");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Connexion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <!-- <link rel="stylesheet" href="../Projet/assets/Inscription.css">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Projet/assets/styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="../Projet/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../Projet/assets/styles/inscri-login.css">
    <!--******** HEREEEEE ******-->
    <link rel="stylesheet" type="text/css" href="../Projet/assets/styles/checkout_responsive.css">
</head>

<body>

    <script>
        function loginVerify() {
            var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
            var emaile = document.getElementById("Email");
            if (!regex.test(emaile.value)) {
                emaile.style.borderColor = "red";
                document.getElementById("Emailtext").innerHTML = "Saisir une Adresse Email";
                return false;
            } else {
                emaile.style.borderColor = "";
                document.getElementById("Emailtext").innerHTML = "";
                return true;
            }
        }

        function mdpVerify() {
            var pass = document.getElementById("mdp");

            if (pass.value == "") {
                pass.style.borderColor = "red";
                document.getElementById("mdptext").innerHTML = "*Saisir un Mot de Passe";
            } else {
                pass.style.border = "";
                document.getElementById("mdptext").innerHTML = "";
            }

        }

        function Verif() {
            var amail = document.getElementById("Email").value.indexOf("@");
            var mdpp = document.getElementById("mdp").value;
            bool = "true";

            if (mdpp.length == 0) {
                document.getElementById("mdptext").innerHTML = "*Entrer un mdp ";
                bool = "false";
            }

            if (amail == -1) {
                document.getElementById("Emailtext").innerHTML = "*Entrer un E-mail ";
                bool = "false";
            }

            if (bool == "false") {
                return false;
            }
        }
    </script>

    <!-- Menu -->

    <div class="menu">

        <!-- Search -->
        <div class="menu_search">
            <form id="menu_search_form" class="menu_search_form">
                <input type="text" class="search_input" placeholder="Recherche..." required="required">
                <button class="menu_search_button"><img src="../Projet/assets/images/search.png" alt="icon recherche"></button>
            </form>
        </div>
        <!-- Navigation -->
        <div class="menu_nav">
            <ul>
                <li><a href="../index.php">Acceuil</a></li>
                <li><a href="#">Categorie</a></li>
                <li><a href="#">Guide d'utilisation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- Contact Info -->
        <div class="menu_contact">
            <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
                <div>
                    <div><img src="../Projet/assets/images/phone.svg" alt="Phone Icon"></div>
                </div>
                <div>+216 55 685 313</div>
            </div>
            <div class="menu_social">
                <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                    <li><a href="../Projet/assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="../Projet/assets/#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    <li><a href="../Projet/assets/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="../Projet/assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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
                    <a href="../index.php">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                            <div><img src="../images/logo3.png" alt="EnactusEsprit" width="140" height=auto></div>
                        </div>
                    </a>
                </div>
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <nav class="main_nav">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="../index.php">Acceuil</a></li>
                        <li><a href="#">Categorie</a></li>
                        <li><a href="#">Guide d'utilisation</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
                <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                    <!-- Search -->
                    <div class="header_search">
                        <form id="header_search_form">
                            <input type="text" class="search_input" placeholder="Recherche..." disabled>
                            <button class="header_search_button" disabled><img src="../Projet/assets/images/search.png" alt="icon recherche"></button>
                        </form>
                    </div>
                    <!-- User -->
                    <div class="user"><a href="#">
                            <div><img src="../Projet/assets/images/user.svg" alt="https:/www.flaticon.com/authors/freepik"></div>
                        </a></div>
                    <!-- Cart -->
                    <div class="cart"><a href="#">
                            <div><img src="../Projet/assets/images/cart.svg" alt="https:/www.flaticon.com/authors/freepik">

                            </div>
                        </a></div>

                </div>
            </div>
        </header>

        <div class="super_container_inner">
            <div class="super_overlay"></div>

            <!-- Home -->

            <div class="home">
                <div class="home_container d-flex flex-column align-items-center justify-content-end">
                    <div class="home_content text-center">
                        <div class="home_title">Connexion - Espace Membre</div>
                        <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
                            <ul class="d-flex flex-row align-items-start justify-content-start text-center">
                                <!--<li><a href="../Projet/assets/#">Home</a></li>
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

                        <!-- Inscription/billing -->
                        <div class="col-lg-6">
                            <div class="login">
                                <div class="Connexion">Connexion</div>
                                <div class="form_login">
                                    <form method="post" id="checkout_form" class="checkout_form">
                                        <div class="row">
                                        </div>
                                        <div>
                                            <!-- Username -->
                                            <input type="text" id="Email" placeholder="E-mail" name="email" class="checkout_input" onblur="loginVerify()">
                                            <p id="Emailtext" class="ErrFah"></p>
                                        </div>

                                        <div>
                                            <!-- Password -->
                                            <input type="password" id="mdp" placeholder="Mot de passe" name="password" class="checkout_input" onblur="mdpVerify()">
                                            <p id="mdptext" class="ErrFah"></p>
                                        </div>
                                        <h6>Créer un compte <a href="inscription.php" style="color:#ffbe27">Enactus Esprit ICT</a></h6>
                                        <h6> <a href="forgot.php" style="color:#ffbe27">Mot de Passe Oublié ?</a></h6>
                                        <button type="submit" name="login_btn" id="SeConnecter" class="login_button trans_200">Se Connecter</button>
                                        <a class="btn btn-primary" href="FacebookLogin/login.php">Log In With Facebook</a>
                                    </form>
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
                                        <a href="../index.php">
                                            <div class="d-flex flex-row align-items-center justify-content-start">
                                                <div class="footer_logo_icon"><img src="../images/logo3.png" alt="EnactusEsprit" width="140" height=auto></div>
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
                                            <a href="../Projet/assets/#">
                                                <div>Customer Service<div class="footer_tag_1">online now</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../Projet/assets/#">
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

                                    <div class="footer_social">

                                        <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                            <li><a href="../Projet/assets/#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="../Projet/assets/#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                            <li><a href="../Projet/assets/#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="../Projet/assets/#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <script src="../Projet/assets/js/jquery-3.2.1.min.js"></script>
    <script src="../Projet/assets/styles/bootstrap-4.1.2/popper.js"></script>
    <script src="../Projet/assets/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="../Projet/assets/plugins/greensock/TweenMax.min.js"></script>
    <script src="../Projet/assets/plugins/greensock/TimelineMax.min.js"></script>
    <script src="../Projet/assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="../Projet/assets/plugins/greensock/animation.gsap.min.js"></script>
    <script src="../Projet/assets/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="../Projet/assets/plugins/easing/easing.js"></script>
    <script src="../Projet/assets/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="../Projet/assets/js/checkout.js"></script>
</body>

</html>