<?php

   DEFINE ('DB_HOST', 'localhost');
   DEFINE ('DB_USER', 'root');
   DEFINE ('DB_PASSWORD', 'motdepasse');
   DEFINE ('DB_NAME', 'adp');

  $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
  
    OR    die('Pas de connexion à MySQL' . 
      
       mysqli_connect_error());


?>