<?php
                                        include_once('bd/config.php');
                                        $error= "le nom d'utilisateur ou le mot de passe est incorrect";
                                        if (isset($_POST['login'])) {  
                                            $username= $_POST['username'];
                                            $matricule=$_POST['matricule'];
                                              

                                              $req = $pdo->prepare("SELECT * FROM professeur WHERE username = '$username' AND  matricule= '$matricule'");
                                              $req->execute();
                                              $result = $req->fetchAll();


                                                if ($result == true){
                                                    
                                                    $prof = $pdo->prepare("SELECT id_prof FROM professeur WHERE matricule ='$matricule' ");
                                                    $prof->execute();
                                                     foreach ($prof as $rowp){
                                                         $idi = $rowp['id_prof'];

                                                     }
                                                     
                                                    echo "<h3 style=color:green;text-align:center;font: size 100px;font-weight: bold;>connexion en cours...</h3>";
                                                    header('location:./SESSION/Professeur/Professeur.php?$idi='.$idi.'');
                                                

                                                }else{
                                                
                                                    echo "<p style=color:red;text-align:center;>Desolé le nom utilisateur et matricule ne correspondent pas<p> ";
                                                   exit;
                                                    
                                                }
                                            
                                        }
                                   ?>