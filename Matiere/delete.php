<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM matiere WHERE id_matiere=$a");
    $delete->execute();
    header("location:../Matiere.php");

} else {
    echo "échec";
}
