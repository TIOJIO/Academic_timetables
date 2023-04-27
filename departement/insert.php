<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $ecole=$_POST['ecole'];
      $nom_dep=$_POST['nom_dep'];
      $chef_dep=$_POST['chef_dep'];
      $photo=$_POST['image'];
  

  $req=$pdo->prepare("INSERT INTO departement(nom,chef_dep,ecole,photo,nbr_filiere) 
  VALUES(:nom,:chef_dep,:ecole,:photo,:nbr_filiere)");   
  $result= $req->execute([
  'nom' => $nom_dep,
  'chef_dep' => $chef_dep,
  'ecole' => $ecole,
  'photo' => $photo,
  'nbr_filiere' => 0,
]);
if($result){
header("location:../Departement.php");
}else{
   echo 'error';
}


 


      
        
    }
?>

