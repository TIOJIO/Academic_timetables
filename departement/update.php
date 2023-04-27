<?php
    include_once('../bd/config.php');
 
    
    if(isset($_POST['save'])){
        $ecole=$_POST['ecole'];
      $nom_dep=$_POST['nom_dep'];
      $chef_dep=$_POST['chef_dep'];
      $photo=$_POST['image'];
      $idi=$_POST['idi'];


    $mod = $pdo->prepare("UPDATE departement SET nom='$nom_dep', chef_dep='$chef_dep',ecole='$ecole',photo='$photo',nbr_filiere='0' WHERE id_dep=$idi");
      $mod->execute();   
     header("location:../Departement.php");

      
        
    }
?>
