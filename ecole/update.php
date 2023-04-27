<?php
    include_once('../bd/config.php');
 
    
    if(isset($_POST['save'])){
        $label=$_POST['label'];
        $directeur=$_POST['directeur'];
        $photo=$_POST['photo'];
        $idi=$_POST['idi'];

       $mod = $pdo->prepare("UPDATE ecole SET nom='$label', nbr_dep='0',responsable='$directeur',photo='$photo' WHERE id_ecole=$idi");
              $mod->execute();   
              header("location:../Ecole.php");

      
        
    }
?>
