<?php


include_once('../bd/config.php');

if (isset($_GET['$idi'])) {


    $a = $_GET['$idi'];

    $delete = $pdo->prepare("DELETE FROM Administration WHERE id_membre=$a");
    $delete->execute();
    header("location:../Administration.php");
} else {
    echo "échec";
}
