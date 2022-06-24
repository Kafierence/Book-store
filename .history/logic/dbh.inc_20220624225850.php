<?php
$serverName="";
$DBUserName="root";
$DBPassword="";
$DBName="db_a88fa3_binnam0";

$conn= mysqli_connect($serverName,$DBUserName,$DBPassword,$DBName);
//we use mysqli 

if(!$conn){
    die("Connection failed ".mysqli_connect_error());
    
}


?>