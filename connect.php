<?php
   
$host = "localhost";
$db_name = "candidature";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if(mysqli_connect_errno())
{
    //die("Connection error ... :" . mysqli_connect_error());
    echo "error";
}

?>