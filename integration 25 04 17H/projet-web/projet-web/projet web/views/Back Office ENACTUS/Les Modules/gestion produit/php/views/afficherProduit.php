<?PHP
include "../core/Produits.php";
//include "../Gestion Produit/php/core/Produits.php";
session_start();
if (isset($_SESSION["login_in"])) {
    if (!empty($_SESSION["ID"])) {
        $id=$_SESSION["ID"];
        $sql="SELECT * from admin where ID='$id' ";
		$db = config3::getConnexion();
        $currentUSER=$db->query($sql);

        $Produits=new Produits();
        $listeProduits=$Produits->afficherProduitss();

    
        $connect = mysqli_connect('localhost','root','','bweb');
        $query = "SELECT nom ,quantite as number FROM produit GROUP BY nom";
        $result = mysqli_query($connect, $query);
//var_dump($listeEmployes->fetchAll());
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consulter Produits</title>
    <meta name="description" content="Consulter Produits">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../../../../images/enactus-png.png">
    <link rel="shortcut icon" href="../../../../images/enactus-png.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../../../../assets/css/style.css">
    <!--<link rel="stylesheet" href="../../../../../../../../../www/Back%20Office%20ENACTUS/assets/css/style.css">-->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <link href="AfficherProduitCss.css" rel="stylesheet" />

    <script src="../../AProduitJs.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>

    <!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
        <script src="ImageJS.js"></script>-->

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="../../ImageJS.js"> </script>
    <!-- sort lib-->
    <!--<script src="jquery.js"></script>-->
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['nom', 'Number'],
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            if($row["number"] > 0)
                               echo "['".$row["nom"]."', ".$row["number"]."],";
                            else
                               echo "['".$row["nom"]."', 0],";
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: '',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart')); //Pie
                chart.draw(data, options);  
           }  
           </script> 

</head>

<body>
<!--left-panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-item-has-children dropdown">
                    <a class="dropdown-toggle" href="../../index.html"><i class="menu-icon fa fa-laptop" ></i>Dashboard </a>
                </li>

                <?php if($_SESSION["ID"] == "superUser")
                                {?>

                            <li class="menu-title">Super Admin</li><!-- /.menu-title -->
                            <li class="menu-item-has-children dropdown" >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Gestion Admins</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li  ><i class="menu-icon fa fa-eye" ></i><a href="../../../Gestion Admins/CAdmins.php">Consulter et Ajouter</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Gestion Projets</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Projets/CProjets.php">Consulter et Ajouter</a></li>
                                </ul>
                            </li>

                            <!-- Amine Module -->
                            <li class="dropdown"> 
                                <a href="../../../Marketing - Newsletter/views/CMarketing-Newsletter.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-envelope"></i>Gestion Newsletters</a>
                            </li>
                            
                            <li class="dropdown"> 
                                <a href="../../../Markenting - ListeContact/views/CMarketing-ListeContact.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bars"></i>Listes de Diffusions</a>
                            </li>

                            <li class="dropdown"> 
                                <a href="../../../Markenting - Banniere/views/CMarketing-Banniere.php"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Gestion des Bannieres</a>
                            </li>
                            <!-- Fin Amine Module -->

                            <!-- Ahmed Module -->
                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Gestion des Fournisseurs</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Fournisseur/views/afficherSociete.php">Consulter Societe</a></li>
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Fournisseur/views/afficherPersonne.php">Consulter Personne</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../Gestion Fournisseur/views/AFournisseur.html">Ajouter</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Les Livraisons</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Livraisons/views/afficherLivraison.php">Consulter</a></li>
                                </ul>
                            </li>
                            <!-- Fin Ahmed Module -->

                            <?php } ?>

                            <li class="menu-title">Gestions</li><!-- /.menu-title -->

                            <!-- Fahd Module -->
                            <li class="menu-item-has-children dropdown" style="background: #ffbe27;position: relative;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bell"></i>Produits</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../../../gestion produit/php/views/afficherProduit.php">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../gestion produit/php/views/ajouterProduit.php">Ajouter</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown"  >
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Commandes</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Commandes/php/views/afficherCommande.php">Consulter</a></li>
                                    <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Commandes/php/views/ajouterCommande.php">Ajouter</a></li>
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
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Avis/CAvis.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Avis/AAvis.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Avis/MAvis.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Avis/SAvis.html">Supprimer</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-credit-card"></i>Réclamations</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Reclamations/CReclamation.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Reclamations/AReclamation.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Reclamations/MReclamation.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Reclamations/SReclamation.html">Supprimer</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-heart"></i>Recommandation </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Recommandation/CRecommandation.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Recommandation/ARecommandation.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Recommandation/MRecommandation.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Recommandation/SRecommandation.html">Supprimer</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Marketing</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Marketing/CMarkiting.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Marketing/AMarkiting.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Marketing/MMarkiting.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Marketing/SMarkiting.html">Supprimer</a></li>
                    </ul>
                </li>


                <li class="menu-title">Paramètres</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear "></i>Configuration</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-gears"></i><a href="#">Profil</a></li>
                        <li><i class="menu-icon fa fa-sign-out"></i><a href="#">Déconnection</a></li>
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
                <a class="navbar-brand" href="./"><img  src="../../../../images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="../../../../images/logo2.png" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
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
                                <span class="photo media-left"><img alt="avatar" src="../../../../images/avatar/1.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="../../../../images/avatar/2.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="../../../../images/avatar/3.jpg"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="../../../../images/avatar/4.jpg"></span>
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
                            foreach($currentUSER as $row){

                            ?>
                            <div class="user-area dropdown float-right">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="user-avatar rounded-circle" src="../../../../Les Modules/Gestion Admins/<?PHP echo $row['image'];?>" alt="User Avatar">
                                    </a>

                                    <div class="user-menu dropdown-menu">
                                        <a class="nav-link" href="#"><i class="fa fa- user"></i>
                                            <?PHP echo $row['pseudo']; ?></a>
                                        <a class="nav-link" href="../../../Gestion Admins/login/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>
    </header>
    <!-- /#header -->
<div> <!-- <div class=" container-fluid"> -->
    <!-- content -->
    <div class="content" >
        <!-- EKTOB HOUNI -->
        <form name="product_catalog_list" id="product_catalog_list" method="post" > <!-- action="supprimerProduit.php" -->
            <div class="row">
                <div class="col-md-12">
                    <input type="hidden" name="filter_category" value="">
                </div>
            </div>

            <div class="row">

                <!--<div class="col-md-12">--> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">



                    <!--<div class="table-responsive">--> <div class="card">
                                <h5 class="card-header" style="font-weight : bolder">Liste des produits</h5> <!-- font weight-->
                        <!-- tool<div class="col-2 text-right">
                            <div class="dropdown">
                                <button class="btn btn-text dropdown-toggle tool-button" id="catalog-tools-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Paramètres">
                                    <span class="sr-only">Paramètres</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="catalog-tools-button" x-placement="bottom-end" style="position: absolute; transform: translate3d(122px, 23px, 0px); top: 0px; left: 0px; will-change: transform;">

                                    <a id="desc-product-export" class="dropdown-item" href="/prestashop_1.7.5.0/admin574ttpvee/index.php/sell/catalog/products/export?_token=VZa1DU-HfvwQNQCx47wLIZ-JagFci_r-g-38Z_O4yJw">
                                        Exporter
                                    </a>
                                    <a id="desc-product-import" class="dropdown-item" href="/prestashop_1.7.5.0/admin574ttpvee/index.php/configure/advanced/import/?import_type=products&amp;_token=VZa1DU-HfvwQNQCx47wLIZ-JagFci_r-g-38Z_O4yJw">
                                        Importer
                                    </a>
                                    <a id="desc-product-show-sql" class="dropdown-item" href="javascript:void(0);" onclick="showLastSqlQuery();">
                                        Voir la requête SQL
                                    </a>
                                    <a id="desc-product-sql-manager" class="dropdown-item" href="javascript:void(0);" onclick="sendLastSqlQuery(createSqlQueryName());">
                                        Exporter vers le gestionnaire SQL
                                    </a>
                                </div>
                            </div>
                        </div>-->
                        <div class="card-body"  id="employee_table"> <!-- class="table-responsive" -->
                        <table class="table product mt-3" redirecturl="" >
                            <thead class="with-filters">
                            <tr class="column-headers">
                                <th scope="col" style="width: 2rem"></th>

                                <th scope="col" style="width: 5rem">
                                    <!--<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="desc">-->
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="id" data-order="desc" href="#">ID</a>
                                    <span role="button" class="ps-sort" aria-label="Tri" ></span>

                                    </div>
                                </th>


                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name">
                                        <span role="columnheader">Images</span>
                                        <!--<span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                    </div>
                                </th>
                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="nom" data-order="desc" href="#">Nom</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="reference" data-order="desc" href="#">Reference</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="categorie" data-order="desc" href="#">Categorie</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col" class="text-center" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="quantite" data-order="desc" href="#">Quantite</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>

                                <th scope="col" class="text-center" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="prix" data-order="desc" href="#">Montant</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>


                                <th scope="col" class="text-center" style="width: 9%">
                                    <div class="ps-sortable-column" data-sort-col-name="name" >
                                    <a class="column_sort" id="date" data-order="desc" href="#">Date</a>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>
                                    </div>
                                </th>

                                <th scope="col" class="text-center">
                                    <div class="ps-sortable-column" data-sort-col-name="active">
                                        <!--<span role="columnheader">État</span>
                                        <span role="button" class="ps-sort" aria-label="Tri"></span>-->
                                    </div>
                                </th>

                                <th scope="col" class="text-right" style="width: 3rem; padding-right: 2rem">
                                    Actions
                                </th>
                            </tr>

                            <tr class="column-filters">
                                <th colspan="2">
                                    <div id="filter_column_id_product_div">
                                        <input type="hidden" id="filter_column_id_product" name="filter_column_id_product" value="" sql="">
                                        <input class="form-control" type="text" id="id_product" value="" placeholder="Chercher ID" style="font-size: 13px" onkeydown="onkd()" >
                                        <!--<input class="form-control form-min-max" type="text" id="filter_column_id_product_max" value="" placeholder="Max">-->
                                    </div>
                                </th>
                                <th>&nbsp;</th>
                                <th>
                                    <input type="text" class="form-control" placeholder="Chercher un nom" id="noms" name="filter_column_name" value="" onkeydown="onkd()">
                                </th>
                                <th>
                                    <input type="text" class="form-control" placeholder="Chercher réf." id="refs" name="filter_column_reference" value="" onkeydown="onkd()">
                                </th>
                                <th>
                                    <!--<input type="text" class="form-control" placeholder="Chercher une catégorie" name="filter_column_name_category" value="">-->
                                    <select required="" data-parsley-length="[5,10]" placeholder="" class="form-control" id="id_categories" onchange="" onkeydown="onkd()">
                                        <option  value="" disabled selected>Categorie</option>
                                        <?PHP
                                        include "../core/Categories.php";
                                        $Categories=new Categories();
                                        $result=$Categories->afficherCategoriess();
                                        foreach($result as $row) {
                                            ?>
                                            <script>
                                                //var valu = "<?PHP echo $row['nom']; ?>" ;
                                                //  alert(valu);
                                                var dive = '<option value="<?PHP echo $row['nom']; ?>"><?PHP echo $row['nom']; ?></option>';
                                                $('#id_categories').append(dive);
                                            </script>
                                            <?PHP
                                        }
                                        ?>
                                    </select>
                                </th>
                                <th class="text-center">
                                    <div id="quantites">
                                        <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                        <input class="form-control form-min-max" type="text" id="quantite_min" value="" placeholder="Min.">
                                        <input class="form-control form-min-max" type="text" id="quantite_max" value="" placeholder="Max.">
                                    </div>
                                </th>
                                <th class="text-center">
                                    <div id="montants">
                                        <input type="hidden" id="filter_column_price" name="filter_column_price" >
                                        <input class="form-control form-min-max" type="text" id="montant_min" value="" placeholder="Min.">
                                        <input class="form-control form-min-max" type="text" id="montant_max" value="" placeholder="Max.">
                                    </div>
                                </th>

                                <th id="product_filter_column_active" class="text-center">
                                    <!-- <div class="form-select">
                                         <select class="custom-select" name="filter_column_active">
                                             <option value=""></option>
                                             <option value="1">Active</option>
                                             <option value="0">Inactive</option>
                                         </select>
                                     </div>-->
                                </th>
                                <th id="product_filter_column_active" class="text-center">
                                    <!-- <div class="form-select">
                                         <select class="custom-select" name="filter_column_active">
                                             <option value=""></option>
                                             <option value="1">Active</option>
                                             <option value="0">Inactive</option>
                                         </select>
                                     </div>-->
                                </th>
                                <th class="text-right" style="width: 5rem">
                                    <button type="button" class="btn btn-primary" name="products_filter_submit" title="Rechercher" id="searsh"> <!-- submit -->
                                        <i class="" style="position: absolute"></i>
                                        Rechercher
                                    </button>
                                    <input type="hidden" name="Reins">
                                </th>
                                <!--<th>
                                    <button type="reset" class="btn btn-link" name="products_filter_reset" onclick="productColumnFilterReset($(this).closest('tr.column-filters'))" title="Réinitialiser" style="display: none;">
                                        <i class="material-icons">clear</i>
                                        Réinitialiser
                                    </button>
                                </th>-->
                            </tr>
                            <!-- LGINHE 1 -->
                            <?PHP
                            foreach($listeProduits as $row){
                            ?>
                            <tr data-product-id="1"><!--data-uniturl="/prestashop_1.7.5.0/admin574ttpvee/index.php/sell/catalog/products/unit/duplicate/19?_token=A2IC3bxCDtcD56ZtVFZxBESqGejkhhh8W-wzhuG3Ijo"-->
                                <td class="checkbox-column form-group">
                                    <div class="md-checkbox md-checkbox-inline">
                                        <!--<label>
                                            <input type="checkbox" id="bulk_action_selected_products-19" name="bulk_action_selected_products[]" value="1">
                                            <i class="md-checkbox-control"></i>
                                        </label>-->
                                    </div>
                                </td>

                                <td>
                                    <label class="form-check-label" for="bulk_action_selected_products-19">
                                        <?PHP echo $row['id']; ?>

                                        <script>
                                            function load() {
                                                alert('hehexd');
                                            }
                                            var zzz ="<?PHP echo $row['reference']; ?>" ;
                                            var zzzz = "<?PHP echo $row['id_projet']; ?>"
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
                                    </label>
                                </td>
                                <td class="" id ="<?PHP echo $row['reference']; ?>" >
                                    <input type="hidden" id="<?PHP echo $row['reference']; ?>" value="<?PHP echo $row['reference']; ?> " >
                                    <script>
                                       // var t = "ttt";
                                        //alert (omg);
                                        myfunc();
                                    </script>
                                    <!-- <div id="preview2"></div>-->
                                </td>
                                <td>
                                    <a href=""><?PHP echo $row['nom']; ?></a>
                                </td>
                                <td>
                                    <?PHP echo $row['reference']; ?>
                                </td>
                                <td>
                                    <?PHP echo $row['categorie']; ?>
                                </td>
                                <td class="text-center">
                                    <a><?PHP echo $row['quantite']; ?></a> <!---->
                                </td>
                                <td class="text-center">
                                    <?PHP echo $row['prix']; ?>
                                </td>

                                <td class="product-sav-quantity text-center" data-product-quantity-value="300">
                                    <a>
                                        <?PHP echo $row['date']; ?>
                                        <!---->
                                    </a>
                                </td>
                                <td class="text-center">
                                    <!-- <a href="#" onclick="unitProductAction(this, 'deactivate'); return false;">
                                         <i class="material-icons action-enabled ">check</i>
                                     </a>-->
                                </td>
                                <!--
                                <td class="text-right">
                                    <div class="btn-group-action">
                                        <div class="btn-group">
                                            <a href="" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a  href="" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons action-enabled">clear</i></a>
                                        </div>
                                    </div>
                                </td> -->
                                <td class="text-right">
                                    <div class="btn-group-action">
                                        <div class="btn-group">
                                            <a href="modifierProduit.php?reference=<?PHP echo urlencode($row['reference']); ?>" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <a  href="supprimerProduit.php?reference=<?PHP echo urlencode($row['reference']); ?>&id_projet=<?PHP echo $row['id_projet']; ?>" onclick="return confirm('Voulez vous vraiment supprimer ce Produit ?')" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons action-enabled">clear</i></a>
                                            <!--<td><a href="supprimerProduit.php?reference=">
                                                    Modifier</a></td>-->

                                        </div>
                                    </div>
                                </td>
                            </tr>
                                <!--<td class="text-right">
                                    <div class="btn-group-action">
                                        <div class="btn-group">
                                            <a href="" title="" class="btn tooltip-link product-edit">
                                                <i class="material-icons">mode_edit</i>
                                            </a>
                                            <form id="form1" method="POST" action="supprimerProduit.php">
                                            <a  href="javascript:{}"  class="btn tooltip-link product-edit" onclick="document.getElementById('form1').submit(); return false;">
                                                <i class="material-icons action-enabled">clear</i></a>
                                                <input type="hidden" value="" name="reference">
                                            </form>
                                        </div>
                                    </div>
                                </td>-->
                                <?PHP
                                }
                                ?>
                            </thead>
                        </table>
                        </div>
                    </div>
                    <br>
                    <div style="width:100%;">  
                                <h2 align="center"> Quantité restant pour chaque produit </h2>
                                <div align="center" id="piechart" style="width: 100%; height: 600px"></div>  
                    </div>   
                </div>
            </div>
        </form>



        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2019 Taha Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a>WASP</a>
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
    <script src="../../../../assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="../../../../assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="../../../../assets/js/init/fullcalendar-init.js"></script>

</body>
</html>
<script>
    function Dk() {
            var elem = document.getElementById('reset_searsh');
            elem.parentNode.removeChild(elem);
        var array = ["id_product", "noms", "refs", "id_categories","quantite_min","quantite_max","montant_min","montant_max"];
        var i = 0;
        for (;array[i];) {
            document.getElementById(array[i]).value='' ;
            i++;
        }
    }
    function fahd2() {
        var fahd =document.getElementById('Reftext').value ;
        var datastring ='namee='+ fahd;
        $.ajax({
            type:"post",
            url:"upload.php",
            data:datastring,
            cache:false,
            success:function (html) {
                $('#Re').html(html);
            }
        });
        return false;
    }
    function fahd() {
        document.getElementById("Re").value = document.getElementById('Reftext').value;
        //document.getElementById("dropzoneFrom").submit() ;
    }

    /* $(function() {
         $('#dropzoneFrom').on('submit', function(e) {
             var data = $("#dropzoneFrom :input").serialize();
             $.ajax({
                 type: "POST",
                 url: "script.php",
                 data: data,
             });
             e.preventDefault();
         });
     });*/
    //lim();
    function lim(fahd)
    {   var fah =document.getElementById(fahd).value;
        fah  = '5';
        //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
        $.ajax({
            url:"upload2.php",
            method:"POST",
            data: 'nome='+fah,
            success:function(data){
                $('.preview').html(data);
            }
        });
    }
    //lim();
    /*function fahd {
        //$ref = document.getElementById('Reftext').value ;
        document.getElementById("Re").value = document.getElementById('Reftext').value;
    }*/
    $(document).ready(function(){

        $(document).on('click', '.column_sort', function(){
            //$('#1234').append('<div >fahd</div>');
            var arroww = '&nbsp;<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="asc">fahd<span role="button" class="ps-sort" aria-label="Tri" ></span>';
            if  (document.getElementById('id_query')){var query = document.getElementById('id_query').value ;}
            //alert('rrrrrrrrr');
            var column_name = $(this).attr("id");
            var order = $(this).data("order");
            var arrow = '';
            var arrowe ='<span role="button" class="ps-sort" aria-label="Tri" >';
            //glyphicon glyphicon-arrow-up
            //glyphicon glyphicon-arrow-down
            if(order == 'desc')
            {
              //  arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';
                arrow = '<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="desc"><span role="button" class="ps-sort" aria-label="Tri" ></span>';
            }
            else
            {
                //arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';
                arrow = '<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="asc"><span  role="button" class="ps-sort" aria-label="Tri" >';
            }
            //arrow = '&nbsp;<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="asc">';
            //$('#1234').append('<div>fahd</div>');
            $.ajax({
                url:"sort.php",
                method:"POST",
                data:{column_name:column_name, order:order,query:query},
                success:function(data)
                {
                   // $('#1234').append('<div >fahd</div>');
                    $('#employee_table').html(data);
                    $('#'+column_name+'').append(arrow);
                    var ids = ["id", "reference", "nom", "categorie","quantite","prix","date"];
                    var i = 0;
                    for (;ids[i];) {
                        if (ids[i] != column_name)
                            $('#'+ids[i]+'').append(arrowe);
                        i++;
                    }

                    //$('#'+column_name+'').append(arrow);
                    //$('#'+column_name+'').html(arrow);

                    //$('#id').append(arrow);
                }
            })
        });
        $(document).on('click', '#searsh', function(){
            //alert("CX");
            var test1=0;
            var test2=0;
            var id = document.getElementById('id_product').value ;
            var nom = document.getElementById('noms').value ;
            var reference = document.getElementById('refs').value ;
            var categorie = document.getElementById('id_categories').value ;
            var quantite_min = document.getElementById('quantite_min').value;
            var quantite_max = document.getElementById('quantite_max').value;
            var montant_min = document.getElementById('montant_min').value;
            var montant_max = document.getElementById('montant_max').value;
//alert(id+nom,+referennce+categorie+quantite_max+quantite_min,montant_max,montant_min);
            if ((montant_min!=='' && montant_max!=='')){test1=1;}
            if ((montant_min==='' && montant_max==='')){test1=2;}
            if ((quantite_min!=='' && quantite_max!=='')){test2=1;}
            if ((quantite_min==='' && quantite_max==='')){test2=2;}


            if( ( id!=='' || nom!=='' || reference!=='' || categorie!=='' || test1===1 || test2===1 ) && ( (test1===1 && test2===1) || (test1===2 && test2===2) || (test1===2 && test2===1) ||(test1===1 && test2===2) ) )
            {//alert('a'+montant_min+'b'+montant_max);
            $.ajax({
                url:"Recherche.php",
                method:"POST",
                data:{id:id, nom:nom,reference:reference,categorie:categorie,qmax:quantite_max,qmin:quantite_min,mmax:montant_max,mmin:montant_min},
                success:function(data)
                {
                    $('#employee_table').html(data);
                }
            })
            }

        });

        $(document).on('keyup', '#id_product,#noms,#refs,#id_categories,#quantite_max,#quantite_min,#montant_max,#montant_min', function(){
            var id = document.getElementById('id_product').value ;
            var nom = document.getElementById('noms').value ;
            var reference = document.getElementById('refs').value ;
            var categorie = document.getElementById('id_categories').value ;
            var quantite_min = document.getElementById('quantite_min').value;
            var quantite_max = document.getElementById('quantite_max').value;
            var montant_min = document.getElementById('montant_min').value;
            var montant_max = document.getElementById('montant_max').value;

            var myEle = document.getElementById("reset_searsh");

            if (id==='' && nom==='' && reference==='' && categorie==='' && quantite_min==='' && quantite_max==='' && montant_max==='' && montant_min==='' && myEle) {
                var elem = document.getElementById('reset_searsh');
                elem.parentNode.removeChild(elem);
            }
            if(!myEle && (id!=='' || nom!=='' || reference!=='' || categorie!=='' || quantite_min!=='' || quantite_max!=='' || montant_max!=='' || montant_min!=='' ) ){
                var vare = '\n' +
                    '<button type="reset" class="btn btn-link" onclick="Dk()" name="products_filter_reset"  title="Réinitialiser" id="reset_searsh" style="margin-left: 5%">\n' +
                    '<i class="material-icons">clear</i>\n' +
                    'Réinitialiser\n' +
                    '</button>';
                $('input[name=Reins]').after(vare);
            }
        });

       /* $(document).on('keyup', '#id_product', function(){
            var id = document.getElementById('id_product').value ;
            var nom = document.getElementById('noms').value ;
            var reference = document.getElementById('refs').value ;
            var categorie = document.getElementById('id_categories').value ;

            var myEle = document.getElementById("reset_searsh");

            if (id==='' && nom==='' && reference==='' && categorie==='' && myEle) {
                var elem = document.getElementById('reset_searsh');
                elem.parentNode.removeChild(elem);
            }
            //if(!myEle && id==='' && nom==='' && reference==='' && categorie==='' ){
                var vare = '&nbsp;\n' +
                    '<button type="reset" class="btn btn-link" name="products_filter_reset"  title="Réinitialiser" id="reset_searsh" style="">\n' +
                    '<i class="material-icons">clear</i>\n' +
                    'Réinitialiser\n' +
                    '</button>';
                $('input[name=Reins]').after(vare);
            }
        });*/
        /*Dropzone.options.dropzoneFrom = {
            autoProcessQueue: false,
            acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
            init: function(){
                var submitButton = document.querySelector('#submit-all');
                myDropzone = this;
                submitButton.addEventListener("click", function(){
                    myDropzone.processQueue();
                });
                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                        var _this = this;
                        _this.removeAllFiles();
                    }

                    list_image(); // mouch héthi doub mayo5el lel page
                    list_image(); //
                });
            },
        };*/

        list_image();
        list_image();

        function list_image()
        {   var fah =$('.Reftext').val();
        fah = 'test';
            //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
            $.ajax({
                url:"upload2.php",
                method:"POST",
                data: 'nome='+fah,
                success:function(data){
                    $('.preview').html(data);
                }
            });}

            //myfunc();

        function myfunc(s1) {
            //var alr = document.getElementById('test').value ;
            //alert(alr);
            var fah = s1 ;
            //var fah =document.getElementById('test').value;
            //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
            $.ajax({
                url:"upload2.php",
                method:"POST",
                data: 'nome='+fah,
                success:function(data){

                    // $('#test').html(data);
                    //$().html(data);
                    //document.getElementById(s1).innerHTML(data);
                    //s1.html(data);
                    //$(#s1).html(data);
                    $('#'+s1).html(data);
                }
        });}

       /* $(document).on('click', '.remove_image', function(){
            var name = $(this).attr('id');
            var fah =$('.Reftext').val();
            $.ajax({
                url:"upload2.php",
                method:"POST",
                data:{name:name,nome:fah},
                failure:function(data)
                {
                    list_image(); // mouch héthi doub mayo5el lel page
                    list_image();

                }
            })
        });*/
        /*$(document).on('change',filter_column_id_product_min, function(){
            alert('aabvc');

            list_images();
        })
        var element = document.getElementById('filter_column_id_product_min');
        element.ons = function () {
            alert('bbb');
        }*/
    });
    /* $(document).on('load','#filter_column_id_product_min',function() {
         $.event.trigger('nameOfCustomEvent');
     });

     $('#filter_column_id_product_min').bind('nameOfCustomEvent', function(){
         alert('a');
         console.log(this);
     });*/
</script>

<?php }
    }
    }
    else
    {
        echo "NOPeeeee";
    }
    ?>