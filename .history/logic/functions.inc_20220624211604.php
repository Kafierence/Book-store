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
function emptyInputLogin($email,$password){
    $result=false;
    if(empty($email)||empty($password)){
        $result=true;
    }
    return $result;
}

function invalidName($name){
    $result=false;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
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
    $sql="SELECT * FROM users WHERE  usersEmail=?; ";
    $statement=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/register.php?error==smtFailed");
        exit();
    }
    mysqli_stmt_bind_param($statement,"s",$email);
    mysqli_stmt_execute($statement);

    $resultData=mysqli_stmt_get_result($statement);
    if($row=mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($statement);
}

function  createUser($conn,$name,$address,$email,$password){
    $sql="INSERT INTO users(usersName,usersEmail,usersPwd,usersAddress) VALUE(?,?,?,?)";
    $statement=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($statement,$sql)){
        header("location: ../pages/register.php?error==smtFailed");
        exit();
    }
    $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($statement,"ssss",$name,$email,$hashedPassword,$address);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: ../pages/login.php");
    exit();

}