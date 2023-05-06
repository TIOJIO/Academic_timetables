<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $debut=$_POST['debut'];
      $fin=$_POST['fin'];
      $id_filiere = $_POST['id_filiere']; 
    
  $req=$pdo->prepare("INSERT INTO plagehorairecours(debut,fin,id_filiere) 
  VALUES(:debut,:fin,:id_filiere)");   
  $result= $req->execute([
  'debut' => $debut,
  'fin' => $fin,
  'id_filiere' => $id_filiere,

]);
if($result){
  header('location:./ProgrammerCour.php?$idi='.$id_filiere.'');
}else{
   echo 'error';
}    
    }
?>

