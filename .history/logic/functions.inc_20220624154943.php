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
}

function invalidName($name){
    
}