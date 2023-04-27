<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM departement WHERE id_dep=$a");
    $delete->execute();
    header("location:../Departement.php");

} else {
    echo "échec";
}
