<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM plagehoraires WHERE id_plage=$a");
    $delete->execute();
    header("location:../PlageHoraire.php.php");
} else {
    echo "échec";
}
