<?php
if (isset($_POST["submit"])){
    $email=$_POST["userEmail"];
    $password=$_POST["userPassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputLogin($email,$password)==true){
        
    }

}
?>