<?php 

//HERE ENTER CONNECTION
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "maindata";


if (!$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed");
}

?>