<?PHP
include "../../../../core/AdminC.php";
session_start();
if (isset($_SESSION["login_in"])) {
        if ($_SESSION["ID"] == "superUser") {
                $sql = "SElECT * From projet";
                $db = config::getConnexion();
                try {
                    $listeProjet = $db->query($sql);
                } catch (Exception $e) {
                    die('Erreur: ' . $e->getMessage());
                }
                $Admin1C = new AdminC();
                $listeAdmins = $Admin1C->afficherAdmins();
                $listeGouv = $Admin1C->afficherGouvernerat();
                $currentUSER = $Admin1C->recupererAdmin($_SESSION["ID"]);
                $sql = "SElECT * From admin";
                $db = config::getConnexion();
                try {
                    $count = $db->query($sql);
                    if ($count->rowCount()) {
                            $var = $count->rowCount();
                        } else {
                            ?>
                <h1><?php echo "VIDE"; ?></h1> <?php
                                        }
                                } catch (Exception $e) {
                                    die('Erreur: ' . $e->getMessage());
                                }
                                ?>
        <!doctype html>
        <html class="no-js" lang="">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Consulter Admins</title>
            <meta name="description" content="Consulter Admins">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="apple-touch-icon" href="../../images/enactus-png.png">
            <link rel="shortcut icon" href="../../images/enactus-png.png">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
            <link rel="stylesheet" href="../../assets/css/cs-skin-elastic.css">
            <link rel="stylesheet" href="../../assets/css/style.css">
            <link rel="stylesheet" href="style.css">
            <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
            <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


        </head>

        <body class="no_bar" id="body">
            <!--left-panel -->
            <aside id="left-panel" class="left-panel">
                <nav class="navbar navbar-expand-sm navbar-default">
                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children dropdown">
                                <a class="dropdown-toggle" href="../../index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                            </li>
                            
                            <li class="menu-title">Super Admin</li><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown" style="background: #ffbe27;position: relative;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Gestion Admins</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li  ><i class="menu-icon fa fa-eye" ></i><a href="../Gestion Admins/CAdmins.php">Consulter et Ajouter</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Gestion Projets</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Projets/CProjets.php">Consulter et Ajouter</a></li>
                                </ul>
                            </li>

                            <!-- Amine Module -->
                            <li class="dropdown"> 
                                <a href="../Marketing - Newsletter/views/CMarketing-Newsletter.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-envelope"></i>Gestion Newsletters</a>
                            </li>
                            
                            <li class="dropdown"> 
                                <a href="../Markenting - ListeContact/views/CMarketing-ListeContact.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Listes de Diffusions</a>
                            </li>

                            <li class="dropdown"> 
                                <a href="../Markenting - Banniere/views/CMarketing-Banniere.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Gestion des Bannieres</a>
                            </li>
                            <!-- Fin Amine Module -->

                            <!-- Ahmed Module -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Gestion des Fournisseurs</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Fournisseur/views/afficherSociete.php">Consulter Societe</a></li>
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Fournisseur/views/afficherPersonne.php">Consulter Personne</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../Gestion Fournisseur/views/AFournisseur.html">Ajouter</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Les Livraisons</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Livraisons/views/afficherLivraison.php">Consulter</a></li>
                                </ul>
                            </li>
                            <!-- Fin Ahmed Module -->

                            <li class="menu-title">Gestions</li><!-- /.menu-title -->

                            <!-- Fahd Module -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bell"></i>Produits</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../gestion produit/php/views/afficherProduit.php">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../gestion produit/php/views/ajouterProduit.php">Ajouter</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Commandes</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Commandes/php/views/afficherCommande.php">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../Gestion Commandes/php/views/ajouterCommande.php">Ajouter</a></li>
                                </ul>
                            </li>

                            <!-- Fin Fahd Module -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-smile-o"></i>Clients</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="#">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="#">Ajouter</a></li>
                                    <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="#">Modifier</a></li>
                                    <li><i class="menu-icon fa  fa-eraser"></i><a href="#">Supprimer</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-thumbs-o-up"></i>Avis</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Avis/CAvis.html">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../Gestion Avis/AAvis.html">Ajouter</a></li>
                                    <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../Gestion Avis/MAvis.html">Modifier</a></li>
                                    <li><i class="menu-icon fa  fa-eraser"></i><a href="../Gestion Avis/SAvis.html">Supprimer</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-credit-card"></i>Réclamations</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Gestion Reclamations/CReclamation.html">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../Gestion Reclamations/AReclamation.html">Ajouter</a></li>
                                    <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../Gestion Reclamations/MReclamation.html">Modifier</a></li>
                                    <li><i class="menu-icon fa  fa-eraser"></i><a href="../Gestion Reclamations/SReclamation.html">Supprimer</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-heart"></i>Recommandation </a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../Recommandation/CRecommandation.html">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../Recommandation/ARecommandation.html">Ajouter</a></li>
                                    <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../Recommandation/MRecommandation.html">Modifier</a></li>
                                    <li><i class="menu-icon fa  fa-eraser"></i><a href="../Recommandation/SRecommandation.html">Supprimer</a></li>
                                </ul>
                            </li>




                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </aside>
            <!-- /#left-panel -->
            <!-- Right Panel -->
            <div id="right-panel" class="right-panel">
                <!-- Header-->
                <header id="header" class="header">
                    <div class="top-left">
                        <div class="navbar-header logo">
                            <a class="navbar-brand" href="./"><img src="../../images/logo.png" alt="Logo"></a>
                            <a class="navbar-brand hidden" href="./"><img src="../../images/logo2.png" alt="Logo"></a>
                            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="header-menu">
                            <div class="header-left">
                                <button class="search-trigger"><i class="fa fa-search"></i></button>
                                <div class="form-inline">
                                    <form method="GET" class="search-form">
                                        <input type="text" name="RC" class="form-control mr-sm-2" placeholder="Recherche par nom du admin ..." aria-label="Search">
                                        <input type="submit" name="ONrech" style="position:relative;left:1050px;bottom:40px;" class="btn btn-outline-danger btn-sm" value="Rechercher" />
                                        <button class="search-close"><i class="fa fa-close"></i></button>
                                    </form>
                                    <?php
                                    if (isset($_GET['RC'])) {
                                            $RecherAdmin = $Admin1C->rechercherListeadmins($_GET['RC']);
                                        }
                                    ?>
                                </div>

                                <div class="dropdown for-notification">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell"></i>
                                        <span class="count bg-danger">3</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="notification">
                                        <p class="red">You have 3 Notification</p>
                                        <a class="dropdown-item media" href="#">
                                            <i class="fa fa-check"></i>
                                            <p>Server #1 overloaded.</p>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <i class="fa fa-info"></i>
                                            <p>Server #2 overloaded.</p>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <i class="fa fa-warning"></i>
                                            <p>Server #3 overloaded.</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="dropdown for-message">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-envelope"></i>
                                        <span class="count bg-primary">4</span>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="message">
                                        <p class="red">You have 4 Mails</p>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Jonathan Smith</span>
                                                <span class="time float-right">Just now</span>
                                                <p>Hello, this is an example msg</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Jack Sanders</span>
                                                <span class="time float-right">5 minutes ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Cheryl Wheeler</span>
                                                <span class="time float-right">10 minutes ago</span>
                                                <p>Hello, this is an example msg</p>
                                            </div>
                                        </a>
                                        <a class="dropdown-item media" href="#">
                                            <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                            <div class="message media-body">
                                                <span class="name float-left">Rachel Santos</span>
                                                <span class="time float-right">15 minutes ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <?php
                            foreach ($currentUSER as $row) {

                                ?>
                                <div class="user-area dropdown float-right">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="user-avatar rounded-circle" src="<?PHP echo $row['image']; ?>" alt="User Avatar">
                                    </a>

                                    <div class="user-menu dropdown-menu">
                                        <a class="nav-link" href="#"><i class="fa fa- user"></i>
                                            <?PHP echo $row['pseudo']; ?></a>
                                        <a class="nav-link" href="login/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </header>
                <!-- /#header -->

                <!-- content -->
                <div class="content">

                    <div class="col-xl-8" style="max-width: 80%;">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Les Admins <button id="myBtn" style="float:right;" class="btn btn-outline-success btn-lg active">Ajouter</button></h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <form method="get">
                                                    <th>#</th>
                                                    <th>Avatar</th>
                                                    <th>ID</th>
                                                    <th><button type="submit" name="triNom" class="btn btn-link">Nom <i class="fa fa-sort-alpha-asc"></i></button></th>
                                                    <th>Projet</th>
                                                    <th>Mail</th>
                                                    <th>NumTel</th>
                                                    <th>Modifier et Supprimer</th>
                                                </form>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?PHP
                                            if (isset($_GET['triNom'])) {
                                                    $TriAdmin = $Admin1C->tri();
                                                    $listeAdmins = $TriAdmin;
                                                }
                                            if (isset($_GET['ONrech'])) {
                                                    $listeAdmins = $RecherAdmin;
                                                }
                                            $i = 1;
                                            foreach ($listeAdmins as $row) {
                                                if ($row['mail'] != "superAdmin") {
                                                        $the = $row['IDP'];
                                                        $sql = "select * from projet where ID='$the'";
                                                        $db = config::getConnexion();
                                                        try {
                                                            $proj = $db->query($sql);
                                                        } catch (Exception $e) {
                                                            die('Erreur: ' . $e->getMessage());
                                                        }
                                                        foreach ($proj as $mm) {
                                                            $doc = $mm['nom'];
                                                        }
                                                        if ($the == "undefined") {
                                                                $doc = "Non affecté";
                                                            }
                                                        ?>

                                                    <tr id="admin<?php echo $i ?>">
                                                        <td class="serial"><?php echo $i ?></td>
                                                        <td class="avatar">
                                                            <div class="round-img">
                                                                <img class="rounded-circle" src="<?PHP echo $row['image']; ?>" alt="">
                                                            </div>
                                        
                                        <td class="ID"> <?PHP echo $row['ID']; ?> </td>
                                        <td class="name"> <?PHP echo $row['pseudo']; ?></td>
                                        <td class="projet"> <?PHP echo $doc; ?> </td>
                                        <td class="mail"><?PHP echo $row['mail']; ?></td>
                                    
                                                        <td>
                                                            <span class="NumTel">
                                                                <?PHP echo $row['NumTel']; ?></span>
                                                        </td>

                                                        <td>
                                                            <a class="btn btn-outline-primary btn-sm" href="MAdmins.php?ID=<?PHP echo $row['ID']; ?>">Modifier</a>
                                                            <hr>
                                                            <a class="btn btn-outline-warning" href="../../assets/pdf/creatPDF.php?ID=<?PHP echo $row['ID']; ?>">details</a>
                                                            <hr>
                                                            <form method="POST" action="supprimerAdmin.php">
                                                                <input type="hidden" value="<?PHP echo $row['ID']; ?>" name="ID">
                                                                <input type="submit" class="btn btn-outline-danger btn-sm" value="Supprimer" />
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                    if (isset($_POST['Modifier'])) {
                                                            $_GET['ID'];
                                                        }
                                                    $i++;
                                                    
                                                }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->

                    </div> <!-- /.col-lg-8 -->
                    <!--Ajouter Modal-->
                    <div>

                        <div id="myModal" class="modal">


                            <div class="modal-content">
                                <span class="close">&times;</span>



                                <!-- Formulaire d'ajout -->
                                <div>
                                    <div class="col-md-4" style="float:right;">
                                        <div class="card">
                                            <div class="card-header">
                                                <i class="fa fa-user"></i><strong class="card-title pl-2">Profil Admin</strong>
                                            </div>
                                            <form action="ajoutAdmin.php" method="post" onsubmit="return verifForm(this)" enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <label for="file" class="label-file" style="margin-left: 60px;">
                                                        <ul class="caption-style-1">
                                                            <li>
                                                                <img id="image" src="../../images/avatar/unknown.png" alt="">
                                                                <div class="caption">
                                                                    <div class="blur"></div>
                                                                    <div class="caption-text">
                                                                        <h1>Ajouter Image</h1>
                                                                        <img alt="plus" src="./plus.png" style="width: 40px;height: 40px;margin-left: 55px;filter: invert(100%);margin-top: 10px;">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </label>
                                                    <input type="file" name="imageAdmin" id="file" class="inputfile" accept="image/*" title="Ajouter des photos" onchange="loadFile(event)" />
                                                    <hr>
                                                    <div class="text-sm-center mt-2 mb-1"><i class="fa fa-user"></i>
                                                        <p id="card-user">Utilisateur</p>
                                                    </div>
                                                    <div class="location text-sm-center"><i class="fa fa-envelope"></i>
                                                        <p id="card-mail"> Mail</p>
                                                    </div>
                                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i>
                                                        <p id="card-adress"> Adresse</p>
                                                    </div>
                                                    <div class="location text-sm-center"><i class="fa fa-tasks"></i>
                                                        <p id="card-projet">Projet</p>
                                                    </div>
                                                    <div class="location text-sm-center"><i class="fa fa-phone"></i>
                                                        <p id="card-number">9999 9999</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">Admin Projet</div>
                                            <div class="card-body card-block">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                        <input type="text" id="username" name="username" placeholder="Utilisateur" class="form-control" required="required" oninput="verifPseudo(this)" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                        <input type="email" id="email" name="email" placeholder="Email" class="form-control" required="required" oninput="verifMail(this)" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                                        <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="required" oninput="verifPass(this)">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-map-marker"></i></div>
                                                        <select name="select_City" id="select" class="form-control" oninput="verifLocation(this)">
                                                            <?PHP
                                                            foreach ($listeGouv as $row) {
                                                                ?>
                                                                <option><?php echo $row['gov']; ?></option>
                                                            <?php }
                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-tasks"></i></div>
                                                        <select name="IDP" id="select" class="form-control" required="required" oninput="verifProjet(this)">
                                                        <option value="undefined" selected>Non Affecté</option>    
                                                        <?php foreach ($listeProjet as $row) { ?>
                                                                <option value="<?php echo $row['ID']; ?>"><?php echo $row['nom']; ?></option>
                                                            <?php }
                                                        ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="9999-9999" required="required" oninput="verifNumb(this)">
                                                    </div>
                                                </div>


                                                <div class="form-actions form-group"><input type="submit" value="Valider" class="btn btn-success btn-sm" /></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                <?php
            } else {
                header("location: login/page-login.php");
            }
        ?>

                <!--/Ajouter Modal-->

                <!-- Footer -->
                <footer class="site-footer">
                    <div class="footer-inner bg-white">
                        <div class="row">
                            <div class="col-sm-6">
                                Copyright &copy; 2019 Taha Admin
                            </div>
                            <div class="col-sm-6 text-right">
                                Designed by <a href="https://colorlib.com">WASP</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /.site-footer -->
            </div>
            <!-- /#content -->



            <!-- Scripts -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
            <script src="../../assets/js/main.js"></script>
            <script src="script.js"></script>

            <!--  Chart js -->
            <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

            <!--Chartist Chart-->
            <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
            <script src="../../assets/js/init/weather-init.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
            <script src="../../assets/js/init/fullcalendar-init.js"></script>

    </body>

    </html>
<?php } ?>