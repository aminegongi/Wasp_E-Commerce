<?PHP

include "../core/Categories.php";
$Categories=new Categories();
$Projets= new Projets();
$result=$Categories->afficherCategoriess();
$result2=$Projets->afficherProjetss();
//var_dump($listeEmployes->fetchAll());
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajouter Produits</title>
    <meta name="description" content="Ajouter Produits">
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
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />


    <!--<script src="../../Ajj.js"></script>-->

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <link href="AfficherProduitCss.css" rel="stylesheet" />

    <!--
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
        <script src="ImageJS.js"></script>-->

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="../../ImageJS.js"> </script>
    <!--<script src="../../fahdscript.js"></script>-->
</head>



<body>

<!--left-panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="menu-item-has-children dropdown">
                    <a class="dropdown-toggle" href="../../../../index.html"><i class="menu-icon fa fa-laptop" ></i>Dashboard </a>
                </li>
                <li class="menu-title">Super Admin</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Gestion Admins</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Admins/CAdmins.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Admins/AAdmins.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Admins/MAdmins.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Admins/SAdmins.html">Supprimer</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Gestion Projets</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Projets/CProjets.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Projets/AProjets.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Projets/MProjets.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Projets/SProjets.html">Supprimer</a></li>
                    </ul>
                </li>


                <li class="menu-title">Gestions</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-bell"></i>Produits</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Produit/php/views/afficherProduit.php">Consulter</a></li> <!-- AAAAAAAAAAAAAAAAAAAAAAA -->
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Produit/php/views/ajouterProduit.php">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Produit/MProduit.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Produit/SProduit.html">Supprimer</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Fournisseurs</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Fournisseur/CFournisseur.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Fournisseur/AFournisseur.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Fournisseur/MFournisseur.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Fournisseur/SFournisseur.html">Supprimer</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Livraisons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Livraisons/CLivraison.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Livraisons/ALivraison.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Livraisons/MLivraison.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Livraisons/SLivraison.html">Supprimer</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-shopping-cart"></i>Commandes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-eye"></i><a href="../../../Gestion Commandes/CCommande.html">Consulter</a></li>
                        <li><i class="menu-icon fa fa-plus-circle"></i><a href="../../../Gestion Commandes/ACommande.html">Ajouter</a></li>
                        <li><i class="menu-icon fa fa-pencil-square-o"></i><a href="../../../Gestion Commandes/MCommande.html">Modifier</a></li>
                        <li><i class="menu-icon fa  fa-eraser"></i><a href="../../../Gestion Commandes/SCommande.html">Supprimer</a></li>
                    </ul>
                </li>
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

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="../../../../images/admin.jpg" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- /#header -->
    <!-- content -->
    <style>
        .ErrFah{
            font-size: 15px ;
            color: red;
        }
    </style>
    <div class="content">
        <!-- EKTOB HOUNI -->

        <div class="row">
            <!-- ============================================================== -->
            <!-- valifation types -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header" style="font-weight : bolder">Ajout produit</h5>
                    <div class="card-body">
                        <form method="POST" id="validationform" data-parsley-validate="" novalidate=""  action="../../../Gestion%20Produit/php/views/ajoutProduit.php"> <!-- HIGHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Référence</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" id="Reftext" name="reference"   placeholder="Ref.." class="form-control" onblur="RefVerif(this.id,'textRef','Reftext_ck')"> <!-- RefVerif(this.id,'textRef')-->
                                    <input type="hidden" class="CHECK" required="" id="Reftext_ck">
                                </div>
                                <p id="textRef" class="ErrFah"></p>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Nom</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" id="Nomtext"  name="nom" data-parsley-minlength="6"  placeholder="" class="form-control" onblur="CheckInfoLettre(this.id,'textNom','Nomtext_ck')">
                                    <input type="hidden" class="CHECK" required="" id="Nomtext_ck">
                                </div>
                                <p id="textNom" class="ErrFah"></p>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >ID Projet</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select name="id_projet" data-parsley-length="[5,10]"  class="form-control" id="id_projets" onchange="fahd()">
                                        <option disabled selected>ID projet</option>
                                        <?PHP
                                        foreach($result2 as $row) {
                                            ?>
                                            <script>
                                                var dive = '<option value="<?PHP echo $row['ID']; ?>"><?PHP echo $row['ID']; ?></option>';
                                                $('#id_projets').append(dive);
                                            </script>
                                            <?PHP
                                        }
                                        ?>
                                    </select>
                                </div>
                                <input type="hidden" id="Id_projet_ck">
                            </div>

                            <!--                -->
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Catégorie</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" list="id_categorie" id="cattext" name="categorie"  data-parsley-minlength="6"  placeholder=""  class="form-control" onblur="CheckInfoLettrec(this.id,'textcat','Cattext_ck')">
                                    <input type="hidden" class="CHECK" required="" id="Cattext_ck">
                                    <datalist id="id_categorie">
                                        <?PHP
                                        foreach($result as $row) {
                                            ?>
                                            <script>
                                                    var valu = "<?PHP echo $row['nom']; ?>" ;
                                                  //  alert(valu);
                                                    var dive = '<option value="<?PHP echo $row['nom']; ?>"> </option>';
                                                    $('#id_categorie').append(dive);
                                            </script>
                                            <?PHP
                                        }
                                        ?>
                                    </datalist>
                                </div>
                                <p id="textcat" class="ErrFah"></p>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" id="PrixTTCtext" >Prix-HT</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" id="Prixtext"  name="prixHT" data-parsley-maxlength="6"  value="0" placeholder="" class="form-control" onblur="FloatVerif(this.id,'textPrix','Prixtext_ck')">
                                    <input type="hidden" class="CHECK" required="" id="Prixtext_ck">
                                </div>
                                <p id="textPrix" class="ErrFah"></p>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Taux du taxe</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <select type="text"  data-parsley-length="[5,10]" placeholder="" class="form-control" id="tax" onchange="CalculTax('taxtext','Prixtext',this.id,'P_ck')">
                                        <option value="" disabled selected>Taxe</option>
                                        <option value="18">18%</option>
                                        <option value="20">20%</option>
                                    </select>
                                </div>
                                <input type="hidden" class="CHECK" required="" id="P_ck">
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Prix</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text"  data-parsley-min="6" name="prix" placeholder="" class="form-control" id="taxtext" onblur="FloatVerif(this.id,'textPr','PRtext_ck')" >
                                    <input type="hidden" class="CHECK" required="" id="PRtext_ck">
                                </div>
                                <p id="textPr" class="ErrFah"></p>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Quantité</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="text" id="Qutext"  name="quantite" data-parsley-min="6" placeholder="" class="form-control" onblur="VerifQuantite(this.id,'textquantite','Quantitetext_ck')">
                                    <input type="hidden" class="CHECK" required="" id="Quantitetext_ck">
                                </div>
                                <p id="textquantite" class="ErrFah"></p>
                            </div>
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Date D'ajout</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input type="date" id="ddate" name="date" data-parsley-min="6" placeholder="" class="form-control" value="<?php echo date('Y-m-d'); ?>" > <!-- -->
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" >Description</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea  class="form-control" name="description" style="height: 250px"></textarea>
                                </div>
                            </div>

                            <!-- -->

                            <!-- -->

                            <div class="form-group row text-right">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <button type="button" id="Ssubmit" class="btn btn-space btn-primary" name="ajouter" value="ajouter">Submit</button>
                                    <button class="btn btn-space btn-secondary">Cancel</button>
                                </div>
                            </div>

                        </form>
                        <!--<div class="container">
                            <br />
                            <br />
                            <form action="../Gestion%20Produit/upload.php" class="dropzone" id="dropzoneFrom" method="POST">
                                <input type="hidden" id="Re" name="Refim" value="aloo">
                                <div align="center">
                                    <button type="submit" class="btn btn-info" id="submit-all" onclick="fahd2()" >Upload</button>
                                    <p id="ff"></p>
                                </div>
                            </form>
                            <br />
                            <br />

                            <br />
                            <br />
                            <div id="preview"></div>
                            <br />
                            <br />
                        </div>-->
                        <div class="container">
                            <br />
                            <!--<h3 align="center">How to Upload a File using Dropzone.js with PHP</h3>-->
                            <br />
                            <form action="upload.php" class="dropzone" id="dropzoneFrom" method="POST">
                                <!-- action="../Gestion%20Produit/upload.php"  -->
                                <input type="hidden" id="Re" name="Refim"  >
                                <input type="hidden" id="Ree" name="Idpim"  >
                                <div align="center">
                                    <button type="submit" class="btn btn-space btn-primary" id="submit-all" onclick="return fahd2()">Upload</button>
                                    <p id="ff"></p>
                                </div>
                            </form>
                            <br />
                            <br />

                            <br />
                            <br />
                            <div id="preview"></div>
                            <br />
                            <br />
                        </div>
                    </div>

                </div>

                <!-- ============================================================== -->
                <!-- end valifation types -->
                <!-- ============================================================== -->
            </div>


        </div>

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
   /* $(document).ready(function(){
        TodayDate('ddate');
    });*/
        $('#Ssubmit').click(function () {
var i=0;
var error = false ;
var checke ='';

        jQuery.each($('.CHECK'), function() {
            i++;
            checke = $(this).val();
            //alert(checke+i);
            if( checke !== "true"){
               // alert('buton');
                error = true ;
                var button = $('#Ssubmit');
                button.prop('type','button');
            }
            /*if(!error){
                alert('submit');
                button.prop('type', 'submit');
            }*/
        });
        if (!error)
        {
            //alert('submit');
            var button = $('#Ssubmit');
            button.prop('type', 'submit');
        }
    });
   /* function CheckRequired() {
        alert('11');
        $('.required').each(function () {
            alert('22');
        });
    }*/
   /* $(document).ready(function(){

        $(document).on('click', '.column_sort', function(){
            //$('#1234').append('<div >fahd</div>');
            var arroww = '<div class="ps-sortable-column" data-sort-is-current="true" data-sort-direction="asc">fahd<span role="button" class="ps-sort" aria-label="Tri" ></span>';

            var column_name = $(this).attr("id");
            var order = $(this).data("order");
            var arrow = '';
            var arrowe ='<span role="button" class="ps-sort" aria-label="Tri" >';
            $.ajax({
                url:"sort.php",
                method:"POST",
                data:{column_name:column_name, order:order},
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
                }
            })
        });

    });*/
  /* $(document).on('click', '#Ssubmit', function(){
       alert('1');
       $('.CHECK').each(function() {
           alert('33');
           var $this = $(this);
           if ($this.text() == '') {
               //$this.width(510);
           } else {
               // $this.width(20);
           }
       })​

       Fahhhd();
       alert('2');
   });*/

   /*function Fahhhd() {
       alert('12');

   }*/
   /*function CheckRequired() {
       var ret = true;
    alert('11');
       $('.required').each(function () {
           alert('22');
           var check = $(this).val();

           if (check == '') {
               //alert($(this).attr("id"));
               //event.preventDefault();
           }
       });

       if (!ret) {
           alert("One or more fields cannot be blank");
           //event.preventDefault();
       }
   }*/
   /*function check_required_inputs() {
       alert('function');
       $('.required').each(function(){
           alert('req');
           if( $(this).val() == "false" ){
               alert('Please fill all the fields');
               var button = $('#Ssubmit');
               button.prop('type','button');
               var error = true;
               if(!error){
                   button.prop('type', 'submit');
                   alert('Jq');
               }
           }
       });
   };
*/
   /*$(document).on('click', '#Ssubmit', function(){
       alert('1');
       CheckRequired();
       alert('2');
   });*/
    </script>

