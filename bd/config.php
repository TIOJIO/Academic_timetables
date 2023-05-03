<?php
   
    try {
         $pdo = new PDO("mysql:host=stima-db.mysql.database.azure.com;Database=stima_db", "TIOJIO", "tiojio15#");
    } catch (\Throwable $th) {
        echo $th;
    }
?>


