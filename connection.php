<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Pamoja_Data";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    
    die ("failed to connect!");
} 