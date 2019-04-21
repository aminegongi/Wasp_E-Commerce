<?php
                                        include "../../core/ProjetC.php";
                                        include "../../entities/Projet.php";
                                        $Projet1C=new ProjetC();
                                        $listeProjet=$Projet1C->afficherProjets();
?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from escope.tn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 13:51:51 GMT -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enactus Esprit ICT</title>
    
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
     <!-- CSS Custom -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- favicon Icon -->
    <!--<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">-->
    <!-- CSS Plugins -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
        <link href="css/gallery.css" rel="stylesheet">

        
        <!--== font-awesome ==-->
        
        <!--== magnific-popup ==-->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        
        <!--== owl carousel ==-->
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        
        <!--== animate css ==-->
        <link href="assets/css/animate.min.css" rel="stylesheet">

        <!--== style css ==-->
        <link href="assets/css/style.css" rel="stylesheet">
        
        <!--== responsive css ==-->
        <link href="assets/css/responsive.css" rel="stylesheet">
        
        <!--== theme color css ==-->
        <link href="assets/css/theme-color.css" rel="stylesheet">

        <script src="assets/js/jquery-2.1.4.min.js"></script>

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
<body>


<header class="navbar-fixed-top">
	<div class="container">
    	<div class="row">
        	<div class="header_top">
        		<div class="col-md-2">
            		<div class="logo_img">
						<a href="#home"><img src="images/logo3.png" alt="logoimage" width="100" height=auto style="margin-left: 50px;"></a>
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
									  <li><a href="#home" class="js-target-scroll">Acceuil</a></li>
									  <li><a href="#services" class="js-target-scroll">Introduction</a></li>
									  <li><a href="#work" class="js-target-scroll">Les Projets</a></li>
                                      <li><a href="#contact" class="js-target-scroll">Contact</a></li>
                                      <li><a href="./login/login.php" ><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"	width="30px" height=auto style="background-color:white;" ></a></li>
                                    </ul>
                                </div>
						</nav>
					</div>
    	  </div>
			  </div>
			</div>
		</div>
</header>

<section id="home" class="top_banner_bg secondary-bg" style="height: 860px;">
	<div class="container">
			<video autoplay loop muted width="100%" height=auto>
					<source src="EnactusEspritICTVideo.mp4" type="video/mp4">
				</video>
	</div>
</section>


<section id="services" class="our_service_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_heading section_heading_2">
					<h2 style="color:#fec139"> Enactus Esprit ICT </h2>
				
					<!-- <h4> E-SCOPE providing the best services to save your life</h4> -->
				</div>
				
				<div class="col-md-5 pull-right">
					<img src="images/contact_bg.jpg" alt="Image EnactusWin" style="float:right;">
				</div>
				
				<div class="col-md-7">
					<p style="color:white;">
						ENACTUS est une organisation non gouvernementale internationale à but non lucratif, créée en 1975 aux USA.
						Enactus est une communauté d’étudiants, d’universitaires et de chefs d’entreprises qui s’engagent à utiliser la force positive 
						de l’entrepreneuriat afin d’améliorer le niveau et la qualité de vie des personnes dans le besoin.
						Avec plus de 1400 universités et grandes écoles réparties dans 38 pays, Enactus est le plus vaste réseau international 
						qui rassemble l’expertise du monde de l’entreprise, le savoir-faire des enseignants ainsi que l’énergie et l’enthousiasme des 
						étudiants qui s’engagent au service de la société.
						La mission d’Enactus est de favoriser le progrès à travers l’action entrepreneuriale et l’engagement des jeunes.
						ENACTUS accompagne les étudiants dans la mise en oeuvre de projets d’entrepreneuriat social avec l’implication de professionnels 
						de l’entreprise et du corps enseignant. Les étudiants regroupés en équipe représentant chacune une institution de l’enseignement supérieur, 
						réalisent ou développent un ou des projets d’entreprises au profit de personnes dans le besoin, afin d’améliorer le niveau et la qualité de leur vie.
					</p>
				</div>
				
			</div>
		</div>
	</div>
</section>


<section class="primary-bg" id="work">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
				<div class="section_heading">
					<h2 style="color:#fec139;"> Les Projets </h2>
					<h4> Espaces d'achats des produits et des accessoires issu d'un projet </h4>
				</div>		

				<div style="margin-left: 7% " >
                    <?PHP
                                $i=1;
                                foreach($listeProjet as $row){
                    ?>                 
					<div class="containerImage">
                    <a name="ID" href="./Projet/<?php echo $row['nom']; ?>/index.php?ID=<?php echo $row['ID']; ?>"><img src="../Back Office ENACTUS/Les Modules/Gestion Projets/<?php echo $row['logo']; ?>" alt="<?php echo $row['logo']; ?>" class="image">
							<div class="overlayImage">
								<div class="textImage"><?php echo $row['nom']; ?></div>
							</div>
                    </div>
                            <?php 
                        }?>
        </div>		
			</div>
		</div>
	</div>
