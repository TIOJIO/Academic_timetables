<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM etudiant WHERE id_etudiant=$a");
    $delete->execute();
    header("location:../Eleve.php");
} else {
    echo "échec";
}
