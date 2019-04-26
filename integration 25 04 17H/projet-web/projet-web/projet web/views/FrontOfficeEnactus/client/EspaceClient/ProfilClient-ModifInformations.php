<?php
																				include "../../../../core/ProjetC.php";
																				include "../../../../core/ClientC.php";
																				include "../../../../entities/client.php";
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
																					$mail=$row['mail'];
																					$passwd=$row['passwd'];
																					$adress=$row['Adresse'];
																					$phone=$row['NumTel'];
																					$nom=$row['nom'];
																					$prenom=$row['prenom'];
																					$date=$row['date'];
																				}
																				
?>
<!DOCTYPE html>
<html lang="fr">
<!-- Mirrored from escope.tn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 13:51:51 GMT -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Informations - Enactus ICT</title>
    
    <link href="../css/ProfilClient.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- Bootstrap CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <!-- favicon Icon -->
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- CSS Plugins -->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/animate.min.css">
        <link href="../css/gallery.css" rel="stylesheet">

        
        <!--== font-awesome ==-->
        
        <!--== magnific-popup ==-->
		<link href="../../assets/css/magnific-popup.css" rel="stylesheet">
		<link href="./style.css" rel="stylesheet">
		<script src="./script.js"></script>
        
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
										<li><a href="../indexClient.php#home" class="js-target-scroll">accueil</a></li>
									  <li><a href="../indexClient.php#services" class="js-target-scroll">Introduction</a></li>
									  <li><a href="../indexClient.php#work" class="js-target-scroll">Les Projets</a></li>
                                      <li><a href="../indexClient.php#contact" class="js-target-scroll">Contact</a></li>
																			<li><a href="../../login/logout.php" class="js-target-scroll">déconnexion</a></li>
                                      <li><a href="#" ><img src="<?php echo $image ?>" alt="https://www.flaticon.com/authors/freepik"	width="30px" height=auto style="background-color:none;" ></a></li>
																			<li><a href="../panier/cart.php"><img src="../Projet/assets/images/cart.svg" width="30px" height=auto style="background-color:none;filter: invert(100%); filter:brightness(100);"></a></li>

																		</ul>

              </div>
						</nav>
					</div>
    	  </div>
			  </div>
			</div>
		</div>
</header>

<section id="home" class="contact_bg" style="height: 860px;">
	<div class="container">
    <h2 style="color:#fec139"> Votre Espace :</h2>

	<form action="#" method="POST" enctype="multipart/form-data">
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="profile-userpic">
				<label for="file" class="label-file" style="margin-left: 60px;">
                                                        <ul class="caption-style-1" >
                                                                <li>
                                                                    <img id="image" src="<?php echo $image;?>" alt="" >
                                                                    <div class="caption">
                                                                        <div class="blur"></div>
                                                                        <div class="caption-text">
                                                                            <h1>Ajouter Image</h1>
                                                                            <img alt="plus"  src="./plus.png" style="width: 40px;height: 40px;margin-left: 55px;filter: invert(100%);margin-top: 10px;"  >
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                </label> 
                                                <input type="file" name="imageAdmin" id="file" style="display:none;" accept="image/*" title="Ajouter des photos" onchange="loadFile(event)" />
                                                
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
						<li class="active">
							<a href="ProfilClient-Informations.php">
							<i class="glyphicon glyphicon-user"></i>
							Mes Informations </a>
						</li>
                        
                        <li>
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
            <div class="profile-content">

                <!-- Ekteb houni el code  -->
               <h4 style="color:black;"> Mes Informations: </h4>
               <div >

                    <div class="form-group">
                        <label >Adresse Mail:</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $mail;?>"  name="mail" readonly>
                    </div>

                    <div class="form-group">
                        <label >Mot de Passe:</label>
                        <input type="password" class="form-control" value="<?php echo $passwd;?>"  name="passwd" id="pass">
                    </div>

                    <div class="form-group">
                        <label >Adresse:</label>
                        <input type="text" class="form-control" value="<?php echo $adress;?>" name="adress" id="email">
                    </div>

                    <button type="submit" name="Valider" class="btn btn-warning ">Valider les Modifications</button>
					</form>
					

					<?php 
if (isset($_POST['Valider'])){
          if (isset($_FILES['imageAdmin']))
          {
              $file_name =$_FILES['imageAdmin']['name'];
              $file_tem_loc= $_FILES['imageAdmin']['tmp_name'];
              if ($file_tem_loc=='')
              {
                 $file_store=$image;
              }
              else
              {
                 $file_store ="upload/".$file_name;
                 move_uploaded_file($file_tem_loc,$file_store); 
              }   
		  }
		$Client1=new Client($_SESSION["ID"],$name,$_POST['mail'],$_POST['adress'],$file_store,$_POST['passwd'],$phone,$nom,$prenom,$date);
		$Client1C=new ClientC();
		$Client1C->modifierClient($Client1,$_SESSION["ID"]);
         ?> 
         <script>
    window.location = './ProfilClient-Informations.php';
         </script>
         <?php
        // header("location:./CAdmins.php");
         }?>


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