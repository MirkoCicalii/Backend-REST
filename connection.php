<?php
   $servername= "172.17.0.1:3306";
   $user= "root";
   $pass = "1234";
   $db= "mydb";

   //Create Connection
   $conn = mysqli_connect($servername, $user,$pass, $db) or die("Connessione non riuscita".mysqli_connect_error());

?>