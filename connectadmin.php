<?php
                                        include_once('bd/config.php');
                                        $error= "le nom d'utilisateur ou le mot de passe est incorrect";
                                        if (isset($_POST['login'])) {  
                                            $username= $_POST['username'];
                                            $matricule=$_POST['matricule'];
                                              

                                             
                                                     
                                                    echo "<h3 style=color:green;text-align:center;font: size 100px;font-weight: bold;>connexion en cours...</h3>";
                                                    header('location:./admin.php');
                                                

                                               
                                        }
                                   ?>