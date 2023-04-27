<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $ecole=$_POST['ecole'];
      $dep=$_POST['dep'];
      $nom_filiere=$_POST['nom_filiere'];
      $resp_filiere=$_POST['resp_filiere'];
      $photo=$_POST['image'];
  

  $req=$pdo->prepare("INSERT INTO filiere(nom_filiere,ecole,dep,resp_filiere,photo,nbr_matiere) 
  VALUES(:nom_filiere,:ecole,:dep,:resp_filiere,:photo,:nbr_matiere)");   
  $result= $req->execute([
  'nom_filiere' => $nom_filiere,
  'ecole' => $ecole,
  'dep' => $dep,
  'resp_filiere' => $resp_filiere,
  'photo' => $photo,
  'nbr_matiere' => 0,
]);
if($result){
header("location:../Filiere.php");
}else{
   echo 'error';
}


 


      
        
    }
?>

