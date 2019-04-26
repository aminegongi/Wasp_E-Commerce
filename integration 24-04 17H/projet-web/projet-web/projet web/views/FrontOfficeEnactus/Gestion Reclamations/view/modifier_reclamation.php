

		<?PHP
		include "../entities/reclamationE.php";
        include "../core/reclamationC.php";
        //include 'afficher_reclamation.php';

        
        $des = $_GET['designation'];
                                $reclamationC=new ReclamationC();
                                if( isset($_POST['description']) and isset($_POST['nomCategorie'])){
                                
                                        $reclamation=new reclamation($_POST['nomCategorie'],$des,$_POST['description'],"Pas de Reponse"); 
                                        $reclamationC->modifierReclamation($reclamation,$des);  	
                                        header('Location: ../view/afficher_reclamation.php');
                                }else{
                                    echo"check2";
                                }
                                
								?>
							