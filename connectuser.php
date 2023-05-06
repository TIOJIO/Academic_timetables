                                <?php
                                        include_once('bd/config.php');
                                        $error= "le nom d'utilisateur ou le mot de passe est incorrect";
                                        if (isset($_POST['login'])) {  
                                            $username= $_POST['username'];
                                            $matricule=$_POST['matricule'];
                                              

                                              $req = $pdo->prepare("SELECT * FROM professeur WHERE username = '$username' AND  matricule= '$matricule'");
                                              $req->execute();
                                              $result = $req->fetchAll();

                                              $req1 = $pdo->prepare("SELECT * FROM etudiant WHERE username = '$username' AND  matricule= '$matricule'");
                                              $req1->execute();
                                              $result1 = $req1->fetchAll();

                                              $req2 = $pdo->prepare("SELECT * FROM administration WHERE username = '$username' AND  matricule= '$matricule'");
                                              $req2->execute();
                                              $result2 = $req2->fetchAll();


                                          //authentification etudiant
                                                if ($result1 == true){
                                                        $filiere = $pdo->prepare("SELECT*FROM etudiant WHERE matricule ='$matricule' ");
                                                        $filiere->execute();

                                                        foreach ($filiere as $rowf){
                                                            $nom_filiere = $rowf['id_etudiant'];
                                                            $nom_filieres = $rowf['nom_filiere'];

                                                            }
                                                        echo "<h3 style=color:green;text-align:center;font: size 100px;font-weight: bold;>connexion en cours...</h3>";
                                                        header('location:./SESSION/Etudiant/Etudiant.php?$nom_filiere='.$nom_filiere.'');
                                                }elseif(($result == true)){
                                                        $prof = $pdo->prepare("SELECT id_prof FROM professeur WHERE matricule ='$matricule' ");
                                                        $prof->execute();
                                                        foreach ($prof as $rowp){
                                                            $idi = $rowp['id_prof'];

                                                            }
                                                        echo "<h3 style=color:green;text-align:center;font: size 100px;font-weight: bold;>connexion en cours...</h3>";
                                                         header('location:./SESSION/Professeur/Professeur.php?$idi='.$idi.'');
                                                    
                                                    
                                                }elseif(($result2 == true)){
                                                    $req2 = $pdo->prepare("SELECT * FROM administration WHERE username = '$username' AND  matricule= '$matricule'");
                                                    $req2->execute();
                                                        foreach ($req2 as $rowp){
                                                            $idi = $rowp['id_membre'];

                                                            }
                                                        echo "<h3 style=color:green;text-align:center;font: size 100px;font-weight: bold;>connexion en cours...</h3>";
                                                        header('location:./admin.php?$idi='.$idi.'');
                                                }else{
                                                    echo "<p style=color:red;text-align:center;>Desolé le nom utilisateur et matricule ne correspondent pas<p> ";
                                                   exit;
                                                }

                                              
                                            
                                        }
                                   ?>