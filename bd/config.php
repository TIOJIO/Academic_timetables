<?php
   $options = array();
   $options[PDO::MYSQL_ATTR_SSL_CA] = '/path/to/ca-cert.pem' ;
   $options[PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT] = false ;
    try {
         $pdo = new PDO("mysql:host=stima-db.mysql.database.azure.com;Database=stima_db", "TIOJIO", "tiojio15#");
    } catch (\Throwable $th) {
        echo $th;
    }
?>


