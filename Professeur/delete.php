<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM professeur WHERE id_prof=$a");
    $delete->execute();
    header("location:../professeur.php");
} else {
    echo "échec";
}
