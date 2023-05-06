<?php
                            include_once('../bd/config.php');
                            
                            if(isset($_POST['save'])){
                            $periode_debut=$_POST['periode_debut'];
                            $periode_fin=$_POST['periode_fin'];
                            
                        $req=$pdo->prepare("INSERT INTO plagehoraires(debut,fin) 
                        VALUES(:debut,:fin)");   
                        $result= $req->execute([
                        'debut' => $periode_debut,
                        'fin' => $periode_fin,
                

                        ]);

                        if($result){
                        header('location:../PlageHoraire.php.php');
                        }else{
                        echo 'error';
                        }    
                            }
                    ?>