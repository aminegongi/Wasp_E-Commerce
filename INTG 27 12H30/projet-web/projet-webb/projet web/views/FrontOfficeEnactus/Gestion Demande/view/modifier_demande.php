

		<?PHP
        //include "../core/reclamationC.php";
        
        include "../core/demandeC.php";
        include "../entities/demandeE.php";
        if(isset($_POST['demander'])){
	
            $choix=$_FILES['choix_image']['name'];
            $targetDir = "../images_demande/";
            $fileName = basename($_FILES['choix_image']['name']);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            move_uploaded_file($_FILES['choix_image']['tmp_name'],$targetFilePath);
        
        }else{
            $choix = "none";
        }

                                $id_demande = $_GET['id_demande'];
                                $id_client = $_GET['id_client'];
                                
                                if(isset($_POST['description']) and isset($_POST['id_commande']) and isset($_POST['nomProduit']) ){

                                    $nomP = $_GET['nomProduit'];
                                    $nomP;
                                    $sql="SElECT * From produit where nom = '$nomP' ";
                                    $db = config10::getConnexion();
                                    
                                    try{
                                        $liste=$db->query($sql);
                                    }
                                    catch (Exception $e){
                                        die('Erreur: '.$e->getMessage());
                                    }
                                    foreach($liste as $row){
                                        $id_projet =  $row['id_projet'];
                                    }
                                    echo $id_projet;

                                        $demande=new Demande( $_POST['nomProduit'],$targetFilePath,$_POST['id_commande'],$id_client, $_POST['description'], $id_projet);
                                        $demandeC=new DemandeC( );  
                                        //echo $demande->setID_demande($id_demande);
                                        $demandeC->modifierDemande($demande, $id_demande);
                                        header('Location: ../view/afficher_demande.php');   
                                    }else{
                                        echo "verifiez les champs";
                                    }
                                    
                                    ?>
							