<?php

function AddNewUser($name , $email , $password){
    $con = mysqli_connect("localhost","root","","fs8_proone");
    $sql = "INSERT INTO `user` (`name`,`email`,`password`)  VALUES ('$name','$email','$password')";

    mysqli_query($con,$sql);
    $res = mysqli_affected_rows($con);
    if($res= 1){
    
        return true;
    }else{
        return false;
    }

}


function login($email,$password){
    $con = mysqli_connect("localhost","root","","fs8_proone"); 
    $sql = "SELECT * FROM `user` WHERE `email`= '$email' && `password`='$password'";
  
  
  
    $query= mysqli_query($con,$sql);
    $result= mysqli_fetch_assoc($query);
    return $result;
  
}