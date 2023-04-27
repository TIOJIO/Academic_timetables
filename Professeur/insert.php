<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $username=$_POST['username'];
      $names=$_POST['names'];
      $email=$_POST['email'];
      $tel=$_POST['tel'];
      $matricule=$_POST['matricule'];
      $photo=$_POST['photo'];
      $date_naiss = $_POST['date_naiss'];
      $ecole = $_POST['ecole']; 
      $dep = $_POST['dep']; 
      $filiere = $_POST['filiere']; 
      $matiere = $_POST['matiere']; 

  $req=$pdo->prepare("INSERT INTO professeur(username,names,email,telephone,matricule,date_naiss,photos,nom_ecole,nom_dep,nom_filiere,nom_matiere) 
  VALUES(:username,:names,:email,:telephone,:matricule,:date_naiss,:photos,:nom_ecole,:nom_dep,:nom_filiere,:nom_matiere)");   
  $result= $req->execute([
  'username' => $username,
  'names' => $names,
  'email' => $email,
  'telephone' => $tel,
  'matricule' => $matricule,
  'date_naiss' => $date_naiss,
  'photos' => $photo,
  'nom_ecole' => $ecole,
  'nom_dep' => $dep,
  'nom_filiere' => $filiere,
  'nom_matiere' => $matiere,
]);
if($result){
header("location:../professeur.php");
}else{
   echo 'error';
}


 


      
        
    }
?>

