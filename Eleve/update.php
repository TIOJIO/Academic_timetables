
<?php
    include_once('../bd/config.php');
    
    if(isset($_POST['send'])){
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
      $idi=$_POST['idi'];

       $mod = $pdo->prepare("UPDATE etudiant SET username='$username',names='$names',
             email='$email', telephone='$tel', matricule='$matricule',
             date_naiss='$date_naiss',photos='$photo', nom_ecole='$ecole', 
             nom_dep='$dep', nom_filiere='$filiere'
              WHERE id_etudiant=$idi");
              $mod->execute();   
              header("location:../Eleve.php");

      
        
    }
?>