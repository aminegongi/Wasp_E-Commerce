

<?PHP
include "../core/reclamationC.php";


																				include "../../../../core/ProjetC.php";
																				include "../../../../core/ClientC.php";
																				session_start();
																				if($_SESSION["login_in"])
																				{
                                        										$Projet1C=new ProjetC();
																				$listeProjet=$Projet1C->afficherProjets();
																				$Client1C=new ClientC();
																				$r=$Client1C->recupererClient($_SESSION["ID"]);
																				foreach ($r as $row)
																				{
																					$name=$row['pseudo'];
																					$image=$row['image'];
																				}
																				


$reclamation1C=new ReclamationC();
$listeReclamation=$reclamation1C->afficherReclamationFront();

//var_dump($listeEmployes->fetchAll());
?>

<!DOCTYPE html>
<html lang="fr">
<!-- Mirrored from escope.tn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 13:51:51 GMT -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Informations - Enactus ICT</title>
    
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
                                      <li><a href="#" ><img src="../../client/EspaceClient/<?php echo $image ?>" alt="https://www.flaticon.com/authors/freepik"	width="30px" height=auto style="background-color:none;" ></a></li>
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
					<img src="../../client/EspaceClient/<?php echo $image ?>" class="img-responsive" alt="">
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
            <div class="profile-content" style="background-color:transparent;" >

			<div align="left">
			<h4 style="color:white;"> Mes Commandes: </h4>
			</div>
			<div align="right">
			<a  class="btn btn-primary" href="ajouterReclamation.php"> Ajouter Une Réclamations</a>
			</div>
               <br>
               <div class="table-responsive" style="background:white;">
                <table class="table">
                    <thead>
                    <tr>
						<th>Designation</th>
						<th>Categorie</th>
						<th>Description</th>
						<th>Reponse</th>
						<th>Supprimer</th>
						<th>Modifier</th>
                    </tr>
                    </thead>
                    <tbody>

					<?PHP

						foreach($listeReclamation as $row){

							?>
							<tr>
							<td scope="row" ><?PHP echo $row['designation']; ?></td>
							<td><?PHP echo $row['categorie']; ?></td>
							<td><?PHP echo $row['description']; ?></td>
							<td><?PHP echo $row['reponse']; ?></td>

							<td>
								<a class="btn btn-warning" href="modifierReclamation.php?designation=<?php echo $row['designation']?>">Modifier</a>
							</td>
							
							
							<td>
								<a class="btn btn-danger" href="supprimerReclamation.php?designation=<?php echo $row['designation']?>">Supprimer</a>
							</td>
							</tr>
							<?PHP
						}
						?>
                    </tbody>
                </table>
                </div>

</div>
</div>
<br>
<br>
</div>
</section>
</body>


<?php } ?>