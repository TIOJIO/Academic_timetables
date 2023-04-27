<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $label=$_POST['label'];
      $directeur=$_POST['directeur'];
      $photo=$_POST['image'];
  

  $req=$pdo->prepare("INSERT INTO ecole(nom,nbr_dep,responsable,photo) 
  VALUES(:nom,:nbr_dep,:responsable,:photo)");   
  $result= $req->execute([
  'nom' => $label,
  'nbr_dep' => '0',
  'responsable' => $directeur,
  'photo' => $photo,
]);
if($result){
header("location:../Ecole.php");
}else{
   echo 'error';
}


 


      
        
    }
?>

