<?php
if (isset($_POST["submit"])){
    $email=$_POST["userEmail"];
    $password=$_POST["userPassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputLogin($email,$password)==true){
        header("location: ../index.php?error=emptyInput");
        exit();
    }
    if(invalidEmail($email)){
        header("location: ../index.php?error=invalidEmail");
        exit();
    }

    loginWithEmailPassword($conn,$email,$password);

}
else{
    header("location: ../index.php");
    exit();
}
?>