<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM ecole WHERE id_ecole=$a");
    $delete->execute();
    header("location:../Ecole.php");

} else {
    echo "échec";
}
