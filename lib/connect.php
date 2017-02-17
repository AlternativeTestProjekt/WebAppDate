<?php

//$host = "mysql24.1blu.de";
$host = "localhost";
//$user = "s261039_2548973";
$user = "root";
//$password = "Fuchs1schwanz";
$password = "";
//$database = "db261039x2548973";
$database = "cepa";
$con = mysqli_connect($host, $user, $password, $database);

if(!$con)
{
  echo 'Es konnte keine Verbindung zum SQL Server hergestellt werden!';  
}
?>