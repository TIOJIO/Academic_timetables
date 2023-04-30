<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body >

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <br>
                         <h1 style="text-align: center;" >lkjhgfdd</h1>
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block ">
                                <img src="./img/log1.png" style="margin-left: 50px;margin-top: 50px;" width="auto" height="auto" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form method="post" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" required class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Entrer Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="matricule" required class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Matricule">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input name="login" class="btn btn-primary btn-user btn-block" type="submit" value="Login" />

                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div>
                                </div>
                            </div >
                        </div>

                              <?php
                                        include_once('bd/config.php');
                                        $error= "le nom d'utilisateur ou le mot de passe est incorrect";
                                        if (isset($_POST['login'])) {  
                                            $username= $_POST['username'];
                                            $matricule=$_POST['matricule'];
                                            session_start();
                                              $_SESSION['username'] = $username;
                                              $_SESSION['matricule'] = $matricule;

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
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>