</section>

<section id="contact" class="contact_bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section_heading section_heading_2">
					<h2> Contact Us </h2>
				
					<h4>Let drop a line to us & we will be in touch soon.</h4>
				</div>
							
				<div class="col-md-6">
					<div class="contact_form">
					<form action="http://escope.tn/Contact.php" method="post">
					  <div class="form-group">
						<label >Full Name : <span> *</span></label>
						<input type="Text" class="form-control" id="" name="Name" >
					  </div>
					  
					  <div class="form-group">
						<label >Email Address : <span> *</span></label>
						<input type="email" class="form-control" id="exampleInputEmail1" name="Email">
					  </div>
					  
					  <div class="form-group">
						<label>Message <span> *</span></label>
						<textarea class="form-textarea" rows="3" name="Message"></textarea>
					 </div>
					  
					    <div class="section_sub_btn">
							<button class="btn btn-default" type="submit" name="submit" onclick="swal()">  Send Message</button>
					
						</div>
					</form> 
					</div>
				</div>
				
				<div class="col-md-6">
					<div class="contact_text">
						<ul>
							<li>
								<span><i class="fa fa-home" aria-hidden="true"></i></span> 
								<h5>Z.I. Chotrana II B.P. 160، Pôle Technologique El Ghazela، Ariana 2088</h5>
							</li>
							
							<li>
								<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span> 
								<h5> enactusespritICT@esprit.tn </h5>
							</li>
							
							<li>
								<span><i class="fa fa-phone" aria-hidden="true"></i></span> 
								<h5 style="margin-left: 10px;"> +216 55 685 313 </h5>
							</li>
							
						
						 
						</ul>
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</section>


<footer class="third-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="footer_top">
					<h4> Social</h4>
					
					<ul>
						<li> <a href="https://www.facebook.com/EnactusEsprit/"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
						<li> <a href="https://www.youtube.com/watch?v=yumediBtWLo"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a> </li>
						<li> <a href="https://www.instagram.com/enactusict/"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="footer_bottom fourth-bg">
          <p> 2019 &copy; Copyright. All rights Reserved. Powered By WASP </p>
    </div>				
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/interface.js"></script> 
<script type="text/javascript" src="js/sweetalert.min.js"></script>

   <script src="assets/js/plugins.js"></script>
        
        <!--== typed js ==-->
        <script src="assets/js/typed.js"></script>
        
        <!--== stellar js ==-->
        <script src="assets/js/jquery.stellar.min.js"></script>
        
        <!--== counterup js ==-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        
        <!--== waypoints js ==-->
        <script src="assets/js/jquery.waypoints.min.js"></script>
        
         <!--== wow js ==-->
        <script src="assets/js/wow.min.js"></script>
        
         <!--== validator js ==-->
        <script src="assets/js/validator.min.js"></script>
        
         <!--== mixitup js ==-->
        <script src="assets/js/jquery.mixitup.js"></script>
        
         <!--== contact js ==-->
        <script src="assets/js/contact.js"></script>
        
         <!--== main js ==-->
        <script src="assets/js/main.js"></script>

<script type="text/javascript"> 
	$(document).ready(function(){
	$("#menu_slide").click(function(){
		$("#navbar").slideToggle('normal');
	});
	});
 </script>
<!--Menu Js Right Menu-->
<script type="text/javascript">
$(document).ready(function(){
  $('#navbar > ul > li:has(ul)').addClass("has-sub");
  $('#navbar > ul > li > a').click(function() {
    var checkElement = $(this).next();
    $('#navbar li').removeClass('dropdown');
    $(this).closest('li').addClass('dropdown');	
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('dropdown');
      checkElement.slideUp('normal');
    }
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('#navbar ul ul:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });
});
<!--end-->
</script>
<script type="text/javascript">	
$("#navbar").on("click", function(event){
    event.stopPropagation();
});
$(".dropdown-menu").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $(".dropdown-menu").slideUp('normal');
});	

$(".navbar-header").on("click", function(event){
    event.stopPropagation();
});
$(document).on("click", function(event){
    $("#navbar").slideUp('normal');
});		
</script>

<script src="ajax/jquery-1.11.0.min.html"></script>
    <script src="scripts/pyaari-main.1.0.js"></script>
    <script src="scripts/pyaari-menu.1.0.js"></script>
    <script>
        $(document).ready(function () {
            PfdMenu._ctor();
        });
    </script>
    

    <script>
    	$(document).ready(function(){
	       ReadMore.init();
    	})
    </script>

</body>
<!-- JS Plugins -->
  
<!-- Mirrored from escope.tn/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Mar 2019 13:59:56 GMT -->
</html>
