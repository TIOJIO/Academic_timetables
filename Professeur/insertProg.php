<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['save'])){
      $jour=$_POST['jour'];
      $heure_debut=$_POST['heure_debut'];
      $heure_fin=$_POST['heure_fin'];
      $salle=$_POST['salle'];
      $matiere = $_POST['matiere']; 
      $filiere = $_POST['filiere']; 
      $prof = $_POST['prof']; 
      $periode_debut = $_POST['periode_debut']; 
      $periode_fin = $_POST['periode_fin']; 
      $id_prof = $_POST['id_prof']; 

    
       echo  $heure_debut;
       echo  $heure_fin;


  $req=$pdo->prepare("INSERT INTO programme(prof,jour,heure_debut,heure_fin,salle,matiere,filiere,id_prof,periode_debut,periode_fin) 
  VALUES(:prof,:jour,:heure_debut,:heure_fin,:salle,:matiere,:filiere,:id_prof,:periode_debut,:periode_fin)");   
  $result= $req->execute([
  'prof' => $prof,
  'jour' => $jour,
  'heure_debut' => $heure_debut,
  'heure_fin' => $heure_fin,
  'salle' => $salle,
  'matiere' => $matiere,
  'filiere' => $filiere,
  'id_prof' => $id_prof,
  'periode_debut' => $periode_debut,
  'periode_fin' => $periode_fin,

]);
if($result){
  header('location:./ProgrammerProf.php?$idi='.$id_prof.'');
}else{
   echo 'error';
}


 


      
        
    }
?>

