<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $ecole=$_POST['ecole'];
      $dep=$_POST['dep'];
      $filiere=$_POST['filiere'];
      $mom_matiere=$_POST['mom_matiere'];
      $nbr_heure=$_POST['nbr_heure'];
    
  

  $req=$pdo->prepare("INSERT INTO matiere(nom,ecole,dep,filiere,nbr_heure) 
  VALUES(:nom,:ecole,:dep,:filiere,:nbr_heure)");   
  $result= $req->execute([
  'nom' => $mom_matiere,
  'ecole' => $ecole,
  'dep' => $dep,
  'filiere' => $filiere,
  'nbr_heure' => $nbr_heure,
]);
if($result){
header("location:../Matiere.php");
}else{
   echo 'error';
}


 


      
        
    }
?>

