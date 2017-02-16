<?php

$host = "mysql24.1blu.de";
$user = "s261039_2548973";
$password = "Fuchs1schwanz";
$database = "db261039x2548973";
$con = mysqli_connect($host, $user, $password, $database);

if($con)
{
  echo 'nein';  
}
?>