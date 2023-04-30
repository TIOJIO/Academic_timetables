<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $debut=$_POST['debut'];
      $fin=$_POST['fin'];
      $id_prof = $_POST['id_prof']; 
    
       


  $req=$pdo->prepare("INSERT INTO plagehoraire(debut,fin,id_prof) 
  VALUES(:debut,:fin,:id_prof)");   
  $result= $req->execute([
  'debut' => $debut,
  'fin' => $fin,
  'id_prof' => $id_prof,

]);
if($result){
  header('location:./ProgrammerProf.php?$idi='.$id_prof.'');
}else{
   echo 'error';
}


 


      
        
    }
?>

