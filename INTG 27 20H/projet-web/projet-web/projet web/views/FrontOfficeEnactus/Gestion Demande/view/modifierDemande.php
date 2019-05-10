

<?PHP


include "../../../../core/ProjetC.php";
include "../../../../core/ClientC.php";
session_start();
if($_SESSION["login_in"])
{
$Projet1C=new ProjetC();
$listeProjet=$Projet1C->afficherProjets();
$Client1C=new ClientC();
$r=$Client1C->recupererClient($_SESSION["ID"]);
$idcl=$_SESSION["ID"];
foreach ($r as $row)
{
	$name=$row['pseudo'];
	$image=$row['image'];
}



//var_dump($listeEmployes->fetchAll());
?>

<!DOCTYPE html>
<html lang="fr">
<!-- Mirrored from escope.tn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 13:51:51 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modifier Demande - Enactus ICT</title>

<link href="../../client/css/ProfilClient.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Bootstrap CSS -->
<link href="../../client/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS Custom -->
<link rel="stylesheet" type="text/css" href="../../client/css/style.css">


<link href="../../client/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../../client/css/animate.min.css">
<link href="../../client/css/gallery.css" rel="stylesheet">


<!--== font-awesome ==-->

<!--== magnific-popup ==-->
<link href="../../assets/css/magnific-popup.css" rel="stylesheet">

<!--== owl carousel ==-->
<link href="../../assets/css/owl.carousel.css" rel="stylesheet">

<!--== animate css ==-->
<link href="../../assets/css/animate.min.css" rel="stylesheet">

<!--== style css ==-->
<link href="../../assets/css/style.css" rel="stylesheet">

<!--== responsive css ==-->
<link href="../../assets/css/responsive.css" rel="stylesheet">

<!--== theme color css ==-->
<link href="../../assets/css/theme-color.css" rel="stylesheet">

<script src="../../assets/js/jquery-2.1.4.min.js"></script>

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="styles/ajouter_reclamation.css">
<link rel="stylesheet" type="text/css" href="styles/ajouter_reclamation_responsive.css">

</head>

<!-- regggergegege -->
<body>
<header class="navbar-fixed-top">
<div class="container">
<div class="row">
<div class="header_top">
<div class="col-md-2">
<div class="logo_img">
<a href="#home"><img src="../../images/logo3.png" alt="logoimage" width="100" height=auto style="margin-left: 50px;"></a>
</div>
</div>

<div class="col-md-10">
<div class="menu_bar">	
<nav role="navigation" class="navbar navbar-default">
<div class="navbar-header">
<button id="menu_slide"  aria-controls="navbar" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>					   
<div class="collapse navbar-collapse" id="navbar">                    
<ul class="nav navbar-nav">
<li><a href="#" class="js-target-scroll"><?php echo $name;?></a></li>
<li><a href="../../client/EspaceClient/indexClient.php#home" class="js-target-scroll">accueil</a></li>
<li><a href="../../client/EspaceClient/indexClient.php#services" class="js-target-scroll">Introduction</a></li>
<li><a href="../../client/EspaceClient/indexClient.php#work" class="js-target-scroll">Les Projets</a></li>
<li><a href="../../client/EspaceClient/indexClient.php#contact" class="js-target-scroll">Contact</a></li>
<li><a href="../../login/logout.php" class="js-target-scroll">déconnexion</a></li>

<?php if(substr($_SESSION["ID"],0,1)=="F"){ ?>
	<li><a href="#" ><img src="<?php echo $image ?>" alt="https://www.flaticon.com/authors/freepik"	width="30px" height=auto style="background-color:none;" ></a></li>
<?php } 
else {?>
<li><a href="#" ><img src="../../client/EspaceClient/<?php echo $image ?>" alt="https://www.flaticon.com/authors/freepik"	width="30px" height=auto style="background-color:none;" ></a></li>
<?php } ?>
<li><a href="../../client/panier/cart.php"><img src="../../Projet/assets/images/cart.svg" width="30px" height=auto style="background-color:none;filter: invert(100%); filter:brightness(100);"></a></li>

</ul>

</div>
</nav>
</div>
</div>
</div>
</div>
</div>
</header>

<section id="home" class="contact_bg" style="height: 1160px;">
<div class="container">
<h2 style="color:#fec139"> Votre Espace :</h2>

<div class="container">
<div class="row profile">
<div class="col-md-3">
<div class="profile-sidebar">
<div class="profile-userpic">
<?php if(substr($_SESSION["ID"],0,1)=="F"){ ?>
	<img src="<?php echo $image ?>" class="img-responsive" alt="">
<?php } 
else {?>
<img src="../../client/EspaceClient/<?php echo $image ?>" class="img-responsive" alt="">
<?php } ?>
</div>

<div class="profile-usertitle">
<div class="profile-usertitle-name">
<?php echo $name ?>
</div>
<!-- <div class="profile-usertitle-job">
Agriculteur
</div> -->
</div>

<div class="profile-usermenu">
<ul class="nav">
<li >
<a href="ProfilClient-Informations.php">
<i class="glyphicon glyphicon-user"></i>
Mes Informations </a>
</li>

<li class="active">
<a href="ProfilClient-Commandes.php">
<i class="glyphicon glyphicon-shopping-cart"></i>
Mes Commandes </a>
</li>

<li>
<a href="">
<i class="glyphicon glyphicon-ok"></i>
Mes Réclammations </a>
</li>

<li>
<a href="">
<i class="glyphicon glyphicon-flag"></i>
Déconnexion </a>
</li>
</ul>
</div>
<!-- END MENU -->
</div>
</div>
<div class="col-md-9">
<div class="profile-content" >

<h3 style="color:black;"> Ajouter une Demande: </h3>
<br>
<div>

<div style="right:10%;" class="container">
<div class="row">
		<!-- Checkout -->

		<div >
			<div >
				<div >
					

                                    <script >
                                        function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#blah')
                                                    .attr('src', e.target.result)
                                                    .width(150)
                                                    .height(200);
                                            };

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }
                                    </script> 
									<?PHP
									include "../core/demandeC.php";
                                    $demande1C=new DemandeC();
									$listeProduit = $demande1C->recupererProduit();

						

									?>
                                     
                                     
                <div class="row">
                    <div >
					<div style="width:100%;" >
                            
                            <div style="left: 200px;" >
                                
                                
                                
                                <form  enctype="multipart/form-data" action="modifier_demande.php?id_demande=<?PHP echo $_GET['id_demande'];?>&nomProduit=<?PHP echo $_GET['nomProduit'];?>&id_client=<?PHP echo $_GET['id_client'];?>" method="POST"id="checkout_form" class="checkout_form">
								<div><div >Choix de l'image : <input type="file" name="choix_image" onchange="readURL(this)"><img id="blah" src="#" alt="" /></div>
                                
                                <div ><select style="height:44px; text-align:center;border-radius: 3px; right:200px;color:grey; " name="nomProduit" >
                                    <option value="none">Nom du Produit</option>
                                    <?PHP 
                                    foreach($listeProduit as $row){
                                    ?>
                                    <option  value="<?PHP echo $row['nom']?>"><?PHP echo $row['nom']?></option>
                                    <?PHP } ?>  
                                </select></div></div>
                                
                                <br>

                                    <div  class="checkout_title">Nouveau ID de la Commande</div>
                                    <div class="row">
                                        <div class="col-lg-6">tapez le nouveau ID de la commande correspondante au produit:
                                            <!-- Name -->
                                            <input value="<?PHP echo $_GET['id_commande'];?>" name="id_commande" style="width: 550px;"  type="text" id="checkout_name" class="checkout_input" placeholder="" required="required" onblur="">
                                            <h6 id="msg_err_categorie" style="color:red;font-size: 12px;"> </h6>
                                        </div>
                                    </div>


                                   
                                    <div  class="checkout_title">Nouvelle Déscription</div>
												<div class="row">
													<div class="col-lg-6">tapez la nouvelle Description (maximum 200 caractéres):
														<!-- Name -->
														<textarea name="description" style="width: 550px; height: 220px;"  type="text" id="checkout_name" class="checkout_input" placeholder="" required="required" onblur=""> </textarea>
														<h6 id="msg_err_description" style="color:red;font-size: 15px;"> </h6>
			
													</div>
                                                </div>
                                                <div  ><input value="Envoyer la Demande" name="demander" type = "submit" class="checkout_button trans_200" style="color:white;border:0px;"></div>
                                    

                                </form>
                            </div>
							</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
	
	
	</div>
	</div>
	<br>
	<br>
	</div>
	</section>
	</body>
	
	
	<?php } ?>