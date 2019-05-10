

		<?PHP
        //include "../core/reclamationC.php";
        
        include "../core/demandeC.php";
        include "../entities/demandeE.php";
                                
                                if(isset($_POST['id_demande']) ){
                                        $demandeC=new DemandeC();  
                                        $demandeC->supprimerDemande( $_POST['id_demande']);
                                        header('Location: ../view/afficher_demande.php');   
                                    }else{
                                        echo "verifiez les champs";
                                    }
                                    
                                    ?>