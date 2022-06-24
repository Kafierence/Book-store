<?php
$serverName="";
$DBUserName="root";
$DBPassword="";
$DBName="phpproject1";

$conn= mysqli_connect($serverName,$DBUserName,$DBPassword,$DBName);
//we use mysqli 

if(!$conn){
    die("Connection failed ".mysqli_connect_error());
    
}


?>