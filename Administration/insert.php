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
      $poste = $_POST['poste'];


  $req=$pdo->prepare("INSERT INTO administration(username,names,matricule,photo,email,telephone,date_naiss,poste) 
  VALUES(:username,:names,:matricule,:photo,:email,:telephone,:date_naiss,:poste)");   
  $result= $req->execute([
  'username' => $username,
  'names' => $names,
  'matricule' => $matricule,
  'photo' => $photo,
  'email' => $email,
  'telephone' => $tel,
  'date_naiss' => $date_naiss,
  'poste' => $poste,

]);
if($result){
header("location:../Administration.php");
}else{
   echo 'error';
}


 


      
        
    }
?>

