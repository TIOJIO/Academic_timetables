<!-- Script de connection a la base de donné -->
<?php
   
    try {
         $pdo = new PDO("mysql:host=localhost;dbname=emploi_temps", "root", "");
    } catch (\Throwable $th) {
        echo $th;
    }
?>