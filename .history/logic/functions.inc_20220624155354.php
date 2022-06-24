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
    $result;
    if(!preg_match(("/^[a-zA-Z0-9]*$/"),$name)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}