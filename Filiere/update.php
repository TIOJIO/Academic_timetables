<?php
    include_once('../bd/config.php');
 
    
    if(isset($_POST['save'])){
      $ecole=$_POST['ecole'];
      $dep=$_POST['dep'];
      $nom_filiere=$_POST['nom_filiere'];
      $resp_filiere=$_POST['resp_filiere'];
      $photo=$_POST['image'];
      $idi=$_POST['idi'];


    $mod = $pdo->prepare("UPDATE filiere SET nom_filiere='$nom_filiere', ecole='$ecole',dep='$dep',resp_filiere='$resp_filiere',photo='$photo' nbr_matiere='0' WHERE id_dep=$idi");
      $mod->execute();   
     header("location:../Filiere.php");

      
        
    }
?>
