<?php



$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "stima-db.mysql.database.azure.com", "romain", "tiojio15#", "stima_db", 3306, MYSQLI_CLIENT_SSL);


?>