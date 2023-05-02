<!-- Script de connection a la base de donné -->
<?php
   
    try {
         $pdo = new PDO("mysql:host=stima-db.mysql.database.azure.com;dbname=stima_db", "romain", "tiojio15#");
    } catch (\Throwable $th) {
        echo $th;
    }
?>