                         <?php
                            // Initialiser la session
                            session_start();
                            // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
                            if(!isset($_SESSION["matricule"])){
                            header("Location: ../../index.php");
                            exit(); 
                            }
                          
                        ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emploi de Temps</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
   <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./Programme.css">
    <link rel="stylesheet" href="./Professeur.css">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
     
                    <!-- Topbar Search -->
                    <a  style="font-weight: bold;text-decoration:none;font-size:40px" class="sidebar-brand d-flex align-items-center justify-content-center" >
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Sheduler SCHOOL <sup>2</sup></div>
                    </a>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                
                <?php
                    include_once('../../bd/config.php');
                      $user_name=$_SESSION['username'];
                      $user_matricule=$_SESSION['matricule'];

                    $a = $_GET['$idi'];
                    $prof = $pdo->prepare("SELECT*FROM professeur WHERE id_prof =$a ");
                    $prof->execute();

                    $periode = $pdo->prepare("SELECT*FROM plagehoraire WHERE id_prof=' $a' ORDER BY id_plage DESC LIMIT 1 ");
                    $periode->execute();
                 
                      


                    //LUNDI
                    $reql1 = $pdo->prepare("SELECT * FROM programme WHERE jour='LUNDI' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a'  ");
                    $reql1->execute();
                    $resultl1 = $reql1->fetchAll();

                    $reql2 = $pdo->prepare("SELECT * FROM programme WHERE jour='LUNDI' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                    $reql2->execute();
                    $resultl2 = $reql2->fetchAll();

                    $reql3 = $pdo->prepare("SELECT * FROM programme WHERE jour='LUNDI' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                    $reql3->execute();
                    $resultl3 = $reql3->fetchAll();

                    $reql4 = $pdo->prepare("SELECT * FROM programme WHERE jour='LUNDI' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                    $reql4->execute();
                    $resultl4 = $reql4->fetchAll();


                    //MARDI
                    $reqma1 = $pdo->prepare("SELECT * FROM programme WHERE jour='MARDI' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a' ");
                    $reqma1->execute();
                    $resultma1 = $reqma1->fetchAll();

                    $reqma2 = $pdo->prepare("SELECT * FROM programme WHERE jour='MARDI' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                    $reqma2->execute();
                    $resultma2 = $reqma2->fetchAll();

                    $reqma3 = $pdo->prepare("SELECT * FROM programme WHERE jour='MARDI' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                    $reqma3->execute();
                    $resultma3 = $reqma3->fetchAll();

                    $reqma4 = $pdo->prepare("SELECT * FROM programme WHERE jour='MARDI' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                    $reqma4->execute();
                    $resultma4 = $reqma4->fetchAll();

                    //MERCREDI
                    $reqme1 = $pdo->prepare("SELECT * FROM programme WHERE jour='MERCREDI' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a' ");
                    $reqme1->execute();
                    $resultme1 = $reqme1->fetchAll();

                    $reqme2 = $pdo->prepare("SELECT * FROM programme WHERE jour='MERCREDI' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                    $reqme2->execute();
                    $resultme2 = $reqme2->fetchAll();

                    $reqme3 = $pdo->prepare("SELECT * FROM programme WHERE jour='MERCREDI' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                    $reqme3->execute();
                    $resultme3 = $reqme3->fetchAll();

                    $reqme4 = $pdo->prepare("SELECT * FROM programme WHERE jour='MERCREDI' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                    $reqme4->execute();
                    $resultme4 = $reqme4->fetchAll();

                     //JEUDI
                     $reqje1 = $pdo->prepare("SELECT * FROM programme WHERE jour='JEUDI' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a' ");
                     $reqje1->execute();
                     $resultje1 = $reqje1->fetchAll();
 
                     $reqje2 = $pdo->prepare("SELECT * FROM programme WHERE jour='JEUDI' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                     $reqje2->execute();
                     $resultje2 = $reqje2->fetchAll();
 
                     $reqje3 = $pdo->prepare("SELECT * FROM programme WHERE jour='JEUDI' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                     $reqje3->execute();
                     $resultje3 = $reqje3->fetchAll();
 
                     $reqje4 = $pdo->prepare("SELECT * FROM programme WHERE jour='JEUDI' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                     $reqje4->execute();
                     $resultje4 = $reqje4->fetchAll();

                     //VENDREDI
                     $reqve1 = $pdo->prepare("SELECT * FROM programme WHERE jour='VENDREDI' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a' ");
                     $reqve1->execute();
                     $resultve1 = $reqve1->fetchAll();
 
                     $reqve2 = $pdo->prepare("SELECT * FROM programme WHERE jour='VENDREDI' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                     $reqve2->execute();
                     $resultve2 = $reqve2->fetchAll();
 
                     $reqve3 = $pdo->prepare("SELECT * FROM programme WHERE jour='VENDREDI' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                     $reqve3->execute();
                     $resultve3 = $reqve3->fetchAll();
 
                     $reqve4 = $pdo->prepare("SELECT * FROM programme WHERE jour='VENDREDI' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                     $reqve4->execute();
                     $resultve4 = $reqve4->fetchAll();

                     //SAMEDI
                     $reqsa1 = $pdo->prepare("SELECT * FROM programme WHERE jour='SAMEDI' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a' ");
                     $reqsa1->execute();
                     $resultsa1 = $reqsa1->fetchAll();
 
                     $reqsa2 = $pdo->prepare("SELECT * FROM programme WHERE jour='SAMEDI' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                     $reqsa2->execute();
                     $resultsa2 = $reqsa2->fetchAll();
 
                     $reqsa3 = $pdo->prepare("SELECT * FROM programme WHERE jour='SAMEDI' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                     $reqsa3->execute();
                     $resultsa3 = $reqsa3->fetchAll();
 
                     $reqsa4 = $pdo->prepare("SELECT * FROM programme WHERE jour='SAMEDI' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                     $reqsa4->execute();
                     $resultsa4 = $reqsa4->fetchAll();

                     //DIMANCHE
                     $reqdi1 = $pdo->prepare("SELECT * FROM programme WHERE jour='DIMANCHE' AND heure_debut='08:00' AND heure_fin='09:50' AND id_prof='$a' ");
                     $reqdi1->execute();
                     $resultdi1 = $reqdi1->fetchAll();
 
                     $reqdi2 = $pdo->prepare("SELECT * FROM programme WHERE jour='DIMANCHE' AND heure_debut='10:10' AND heure_fin='12:00' AND id_prof='$a' ");
                     $reqdi2->execute();
                     $resultdi2 = $reqdi2->fetchAll();
 
                     $reqdi3 = $pdo->prepare("SELECT * FROM programme WHERE jour='DIMANCHE' AND heure_debut='13:00' AND heure_fin='14:50' AND id_prof='$a' ");
                     $reqdi3->execute();
                     $resultdi3 = $reqdi3->fetchAll();
 
                     $reqdi4 = $pdo->prepare("SELECT * FROM programme WHERE jour='DIMANCHE' AND heure_debut='15:00' AND heure_fin='17:00' AND id_prof='$a' ");
                     $reqdi4->execute();
                     $resultdi4 = $reqdi4->fetchAll();


                   

                ?>

                  <?php foreach ($prof as $rows) : ?>
                        <div style="width:50%;display:flex;justify-content:space-between">
                            <h1 class="h3 mb-4 text-gray-800" >Emploi de Temps de :   <span style="color: rgba(0, 0, 255, 0.632);"><?php echo $rows['username'] ?>  <?php echo $rows['names'] ?></span></h1>        
                        </div>
      
                     <!-- DataTales Example -->
                     <div  class="card shadow mb-4"><br>
                         <?php foreach ($periode as $rowp) : ?>
                             <div id="periode" >
                                <p style="text-align: center;"> Emploi de temps</p>
                                <p style="text-align: center;"> Periode du <span style="color: rgba(0, 0, 255, 0.632);font-weight:bold"><?php echo $rowp['debut'] ?></span> au <span style="color: rgba(0, 0, 255, 0.632);font-weight:bold"><?php echo $rowp['fin'] ?></span></p>
                             </div>
                          <?php endforeach ?>

                         <div id="add">
                              <p style="text-align: center;"> Rechercher un Emploi de temps de la periode du :</p>
                               <form action="./insertPlage.php" method="post">
                                    <div  style="flex-wrap: wrap;display:flex;justify-content: space-between;width:45%;margin:auto">
                                            <div>
                                                    <p>Debut</p>
                                                    <input  name="debut" class="input-form" type="date">
                                                </div>
                                                <div>
                                                    <p>Fin</p>
                                                    <input  name="fin" class="input-form" type="date">
                                                </div>
                                                <input onclick="plagehoraire()" style="height: 40px;margin-top:55px" class="btn btn-primary" name="save" type="submit" value="Rechercher">
                                                <input  name="id_prof" style="display: none;" value="<?php echo $rows['id_prof'] ?>" type="text">
                                    </div>
                             </form>
                        </div><br>

                           
                        <div class="card-body">
                            <div class="table-responsive">
                                <table   width="100%" border="1">
                                    <thead>
                                        <tr class="entete">
                                            <th style="width: 10%;">HORAIRE</th>
                                            <th style="width: 15%;">LUNDI</th>
                                            <th style="width: 15%;">MARDI</th>
                                            <th style="width: 15%;">MERCREDI</th>
                                            <th style="width: 15%;">JEUDI</th>
                                            <th style="width: 15%;">VENDREDI</th>
                                            <th style="width: 15%;">SAMEDI </th>
                                            <th style="width: 15%;">DIMANCHE </th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr class="hauteur">                                                       
                                            <td class="colonne-horaire">08:00-09:50</td>
                                            <td  class="clon"><?php foreach ($resultl1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultma1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultme1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultje1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultve1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultsa1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultdi1 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                       
                                           
                                        </tr>   
                                        <tr class="colonne-data">
                                            <td class="colonne-horaire">09:50-10:10</td>
                                            <td >~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>

                                        </tr>   
                                        <tr class="hauteur">
                                            <td class="colonne-horaire">10:10-12:00</td>
                                            <td  class="clon"><?php foreach ($resultl2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultma2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultme2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultje2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultve2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultsa2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultdi2 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                       
                                        </tr>
                                        <tr  class="colonne-data">
                                            <td class="colonne-horaire">12:00-13:00</td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                        </tr>
                                        <tr class="hauteur">
                                            <td class="colonne-horaire">13:00-14:50</td>
                                            <td  class="clon"><?php foreach ($resultl3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultma3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultme3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultje3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultve3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultsa3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultdi3 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                       
                                        </tr>
                                        <tr class="colonne-pause">
                                            <td class="colonne-horaire">14:50-15:10</td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                            <td>~*PAUSE*~ </td>
                                        </tr>
                                        <tr class="hauteur">
                                            <td class="colonne-horaire">15:10-17:00</td>
                                            <td  class="clon"><?php foreach ($resultl4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultma4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultme4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultje4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultve4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultsa4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                            <td  class="clon"><?php foreach ($resultdi4 as $row): ?> <div class="data"> <span><?php echo $row['matiere'] ?> </span> <span class="colonne-prof"><?php echo $row['prof'] ?> </span> <span class="colonne-salle">salle : <?php echo $row['salle'] ?> </span>  </div> <?php endforeach ?></td>
                                       
                                        </tr>                                   
                                    </tbody>
                                </table><br>


                                <footer class="sticky-footer bg-white">
                                        <div class="container my-auto">
                                            <div class="copyright text-center my-auto">
                                                <span>Copyright@2023 &copy; Votre plateforme de gestion des planification horaire</span>
                                            </div>
                                        </div>
                                </footer>

                            </div>
                        </div>
                    </div> 
           <?php endforeach ?>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


           

            <!-- Footer -->
     
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        // Get the modal
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modale) {
                modale.style.display = "none";
            }
        }
        </script>

        <script>
            function plagehoraire (){
                document.getElementById('add').style.display='none';
                document.getElementById('periode').style.display='block';
            }
        </script>

</body>

</html>