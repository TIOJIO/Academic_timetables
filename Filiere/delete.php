<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM filiere WHERE id_filiere=$a");
    $delete->execute();
    header("location:../Filiere.php");

} else {
    echo "échec";
}
