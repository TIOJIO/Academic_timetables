<?php
    include_once('../bd/config.php');
 
    
    if(isset($_POST['save'])){
      $ecole=$_POST['ecole'];
      $dep=$_POST['dep'];
      $filiere=$_POST['filiere'];
      $nom_matiere=$_POST['mom_matiere'];
      $nbr_heure=$_POST['nbr_heure'];
      $idi=$_POST['idi'];


    $mod = $pdo->prepare("UPDATE matiere SET nom='$nom_matiere', ecole='$ecole',dep='$dep',filiere='$filiere', nbr_heure='$nbr_heure' WHERE id_matiere=$idi");
      $mod->execute();   
     header("location:../Matiere.php");

      
        
    }
?>
