<?php

try{
$pdo= new PDO('mysql:host=localhost;dbname=stima_db','root', '');
}catch (Exception $e)
{
    die('Erreur :' . $e-> getMessage());
}

?>