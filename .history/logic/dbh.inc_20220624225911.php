<?php
$serverName="mysql5044.site4now.net";
$DBUserName="root";
$DBPassword="Tongvannam1@";
$DBName="db_a88fa3_binnam0";

$conn= mysqli_connect($serverName,$DBUserName,$DBPassword,$DBName);
//we use mysqli 

if(!$conn){
    die("Connection failed ".mysqli_connect_error());
    
}


?>