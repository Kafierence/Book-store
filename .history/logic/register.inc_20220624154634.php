<?php

if(isset($_POST["submit"])){
    $name=$_POST["userName"];
    $address=$_POST["userAddress"];
    $email=$_POST["userEmail"];
    $password=$_POST["userPassword"];
    $confirmPass=$_POST["userConfirmPassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputRegister($name,$address,$email,$password,$confirmPass)!==false){
        header("location: ../pages/register.php?error==emptyInput");
        exit();
    }
    if(invalidName($name)==true){
        header("location: ../pages/register.php?error==invalidName");
        exit();
    }
    if(invalidEmail($email)==true){

    }
    if(isMatchPassword($password,$confirmPass)){

    }
    if(isExistUser($conn,$name)){

    }
    
    


}