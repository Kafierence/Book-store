<?php

/*  $serverName="localhost";
$DBUserName="root";
 $DBPassword="";
 $DBName="phpproject1"; */

$serverName="MYSQL5044.site4now.net";
$DBUserName="a88fa3_binnam0";
$DBPassword="Tongvannam1@";
$DBName="db_a88fa3_binnam0";

$conn= mysqli_connect($serverName,$DBUserName,$DBPassword,$DBName);
//we use mysqli 

if(!$conn){
    die("Connection failed ".mysqli_connect_error());
    
}


?>