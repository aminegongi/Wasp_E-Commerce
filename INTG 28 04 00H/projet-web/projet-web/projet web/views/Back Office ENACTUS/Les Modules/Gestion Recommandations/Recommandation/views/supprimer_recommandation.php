

		<?PHP
        //include "../core/reclamationC.php";
        
        include "../core/recommandationC.php";
        include "../entities/recommandationE.php";
                                        $recommandationC=new RecommandationC();  
                                        $recommandationC->supprimerRecommandation( $_GET['id']);
                                        header('Location:afficher_recommandation.php');   
                                    
                                    ?>