<script>
    function fahd2() {
       // var fahd =document.getElementById('Reftext').value ;
       // fahd = 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
       // var fahed ='Projet2';
       // var datastring ='namee='+ fahd;
        //var datastringe ='idde='+ fahed;
        $.ajax({
            type:"post",
            url:"upload.php",
            //data:datastring,
            //date:{iddee:fahed},
            //data: {nomee:fahed,datastring:fahd},
            //cache:false,
            //success:function (html) {
               // $('#Re').html(html);
                //$('#Ree').html(html);
            //}
        });
        return false;
    }
    function fahd() {

        document.getElementById("Ree").value = document.getElementById('id_projets').value;
        //alert(document.getElementById("Ree").value);
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


    /*function fahd {
        //$ref = document.getElementById('Reftext').value ;
        document.getElementById("Re").value = document.getElementById('Reftext').value;
    }*/
    $(document).ready(function(){

        Dropzone.options.dropzoneFrom = {
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
        };

        list_image();
        list_image();

        function list_image()
        {   var fah =$('#Reftext').val();
            var fahh =$('#id_projets').val();
            //$.post('upload.php',{postref:fah},function (data) {$('#result').html(data)});
            $.ajax({
                url:"upload.php",
                method:"POST",
                data: {nome:fah,nomee:fahh},
                success:function(data){
                    $('#preview').html(data);
                }
            });

        }

        $(document).on('click', '.remove_image', function(){
            var name = $(this).attr('id');
            var fah =$('#Re').val();
            var fahh =$('#id_projets').val();
            $.ajax({
                url:"upload.php",
                method:"POST",
                data:{name:name,nome:fah,nomee:fahh},
                success:function(data)
                {
                    list_image(); // mouch héthi doub mayo5el lel page
                    list_image();

                }
            })
        });

    });
</script>
<script>
    function RefVerif(s1,s2,s3) {
        var data=document.getElementById(s1) ;
        var datar = data.value.substring(0,1);
        var datanr =data.value.substring(1,data.value.length);

        if (data.value.length<3) {
            data.style.border = "1px solid #FF0000";
            document.getElementById(s2).innerHTML="*Referance invalide";
            document.getElementById(s3).value="false";
        }
        else {data.style.border = "";
            document.getElementById(s2).innerHTML="";
            document.getElementById(s3).value="true";
        }
        document.getElementById("Re").value = document.getElementById('Reftext').value;

    }
    function CheckInfoLettre(s1,s2,s3)
    {   var data=document.getElementById(s1) ;
        var regex = /^[a-zA-Z ]{3,30}$/;
        if(!regex.test(data.value) || data.value== "")
        {
            data.style.border = "1px solid #FF0000";
            document.getElementById(s2).innerHTML="*Nom invalide";
            document.getElementById(s3).value="false";

            return false;
        }
        else
        {
            data.style.border = "";
            document.getElementById(s2).innerHTML="";
            document.getElementById(s3).value="true";

            return true;
        }
    }

    function CheckInfoLettrec(s1,s2,s3)
    {   var data=document.getElementById(s1) ;
        var regex = /^[a-zA-Z ]{3,30}$/;
        if(!regex.test(data.value) || data.value== "")
        {
            data.style.border = "1px solid #FF0000";
            document.getElementById(s2).innerHTML="*Categorie invalide";
            document.getElementById(s3).value="false";

            return false;
        }
        else
        {
            data.style.border = "";
            document.getElementById(s2).innerHTML="";
            document.getElementById(s3).value="true";

            return true;
        }
    }

    function FloatVerif(s1,s2,s3) {

        var data = document.getElementById(s1);
        var datanr =data.value.substring(1,data.value.length);
        //data.value="0";
        var regex = /^-?\d*(\.\d+)?$/;
        // var datan = data.value.substring(data.value.indexOf("."),data.value.length) ;

        if (!regex.test(data.value) || data.value == "" || datanr == "-" ) {
            data.style.border = "1px solid #FF0000";
            document.getElementById(s2).innerHTML = "*Prix invalide";
            document.getElementById(s3).value="false";

            return false;
        } else {
            data.style.border = "";
            document.getElementById(s2).innerHTML = "";
            document.getElementById(s3).value="true";

            return true;
        }

    }
    function CalculTax(s1,s2,s3,s4) {

        var data1=document.getElementById(s2).value;
        var data2=document.getElementById(s3).value;
        document.getElementById(s4).value="true";
        document.getElementById('PRtext_ck').value="true";

        document.getElementById(s1).value=((data2*data1*0.01)+Number(data1));
    }
    function VerifQuantite(s1,s2,s3) {
        var data=document.getElementById(s1);
        var regex =/^[1-9][0-9]?$|^100$/ ;

        if (!regex.test(data.value) || data.value == "" ) {
            data.style.border = "1px solid #FF0000";
            document.getElementById(s2).innerHTML = "*Verifier la quantité";
            document.getElementById(s3).value="false";

            return false;
        } else {
            data.style.border = "";
            document.getElementById(s2).innerHTML = "";
            document.getElementById(s3).value="true";

            return true;
        }
    }
    function TodayDate(s1) {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();

        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        today = mm + '/' + dd + '/' + yyyy;
        document.getElementById(s1).value=today;
    }
    /*
    function check_required_inputs() {
        $('.required').each(function(){
            if( $(this).val() == "false" ){
                var button = $('#Ssubmit');
                button.prop('type','button');
                var error = true;
            }
            if(!error){
                button.prop('type', 'submit');
            }
        });
    });*/
    </script>