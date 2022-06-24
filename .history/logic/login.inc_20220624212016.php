<?php
if (isset($_POST["submit"])){
    $email=$_POST["userEmail"];
    $password=$_POST["userPassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputLogin($email,$password)==true){
        header("location: ../pages/login.php?error=emptyInput");
        exit();
    }
    if(invalidEmail($email)){
        header("location: ../pages/login.php?error=invalidEmail");
        exit();
    }

    loginWithEmailPassword($email,$password);

}
else{
    header("location: ../pages/register.php");
    exit();
}
?>