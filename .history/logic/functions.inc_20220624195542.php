<?php

function emptyInputRegister($name,$address,$email,$password,$confirmPass)
{
    $result =false;
    if(empty($name)||empty($address)||empty($email)||empty($password)||empty($confirmPass)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function invalidName($name){
    $result=false;
    if(!preg_match(("/^[a-zA-Z0-9]*$/"),$name)){
        $result=true;
    }
 
    return $result;
}

function invalidEmail($email){
    $result=false;
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
 
    return $result;
}

function isMatchPassword($password,$confirmPass){
    $result=false;
    if($password==$confirmPass){
        $result=true;
    }
 
    return $result;
}
function isExistUser($conn,$name,$email){
    $sql="SELECT * FROM users WHERE userID =? OR userEmail=?; ";
    $statement=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/register.php?error==smtFailed");
        exit();
    }
    mysqli_stmt_bind_param($statement,"");
}